<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {        
        return view('sections/header')
        . view('sections/menu')
        . view('home_content')
        . view('sections/footer');
    }
}
