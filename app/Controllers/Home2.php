<?php

namespace App\Controllers;

class Home2 extends BaseController
{
    public function index()
    {
        
        $data = [
		    'title'   => 'La tua lista regalo online - Regalamilaluna.it',
		    'description' => 'My meta',
		    'keywords' => 'Lista nozze online',
		    'session' => $this->session,
		];
        
        echo view('sections/header',$data);
        echo view('home');
        echo view('sections/footer');
    }
}