<?php
    class Views
    {
        function getView($controller, $view)
        {
            $controller = get_class($controller);
            $controller = strtolower($controller);
            if($controller == "home")
            {
                $view = VIEWS.$view.'.php';
            }
            else
            {
                $view = VIEWS.$controller.'/'.$view.'.php';
            }
            require_once($view);
        }
    }