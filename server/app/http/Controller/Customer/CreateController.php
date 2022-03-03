<?php

namespace App\Http\Controller\Customer;

class CreateController extends \server\pp\Http\Controller\BaseController
{

    public function get()
    {
        return \App\View\BasicTemplate::view('customer/form.phtml', ['nome' => 'Wolgrand']);
    }
}