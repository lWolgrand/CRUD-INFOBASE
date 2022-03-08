<?php
namespace App\Http\Controller;

use App\Storage\ContactStorage; 
use App\View\BasicTemplate;
use App\Model\ContactModel;

class EditController extends BaseController
{

    public function get()
    {
        $contactStorage = new ContactStorage();
        $id = $this->getParam('id');
        $contact = $contactStorage->getByID($id);             
        $vars = array('title'=>'Edit','name'=> $contact['name'],'email'=> $contact['email'], 'telefone'=>$contact['telefone']);    
        echo BasicTemplate::view("editForm.phtml", $vars);
    }

    public function post(){
 
        $contactStorage = new ContactStorage();        
        $dados = new ContactModel($this->getInput('name'),$this->getInput('email'), $this->getInput('telefone'));
        $dados->contact_id = $this->getParam('id');
        $contactStorage->update($dados);
        $this->redirect('/');



    }
}