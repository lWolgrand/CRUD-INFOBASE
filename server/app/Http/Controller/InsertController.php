<?php
namespace App\Http\Controller;

use App\Storage\ContactStorage;
use App\View\BasicTemplate;
use App\Model\ContactModel;

class InsertController extends BaseController
{

    public function get()
    {
        $vars = array('title'=>'Cadastrar');
        echo BasicTemplate::view("formulario.phtml", $vars);
    }

    public function post()
    {     
        $contactStorage = new ContactStorage();        
        $dados = new ContactModel($this->getInput('name'),$this->getInput('email'), $this->getInput('telefone'));
        $contactStorage->save($dados);
        return IndexController::get($contactStorage);

    }
}
