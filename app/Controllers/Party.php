<?php

namespace App\Controllers;

require __DIR__."/../../vendor/autoload.php";
use Algolia\AlgoliaSearch\SearchClient;



class Party extends BaseController
{    

    private function registerConfirmation($data)
    {
	
		
    }
    
    public function checkDuplicationEmail($email)  /// to fix filters
    {
    	
    }
    
    public function register()
    {  
    	$data = $this->request->getPost();
        
        $partyModel = model('Party');
        $partyModel->insert($data);
        
        If ($partyModel->insertID == 0)
        {
            return $this->response->setJSON($partyModel->errors());
            
        } else {
            If ($_ENV['enable_Algolia']=="true")
            {
                require __DIR__."/../../vendor/autoload.php";
                // Connect and authenticate with your Algolia app
                $client = SearchClient::create($_ENV['ApplicationID'], $_ENV['AdminKeyID']);
                // Create a new index and add a record
                $index = $client->initIndex("Party_index");
                $object = $data;
                $object['objectID'] = $partyModel->insertID;
                $index->saveObject($object)->wait();
            }            
            return $this->response->setJSON($object);
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
	
    private function sendVerifyEmail($party)
    {		
		
    }
    

    public function getVerifyEmail($id)
    {		
    	
    }    
    
    
    public function myAccount()
    {
        return view('welcome_message');
    }
    
    
}