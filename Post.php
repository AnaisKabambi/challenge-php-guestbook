<?php

class Post
{

};
require 'Data.txt';


if(isset($_POST['submit'])) {
    function SaveData() {
        //$data = $_POST['fname'] . " " .$_POST['lname'] . " " .$_POST['message'] . "\n";
        $data = array("FirstName" => $_POST['fname'], "LastName" => $_POST['lname'], "Message" => $_POST['message']);
        file_put_contents('Data.txt', print_r($data, true),FILE_APPEND);
    }
    SaveData();
}



//serialize is a mystery to me
/*$fname = serialize($_POST['fname']);
$lname = serialize($_POST['lname']);
$message = serialize($_POST['message']);
$data = $fname ." " . $lname ." ". $message . "\n";*/

//way too long
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

