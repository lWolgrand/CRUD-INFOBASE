<?php
namespace App\Http\Controller;

use App\Storage\ContactStorage; 
use App\View\BasicTemplate;
class DeleteController extends BaseController
{

    public function get()
    {
        $contactStorage = new ContactStorage();    
        $id = $this->getParam('id');
        $contactStorage->delete($id);   
        $this->redirect('/');
    }
}
