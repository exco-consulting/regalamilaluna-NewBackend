<?php

namespace App\Controllers;

class Login extends BaseController
{	
	public function index()
	{   
		return view('sections/header')
		. view('login') // manages login, reset/change and logout
		. view('sections/footer');
	}
	
	public function auth()
	{   
		// set session and go to myaccount
		$json = $this->request->getJSON();
		
		$accModel = model('Accountmodel');
		$acc = $accModel->where('username', $json->email)->first();
		
		if($acc && $acc->psw == $json->psw)
		{
			$session = session(); 
			$newdata = [
				'email'     => $json->email,
				'logged_in' => true,
				'partyId' => $acc->partyId,
				'success' => true,
				'id' => $acc->partyId
			];
			$session->set($newdata);
			return $this->response->setJSON($newdata);
		} else 
		{
			$newdata = [
				'logged_in' => false,
				'success' => false,
				'message' => "Invalid email or password."
			];
			return $this->response->setJSON($newdata);	
		}
	}
	
	public function logout()
	{   
		// destroy session and go to logout/homepage
		$session = session();   
		$session->destroy();
		setcookie('ci_session', '', time() - 3600, '/');
		
		//return true;
		return redirect()->route('Home::index');
	}
	
	public function resetPsw($email)
	{   // send email with link to account change psw
		
	}
	
}