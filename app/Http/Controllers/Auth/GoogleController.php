<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoogleController extends Controller
{
    public function googleauth()
    {
        return Socialite::driver('google')->redirect();
    }
    
    public function cllbackgoogleauth()
    {
       try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            // Check if the user already exists in the database
            $existingUser = User::where('email', $googleUser->email)->first();

            if ($existingUser) {
                // Log in the user if they already exist
                Auth::login($existingUser);
            } else {
                // Create a new user if they don't exist
                $newUser = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'password' => Hash::make(uniqid()), 
                ]);

                Auth::login($newUser);
            }

            
            return redirect()->route('main.home');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Something went wrong');
        }
    }
}
