<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | APLOG'
        ];
        return view('Pages/Home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me | APLOG'
        ];
        return view('Pages/About', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us | APLOG'
        ];
        return view('Pages/Contact', $data);
    }
}
