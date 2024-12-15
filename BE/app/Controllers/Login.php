<?php

namespace App\Controllers;

class Login extends BaseController
{	
	public function index(): string
	{   
		return view('sections/header')
		. view('sections/login')
		. view('sections/footer');
	}
}