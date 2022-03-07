<?php
namespace App\Http\Controller;

use App\Storage\ContactStorage;
class IndexController extends BaseController
{

    public function get()
    {
        $storage = new ContactStorage();
        var_dump($storage->getall());
    }
}
