<?php

    $privada = "Esto es privado";
	$valor = "contigo";
    $titulo = "Este es el título";
  
    view('home',  compact('valor', 'titulo') );
