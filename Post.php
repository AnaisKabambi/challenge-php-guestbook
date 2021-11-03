<?php

class Post
{
public $fname ;
public $lname ;
public $message;


};
require 'Data.txt';


if(isset($_POST['submit'])) {
    function SaveData() {
        $data = $_POST['fname'] . $_POST['lname'] . $_POST['message'];
        file_put_contents('Data.txt', $data);
    }
    SaveData();
}

/*
if(isset($_POST['submit'])){
    file_put_contents('Data.txt', $_POST['fname']);
}
if(isset($_POST['submit'])) {
    file_put_contents('Data.txt', $_POST['lname']);
}
if(isset($_POST['submit'])) {
    file_put_contents('Data.txt', $_POST['message']);
}*/

