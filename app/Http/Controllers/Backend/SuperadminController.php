<?php

namespace App\Http\Controllers\Backend;

use App\Models\Setting;
use App\Models\User;
use App\Models\Post;
use App\Models\Quiz;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class SuperadminController extends Controller
{
    public function dashboard()
    {
        $userscount = User::count();
        $postcount = Post::count();
        $quizcount = Quiz::count();
          $usersPerDay = User::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as total'))
                            ->where('created_at', '>=', Carbon::now()->subDays(15))  // last 15 days
                            ->groupBy('date')
                            ->orderBy('date', 'asc')
                            ->get();
        
        $dates = [];
        $totals = [];
        
        foreach ($usersPerDay as $day) {
            $dates[] = $day->date;
            $totals[] = $day->total;
        }
        $data = Contact::orderBy('created_at', 'desc')->paginate(20);

        return view('superadmin.dashboard', compact('data', 'userscount', 'postcount', 'quizcount', 'dates', 'totals'));
    }

    public function login()
    {
        return view('superadmin.auth.login');
    }
}
