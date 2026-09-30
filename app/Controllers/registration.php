<?php
namespace App\Controllers;
class registration extends Basecontroller 
{
    public function index()
    {
        helper('url');
        return view('registration');
    }
}