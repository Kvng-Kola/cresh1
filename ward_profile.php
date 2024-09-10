<?php
    $pageTitle = "My Wards";
    require_once("assets/header.php");
    require_once("assets/db_connect.php");

    // Check if parent is logged in
    if(!isset($_SESSION['parent_id'])) {
        header("Location: parent_login.php");
    }
    
    $student_id = $_GET['sid'];
    $query = "SELECT * FROM students WHERE  student_id = $student_id lIMIT 1";
    $result = mysqli_query($conn, $query);
    $student_data = mysqli_fetch_assoc($result);
    echo $student_data['firstname'];