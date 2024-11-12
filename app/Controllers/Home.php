<?php namespace App\Controllers;

use App\Models\MenuModel;

class Home extends BaseController
{
    public function index(): string{
        return view('header')
        .view('index')
        .view('footer')
        .view('features')
        .view('about')
        .view('menu')
        .view('team')
        .view('gallery')
        .view('contact');
    }

    public function ifeatures(): string{
        return view('header')
        .view('features')
        .view('footer');
    }

    public function iabout(): string{
        return view('header')
        .view('about')
        .view('footer');
    }
    public function imenu(): string{
        return view('header')
        .view('menu')
        .view('footer');
    }
    public function iteam(): string{
        return view('header')
        .view('team')
        .view('footer');
    }
    public function igallery(): string{
        return view('header')
        .view('gallery')
        .view('footer');
    }

    public function icontact(): string{
        return view('header')
        .view('contact')
        .view('footer');
    }

}
