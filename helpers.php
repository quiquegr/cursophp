<?php

function view($template, $vars = array())
{
    extract($vars);
    
    require "views/$template.tpl.php";
}
  
function controller($name)
{
    if (empty($name))
    {
        $name = 'home';
    }
    //exit($name);
    $filename = "controllers/$name.php";
    
    if (file_exists($filename))
    {
        require $filename;
    }
    else
    {      
       header("HTTP/1.0 404 Not Found");
       exit("Pagina no encontrada: $filename");            
     }
}
