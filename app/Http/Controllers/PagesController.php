<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function hjem(){
        $title = "Welcome to my page";
        // return view('pages.hjem', compact('title'));
        return view('pages.hjem')->with('title', $title);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $studier = array(
            'title' => 'Studier',
            'studiene' => ['Data-ingeniør', 'Digital Medier','Informatikk']
        );
        return view('pages.services')->with($studier);
    }
}
