<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Laravel';
        //Two ways of passing this variable
        // return view('pages.index', compact('title'));
        //This allows you to pass multiple values as an array...
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = 'About Us';

        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        //Passing multiple values

        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO'],
        );
        return view('pages.services')->with($data);
    }
}