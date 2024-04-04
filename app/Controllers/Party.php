<?php

namespace App\Controllers;

require __DIR__."/../../vendor/autoload.php";
use Algolia\AlgoliaSearch\SearchClient;



class Party extends BaseController
{    

    public function registerConfirmation($id)
    {        
        $partyModel = model('Party');
        
        $myParty['id'] = $id;        
        $myParty['status'] = 'active';
        
        $partyModel->save($myParty);
        		
        If ($_ENV['enable_Algolia']=="true")
        {
            require __DIR__."/../../vendor/autoload.php";
            // Connect and authenticate with your Algolia app
            $client = SearchClient::create($_ENV['ApplicationID'], $_ENV['AdminKeyID']);
            // Create a new index and add a record
            $index = $client->initIndex("Party_index");
            $myParty = $partyModel->find($id);
            $object = $myParty;
            $object['objectID'] = $id;
            $index->saveObject($object)->wait();
        } 
        return $this->response->setJSON($myParty);
    }
    
    public function register()
    {  
    	$data = $this->request->getPost();
        
        $partyModel = model('Party');
        $partyModel->save($data);
        
        If ($partyModel->insertID == 0)
        {
            return $this->response->setJSON($partyModel->errors());
        } else {
            $data['ObjectId'] = $partyModel->insertID;
            $partyEmail = $data['email'];
            $this->sendVerifyEmail($partyEmail);            
            
            return $this->response->setJSON($data);
        }
    }
    
	public function listParty()
	{          
        $partyModel = model('Party');
        $parties = $partyModel->findAll();
		return $this->response->setJSON($parties);
	}
	
    public function getParty($id)
    {  
        $partyModel = model('Party');
        $parties = $partyModel->find($id);
        return $this->response->setJSON($parties);
    }
	
    private function sendVerifyEmail($emailParty)
    {		
		$email = \Config\Services::email();
        $email->setTo($emailParty);
        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');
        
        $email->send();
    }
    

    public function updateParty($data)
    {		
    	$partyModel = model('Party');
        $partyModel->save($data);
    }    
    
    
    public function myAccount()
    {
        return view('welcome_message');
    }
    
    
}