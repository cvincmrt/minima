<?php

class Home extends Controller
{
    function index(){

        $pictures = new Database();
        $data = $pictures->read("SELECT * FROM images WHERE id = :id",["id"=>2]);
        
        show($data);

        $image_class = $this->loadModel("image_class");

        //show($image_class);

        $this->view("home");
    }
} 