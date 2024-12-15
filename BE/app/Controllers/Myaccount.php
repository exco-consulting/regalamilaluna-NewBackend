<?php

namespace App\Controllers;

class Myaccount extends BaseController
{
    public function index(): string
    {        
        return view('sections/header')
        . view('sections/menu')
        . view('myaccount');
        //. view('sections/footer');
    }
}
