<?php

class Post
{
public $fname ;
public $lname ;
public $message;


}


if(isset($_POST['submit'])){
    file_put_contents('Data.txt', file_get_contents('index.php'));;
}

if(isset($_POST['submit'])){
    echo $_POST['lname'];
}
if(isset($_POST['submit'])){
    echo $_POST['message'];
}