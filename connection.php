<?php

$host = "localhost";
$user = "root";
$psd = "";
// $dbname = "bhiga";
$dbname = "recipes";

$conn = new mysqli($host, $user, $psd, $dbname) ;

if($conn)
{
    echo ("Connection sucessful!");
}
else{
    echo("Something went wrong!");
}




?>