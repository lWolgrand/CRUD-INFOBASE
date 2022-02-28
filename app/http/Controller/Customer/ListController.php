<?php

namespace App\Http\Controller\Customer;

class ListController extends \App\Http\Controller\BaseController
{
    public function get()
    {
        return \App\View\BasicTemplate::view('customer/list.phtml', ['nome' => 'Wolgrand']);
    }
}

