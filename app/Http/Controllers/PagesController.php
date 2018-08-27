<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        $title = 'Developer\'s Bio';
        //return view('pages.about', compact('title'));
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = [
            'title' => 'Services',
            'services' => ['Web Programming','Software Development','SEO']
        ];
        return view('pages.services')->with($data);
    }
}
