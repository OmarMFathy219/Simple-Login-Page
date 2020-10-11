<?php

$username = $_POST ["email"];
$password = $_POST ["password"];

$credentials = array("omarmfathy219@gmail.com:123456", "omarmfathy@students.mans.edu.eg:123456");

foreach ($credentials as $credential){
    $cred_user = explode(":", $credential)[0];
    $cred_pass = explode(":", $credential)[1];

    if ($username == $cred_user && $password == $cred_pass){
        header('Location: /success.html');
        exit();
    }
}
header('Location: /error.html');
?>