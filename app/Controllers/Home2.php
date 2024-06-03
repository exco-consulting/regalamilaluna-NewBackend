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
        
        $party = model('Party');
        $dataparty = [
            'type' => 'individual',
            'name'    => 'test1',
            'surname'    => 'test1',
            'dob'    => '01/01/1980',
            'email'    => 'lucatest1@libero.it',
            'phone'    => '4323323223',
            'identityId' => 'DSDFDFSFDSFSDFSDF'
        ];
        
        // Inserts data and returns inserted row's primary key
        //$party->insert($dataparty);
        
        
        echo view('sections/header',$data);
        echo view('home');
        echo view('sections/footer');
    }
}