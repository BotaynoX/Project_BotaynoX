<?php
session_start();
include("connection.php");
function isUserConnected() {
    //true or false
    return isset($_SESSION['id']);
}
function connectUser($email, $password){
    require_once "Client.php";
    $controler = new Controller();

    $client = $controler->getClientByEmail($email);


    if ($client !== null) {
        $hash = $client->getPassword();
        if ($hash == $password){
            //session -> Client
            $_SESSION['id'] = $client->getId();
            $_SESSION['name'] = $client->getName();
            $_SESSION['email'] = $client->getEmail();
            header('Location: index.php');
        } else {
            echo "<script>alert('Invalid information')</script>";
        }
    } else {
        echo "<script>alert('Email not found')</script>";
    }

}