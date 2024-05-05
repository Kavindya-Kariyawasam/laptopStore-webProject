<?php
    //Defining the Server
    $server="localhost";
    //Defining the Username
    $username = "root";
    //Defining the Password
    $password = "";
    //Defining the Database
    $database = "lapstore";

    //Creating a Connection Object as $con
    $con = new mysqli($server,$username,$password,$database);

    if($con->connect_error===true){
        die("Connection Failed".$con->connect_error);
    }
?>