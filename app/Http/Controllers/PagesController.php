<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home() {
        $people = ['Jango', 'Boba', 'Han'];
        /*$people = [];*/
        return view('welcome', compact('people'));
    }

    public function about() {
        return view('about');
    }

    public function test() {
        return view('test');
    }

    public function clickTest(){
        return view('clickTest');
    }
}
