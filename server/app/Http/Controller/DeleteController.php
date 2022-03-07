<?php
namespace App\Http\Controller;

use App\Storage\ContactStorage; 
use App\View\BasicTemplate;
class DeleteController extends BaseController
{

    public function getParam($id)
    {
        $contactStorage = new ContactStorage();
        $vars = array('title'=>'Pagina inicial', 'contacts'=> $contactStorage->getAll());
        $this->redirect(BasicTemplate::view("index.phtml", $vars));
    }
}
