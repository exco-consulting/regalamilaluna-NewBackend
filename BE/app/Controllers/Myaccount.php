<?php

namespace App\Controllers;

class Myaccount extends BaseController
{
    public function index($id = null)
    {   
        $session = session();     
        
        if (!$id && $session->get('partyId')) {
          $id = $session->get('partyId'); 
        } elseif (!$id && !$session->get('partyId')) 
        {
            // go to login page
            return redirect()->route('Login::index');
        }
        
        $partyModel = model('Partymodel');
        $party = $partyModel->find($id);
        
        If($session->get('logged_in') && $party)
        {
            $accModel = model('Accountmodel');
            $acc = $accModel->where('partyId', $id)->findAll();
            
            $data['party'] = $party;
            $data['acc'] = $acc;
            
            return view('sections/header',$data)
            . view('sections/menu',$data)
            . view('myaccount',$data)
            . view('sections/footer',$data);
        } else 
        {
            // go to login page
            return redirect()->route('Login::index');       
        }
    }
    
    
    public function manageParty()
    {   
        
    }
    
    public function addEvent()
    {   
        
    }
    
    public function addGiftList()
    {   

    }
    
    public function addGiftListItem()
    {   
    
    }
}
