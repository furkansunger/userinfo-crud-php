<?php

    require "users.php";

    if (!isset($_GET["id"])) {
        header("Location:index.php");
        exit;
    }
    
    $userID = $_GET["id"];
    
    deleteUser($userID);

    header("Location:index.php");

?>