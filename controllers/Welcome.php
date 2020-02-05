<?php
use Cuveen\Controller\Controller;

class Welcome extends Controller
{
    public function main()
    {
        return view('welcome');
    }
}