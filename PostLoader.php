<?php

class PostLoader
{

}
require 'Data.txt';
include 'Post.php';

$prevMessages = json_decode($data, true);
foreach($prevMessages as $a){
    foreach($a as $key => $value) {
        echo $key . " : " . $value . "<br />";
    };