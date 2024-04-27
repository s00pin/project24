<?php

namespace App\Controllers;

class Movies extends BaseController
{
    public function index(): string
    {
        return view('movies.php');
    }
}
