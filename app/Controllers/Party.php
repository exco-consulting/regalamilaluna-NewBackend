<?php

namespace App\Controllers;

class Party extends BaseController
{
    public function home()
    {
        return view('welcome_message');
    }
    
    private function registerConfirmation($data)
    {
	
		$dataSeo = [
		    'title'   => 'Verifica la tua email - Regalamilaluna.it',
		    'description' => 'My meta',
		    'keywords' => 'Lista nozze online',
		    'session' => $this->session,
		    'payload' => $data
		];
        
        echo view('sections/header',$dataSeo);
        echo view('partyVerification');
        echo view('sections/footer');

    }
    
    public function checkDuplicationEmail($email)  /// to fix filters
    {
    	if (!empty($email)) {
	    	try {
				$parArr = ['email' => $email ];
				$par = json_encode($parArr); 

				$response = $this->backend->get('content/items/party', ['query' => ['filter' => $par]] );
				$party = json_decode($response->getBody());

				if (empty($party) ) { 
					return true;
				} else {
				    return false;
				}		
			} catch (\Exception $e) {
			    return true;
			    die($e->getMessage());
			}	
    	}
    }
    
    public function postRegister()
    {  
    	$data=$this->request->getPostGet();
    	
    	if (!empty($data)) {
    		if (
    			$this->checkDuplicationEmail($data['email'])
    		) {
	    		$body = json_encode(["data" => $data ]);

	    		try {
					$response = $this->backend->setBody($body)->request('post', 'content/item/party');
					$party = json_decode($response->getBody());

					$this->sendVerifyEmail($party);
					// redirect to confirmation for verification page
					$this->registerConfirmation($data);
				} catch (\Exception $e) {
			    	die($e->getMessage());
				}
    		} else {
    			return false;
    		}
    	} else {
    		return false;
    	}    	
    }
    
    private function sendVerifyEmail($party)
    {		
		$this->email->setTo($party->email);
		$this->email->setFrom('utenti@regalamilaluna.it', 'Regalamilaluna.it');
		$this->email->setSubject('Conferma Registrazione - Regalamilaluna.it');
				
		$emailbody = '<a href="'.base_url('party/verifyEmail').'/'.$party->_id.'">Clicca qui per validare la tua email</a>';
						
		$this->email->setMessage($emailbody);
		try {
			$this->email->send();
			dd($this->email);

		} catch (\Exception $e) {
			die($e->getMessage());	
		}
    }
    

    public function getVerifyEmail($id)
    {		
    	//$data=$this->request->getPostGet();
	    // TODO add here all verificaion check
	   	//$this->checkDuplicationEmail
	   	
	   	$data['_id'] = $id; 
	    $data['emailVerified'] = true; 
		if (!empty($data)) {
    		$body = json_encode(["data" => $data ]);
	    	try {
				$response = $this->backend->setBody($body)->request('post', 'content/item/party');
				$party = json_decode($response->getBody());
				// redireto to login page
				
			} catch (\Exception $e) {
				die($e->getMessage());	
			}
    	}
    }    
    
    
    public function myAccount()
    {
        return view('welcome_message');
    }
    
    
}