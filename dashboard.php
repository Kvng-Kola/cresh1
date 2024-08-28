<?php
    $pageTitle = "Parent Login";
    require_once("assets/header.php");
    require_once("assets/db_connect.php");

    echo "<h1>welcome, " . $_SESSION['firstname'] . "</h1>";
    // echo "<h1>welcome, $_SESSION['firstname']</h1>";