<?php

namespace App\Controllers;

require __DIR__."/../../vendor/autoload.php";
use Algolia\AlgoliaSearch\SearchClient;

use MailerSend\MailerSend;
use MailerSend\Helpers\Builder\Variable;
use MailerSend\Helpers\Builder\Recipient;
use MailerSend\Helpers\Builder\EmailParams;


class Party extends BaseController
{    

    public function registerConfirmation($id)
    {        
        $partyModel = model('Party');
        $myParty = $partyModel->find($id);
        
        if($myParty['status']=='active')
        {
            return $this->response->setJSON($myParty);
            
        } else {
                $myParty_light['id'] = $id;        
                $myParty_light['status'] = 'active';
    
                $partyModel->save($myParty_light);
        		    
                If ($_ENV['enable_Algolia']==true)
                {
                    require __DIR__."/../../vendor/autoload.php"; // TO FIX
                    // Connect and authenticate with your Algolia app
                    $client = SearchClient::create($_ENV['ApplicationID'], $_ENV['AdminKeyID']);
                    // Create a new index and add a record
                    $index = $client->initIndex("Party_index");
                    $myParty = $partyModel->find($id);
                    $object = $myParty;
                    $object['objectID'] = $id;
                    $index->saveObject($object)->wait();
                } 
                return $this->response->setJSON($object);
                }
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
            $this->sendVerifyEmail($partyEmail, $partyModel->insertID);            
            
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
	
    private function sendVerifyEmail($emailParty, $id)
    {		

        If ($_ENV['enable_Mailersender']==true)
        {
            $mailersend = new MailerSend();        
            $recipients = [
                new Recipient($emailParty, 'Your Client'),
            ];
            $variables = [
                new Variable($emailParty, ['var' => 'value'])
            ];
            $tags = ['tag'];
            $emailParams = (new EmailParams())
                ->setFrom('your@trial-3zxk54vn5r6ljy6v.mlsender.net')
                ->setFromName('Regalamilaluna.it')
                ->setRecipients($recipients)
                ->setSubject('Conferma email')
                ->setTemplateId('vywj2lpdjrpl7oqz')
                ->setVariables($variables)
                ->setTags($tags);
            
            $mailersend->email->send($emailParams);
            
        } else {
            $email = \Config\Services::email();
            $email->setTo($emailParty);
            $email->setSubject('Validate your email');
            $validateURL = 'party/registerConfirmation/'.$id;
            $email->setMessage(base_url($validateURL));
            $email->send();
        }
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