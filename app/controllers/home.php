<?php

class Home
{
    function index(){
        $this->view("home");
    }

    function view($view){
        if(file_exists("../app/view/".$view.".php")){
            include "../app/view/".$view.".php";
        }else{
            include "../app/view/404.php";
        }
    }
} 