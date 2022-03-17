<?php
namespace App\Http\Controller;

use App\View\BasicTemplate;
class HeaderController extends BaseController
{

    public function get()
    {       
        echo BasicTemplate::view("header_template.phtml");
    }
}
