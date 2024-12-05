<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index(): string
    {
        echo 'Hello World';
        return view('blog_view');
    }
}
