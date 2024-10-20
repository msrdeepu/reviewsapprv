<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchprofessors(Request $request)
    {
        // dd($request->all());



        $data = [
            (object)[
                'name' => "Chris",
               'avatar' => "https://ui.schronix.com/assets/images/course-filter/1.jpg",
                'subject' => "CS-511",
                'bio' => "Lorem ipsum dolor sit amet, this is some dummy data text",
                'lectures' => 22,
                'email' => "demo@domain.com",
            ],
            (object)[
                'name' => "Chris",
               'avatar' => "https://ui.schronix.com/assets/images/course-filter/1.jpg",
                'subject' => "CS-511",
                'bio' => "Lorem ipsum dolor sit amet, this is some dummy data text",
                'lectures' => 22,
                'email' => "demo@domain.com",
            ],
            (object)[
                'name' => "Chris",
               'avatar' => "https://ui.schronix.com/assets/images/course-filter/1.jpg",
                'subject' => "CS-511",
                'bio' => "Lorem ipsum dolor sit amet, this is some dummy data text",
                'lectures' => 22,
                'email' => "demo@domain.com",
            ],
            (object)[
                'name' => "Chris",
               'avatar' => "https://ui.schronix.com/assets/images/course-filter/1.jpg",
                'subject' => "CS-511",
                'bio' => "Lorem ipsum dolor sit amet, this is some dummy data text",
                'lectures' => 22,
                'email' => "demo@domain.com",
            ],
            (object)[
                'name' => "Chris",
               'avatar' => "https://ui.schronix.com/assets/images/course-filter/1.jpg",
                'subject' => "CS-511",
                'bio' => "Lorem ipsum dolor sit amet, this is some dummy data text",
                'lectures' => 22,
                'email' => "demo@domain.com",
            ],
            (object)[
                'name' => "Chris",
               'avatar' => "https://ui.schronix.com/assets/images/course-filter/1.jpg",
                'subject' => "CS-511",
                'bio' => "Lorem ipsum dolor sit amet, this is some dummy data text",
                'lectures' => 22,
                'email' => "demo@domain.com",
            ],
        ];
       
        

        return view('user.searchprofresults', compact('data'));
    }
}
