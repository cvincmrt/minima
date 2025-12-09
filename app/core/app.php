<?php

class App
{
    public function __construct()
    {
        $url = $this->splitUrl();
        show($url);
    }

    private function splitUrl(){
        return explode("/", trim($_GET["url"], "/"));
    }


}