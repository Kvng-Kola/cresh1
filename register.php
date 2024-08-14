<?php
    $pageTitle = "Register";
    require_once("assets/header.php");

    // // RegEx
    // $name = "cat dog tag  cccc mug hug cow ccacc";
    // echo preg_match_all('/c{1,}/',$name,$list);
    // echo "<pre>";
    // var_dump($list);
    // echo "</pre>";

    // // $newName = preg_replace('/cat/', 'Dog', $name);

    // // echo $newName;

    // // echo preg_match("/cat{2}/", $name);

    $phoneError = $emailError = "";
    // echo $_SERVER['REQUEST_METHOD'];
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        // $phone = $_POST['phone'];
        $email = $_POST['email'];

        echo htmlspecialchars($name);

        // //Performing Phone number validation
        // if (preg_match('/^0[789][01]\d{8}$|^\+234[789][01]\d{8}$/', $phone)) {
        //     echo "Valid Phone Number";
        // } else {
        //     $phoneError = "Invalid Phone Number";
        // }

        // Performing Email validation
        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Valid Email Address: $email";
        } else {
            $emailError = "Invalid Email Address";
        }
    
    }
?>

<form action="" method="post" class="m-2 mx-5">
    <input type="text" class="form-control" placeholder="Enter your name:" name="name"/>
    <!-- <input type="tel" class="form-control" placeholder="Enter your phone number:" name="phone"/>
    <span class="text-danger"><?= $phoneError?></span><br/> -->
    <input type="text" class="form-control" placeholder="Enter your E-Mail Address:" name="email" />
    <span class="text-danger"><?= $emailError?></span><br/>
    <input type="submit" class=" mt-2 btn btn-primary"/>
</form>