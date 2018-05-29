<?php

$db = new Mysqli;
$db->connect('localhost','root','','cine');

if(!$db){
    echo "success";
}

?>