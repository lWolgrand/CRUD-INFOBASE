<?php
namespace App\Http\Controller;

use App\Storage\ContactStorage; 
use App\View\BasicTemplate;
use App\Model\ContactModel;
class InsertController extends BaseController
{

    public function get()
    {
        $contactStorage = new ContactStorage();
        $vars = array('title'=>'Pagina inicial', 'contacts'=> $contactStorage->getAll());
        echo BasicTemplate::view("index.phtml", $vars);
    }
    public function post(){

    }
}
