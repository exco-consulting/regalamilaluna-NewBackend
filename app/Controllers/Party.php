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
    	require __DIR__."/../../vendor/autoload.php";
        // Connect and authenticate with your Algolia app
        $client = SearchClient::create("GU8G9PZAQ2", "64593d95271a33faf58a47788c4a5574");
        
        
        
        // Create a new index and add a record
        $index = $client->initIndex("Party_index");
        $record = ["objectID" => 2, "name" => "test_party2"];
        $index->saveObject($record)->wait();
        
        // Search the index and print the results
        //$results = $index->search("test_record");
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