<?php
    $pageTitle = "My Wards";
    require_once("assets/header.php");
    require_once("assets/db_connect.php");

    // Check if parent is logged in
    if(!isset($_SESSION['parent_id'])) {
        header("Location: parent_login.php");
    }

    // Get parent's wards
    $parent_id = $_SESSION['parent_id'];
    $query = "SELECT * FROM students WHERE guardian_id = $parent_id";
    $result = mysqli_query($conn, $query);

    // Check if any wards exist
    if(mysqli_num_rows($result) > 0) {
        echo "<table class='table table-striped'>";
        echo "<thead class='thead-dark'>";
        echo "<tr>";
        echo "<th>Student ID</th>";
        echo "<th>First Name</th>";
        echo "<th>Last Name</th>";
        echo "<th>Student Photo</th>";
        echo "<th>View Profile</th>";
        echo "<th>Edit Profile</th>";
        echo "<th>Delete Profile</th>";
        echo "</tr>";
        echo "</thead>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['student_id']."</td>";
            echo "<td>".$row['firstname']."</td>";
            echo "<td>".$row['surname']."</td>";
            echo "<td><img alt='". $row['firstname']."' src='". $row['student_dp']."' style='max-width: 50px; max-height: 50px;'/></td>";
            echo "<td><a href='ward_profile.php?sid=". $row['student_id'] ."'>View Profile</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<h3>No wards found for this parent</h3>";
    }