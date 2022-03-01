<?php

namespace App\Http\Controller\Customer;

class CreateController extends \App\Http\Controller\BaseController
{

    public function get()
    {
        return \App\View\BasicTemplate::view('customer/form.phtml', ['nome' => 'Wolgrand']);
    }
}