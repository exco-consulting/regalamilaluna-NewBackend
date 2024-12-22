<?php

namespace App\Controllers;

class Party extends BaseController
{
	public function create()
	{
		$json = $this->request->getJSON();
		$partyModel = model('Partymodel');
		$partyId = $partyModel->insert($json);			
		
		//creates associated login account
		$accModel = model('Accountmodel');
		$accData = [
			'partyId' => $partyId,
			'username'    => $json->email,
			'psw' => $json->psw,
			'authType' => 'EMAIL',
		];
		$accId = $accModel->insert($accData);	
		
		if($partyId)
		{
			$email = new \SendGrid\Mail\Mail(); 
			$email->setFrom("customer@regalamilaluna.it", "Regalamilaluna.it");
			$email->addTo($json->email, $json->fullName);
			$email->setTemplateId("d-42147140a96043cd9c5363c3ae07faa3");
			$email->addDynamicTemplateDatas( [
			  'fullName'     => $json->fullName,
			  'validateURL' => base_url('party/confirm/').$partyId
			] );	
			
			$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
			try {
				$response = $sendgrid->send($email);
				//print $response->statusCode() . "\n";
				//print_r($response->headers());
				//print $response->body() . "\n";
			} catch (Exception $e) {
				echo 'Caught exception: '. $e->getMessage() ."\n";
			}
			
			// show Confirmation sent page
			$data['email'] = $json->email;
			$data['fullName'] = $json->fullName;
			return view('sections/header')
			. view('sections/menu')
			. view('partyconfirmation',$data)
			. view('sections/footer');
			//return $this->response->setJSON($partyId);
		}
		else
		{
			return $this->response->setJSON($partyModel->errors());
		}	
	}
	
	public function update($id)
	{
		$json = $this->request->getJSON();
		$partyModel = model('Partymodel');
		
		$partyModel->update($id, $json);			
		
		$party = $partyModel->find($id);			
		return $this->response->setJSON($party);
	}
	
	public function list()
	{
		$partyModel = model('Partymodel');
		$party = $partyModel->findAll();			
		return $this->response->setJSON($party);
	}
	
	public function retrieve($id)
	{
		$partyModel = model('Partymodel');
		$party = $partyModel->find($id);			
		return $this->response->setJSON($party);	
	}
	
	public function confirm($id)
	{
		$partyModel = model('Partymodel');			
		$data['status'] = 1;
		$partyModel->update($id, $data);
		$party = $partyModel->find($id);
		
		//set session and login
		$session = service('session');
		
		$newdata = [
			'party'  => $party,
			'partyId'     => $id,
			'logged_in' => true,
		];
	
		$session->set($newdata);
		
		//go to confirmation result page with link to go to myAccount - redirect
		return redirect()->route('Myaccount::index',[$id]);
	}
}