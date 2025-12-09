<?php

class App
{
    private $controller = "home";
    
    private $method = "index";

    private $params = []; 

    public function __construct()
    {
        $url = $this->splitUrl();
        //show($url[0]);

        if(file_exists("../app/controllers/".$url[0].".php")){
            $this->controller = strtolower($url[0]);
            unset($url[0]);
            show($url);
        }

        require "../app/controllers/".$this->controller.".php";

        $this->controller = new $this->controller;

        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1]; 
                unset($url[1]);
            }

        }

        //spust class a methodu
         show(array_values($url));

    }

    private function splitUrl(){
        return explode("/", filter_var(trim($_GET["url"], "/")), FILTER_SANITIZE_URL);
    }


}