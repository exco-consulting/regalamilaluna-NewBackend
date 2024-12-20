<?php

namespace App\Controllers;

class Party extends BaseController
{
	public function create()
	{
		$json = $this->request->getJSON();
		$partyModel = model('Partymodel');
		$partyId = $partyModel->insert($json);			
		
		if($partyId)
		{
			return $this->response->setJSON($partyId);
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
		return $this->response->setJSON($party);
	}
}