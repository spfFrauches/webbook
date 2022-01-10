<?php

namespace app\Controllers;

class Router
{
    
    public function start($url)
    { 
        $controller = '\\app\\Controllers\\HomeController';
        $method  = 'index';
        $params = array(); 
        
        if (isset($url['page'])) :           
            
            $url = explode("/", $url['page']);  
            
        
        endif; 
        
        call_user_func_array (array (new $controller, $method), [$params]); 
    }
       
}

