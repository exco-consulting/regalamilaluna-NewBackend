<?php

namespace App\Controllers;

class Myaccount extends BaseController
{
    public function index()
    {   
        $session = session();     
        
        If($session->get('logged_in'))
        {
            return view('sections/header')
            . view('sections/menu')
            . view('myaccount')
            . view('sections/footer');
        } else 
        {
            // go to login page
            return redirect()->to('login/');
        }
    }
}
