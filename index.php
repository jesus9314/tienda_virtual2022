<?php
    /* Archivos Requeridos */
    require_once("Config/config.php");

    /* Url*/
    $url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
    $arrUrl = explode("/", $url);
    $controller = strtolower($arrUrl[0]); //Los nombres de los archivos siempre en miúsculas
    $method = $arrUrl[0];
    $params = "";
    /* Asignamos el valor del controlador */
    if(!empty($arrUrl[1]))
    {
        if($arrUrl[1] != "")
        {
            $method = $arrUrl[1];
        }
    }
    /* Asignamos los parámetros a elementos del arreglo */
    if(!empty($arrUrl[2]))
    {
        if($arrUrl[2] != "")
        {
            for ($i=2; $i < count($arrUrl); $i++) { 
                $params .= $arrUrl[$i].',';
            }
            $params = trim($params, ',');
        }
    }
    
    require_once("Libraries/Core/autoload.php"); //autoload
    require_once("Libraries/Core/load.php"); //load