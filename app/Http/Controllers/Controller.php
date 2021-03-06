<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        return view('index')->with('page','main');
    }

    public function ourContacts()
    {
        return view('index')->with('page','contacts');
    }

    public function aboutUs()
    {
        return view('index')->with('page','about_us');
    }


}
