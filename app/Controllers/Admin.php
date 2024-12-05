<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        // return view('welcome_message');
        helper('form');
        return view('dashboard/index', [
            'data' => "Hello World"
        ]);
    }
}
