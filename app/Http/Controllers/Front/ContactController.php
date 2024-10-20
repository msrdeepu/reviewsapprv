<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function newcontact()
    {
        return view('front.contact');
    }

    public function createcontact(Request $request)
    {
   



        $input = $request->except(['_token']);
        // dd($input);

        $result = Contact::create($input);


        toastr()->success('Messege Sent Succesfuly!');

        return redirect()->back();
    }
}
