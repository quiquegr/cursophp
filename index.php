<?php
 /*
  *  El front-end controller se encarga de 
  * configurar nuestra aplicación
  */
    require "config.php";
    require "helpers.php";
    
  //Llama a los controladores individuales
  controller($_GET['url']);