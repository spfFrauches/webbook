<?php

namespace app\Controllers;

class HomeController
{
    
    public function index()
    {
        require './app/Views/pageHeader.php';        
        require './app/Views/Pages/Home.php';
        require './app/Views/pageFooter.php';
    }
    
}
