<?php

$vnome = "";
$vsobrenome = "";
$vemail = "";


if (isset( $_POST["nome"])){
    $vnome= $_POST["nome"];
    }

if (isset($_POST["sobrenome"])){
        $vsobrenome = $_POST["sobrenome"];
    } 

if (isset($_POST["email"])){
    $vemail = $_POST["email"];
}    

echo "Nome: ".$vnome."<br/>Sobrenome: ".$vsobrenome."<br/>E-mail: ".$vemail."<br/>";

?>