<?php
    $pageTitle = "Home";
    include "assets/header.php";
?>
<?php
    $name = $email = $password = $cpassword = "";
    $nameError = $emailError = $passError = $cPassError = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        echo htmlspecialchars($name);
        echo $name;

        // if(empty($name)) {
        //     $nameError = "Name is required";
        // }
        // if(empty($email)) {
        //     $emailError = "Email is required";
        // }

        // if(empty($password)) {
        //     $passError = "Password is required";
        // }

        // if(empty($cpassword)) {
        //     $cPassError = "Confirm Password is required";
        // }

        // if ($password !== $cpassword) {
        //     $cPassError = "Passwords do not match";
        // }
    }
?>
<h1>Register Student</h1>
<form action="" method="post">
    <input type="text" name="name" placeholder="Enter Your name" value="<?= $name?>"><br>
    <span><?= $nameError ?></span><br/>
    <input type="email" name="email" placeholder="Enter Your Email" value="<?= $email?>"><br>
    <span><?= $emailError ?></span><br/>
    <input type="password" name="password" placeholder="Enter Your Password" value="<?= $password?>"><br>
    <span><?= $passError ?></span><br/>
    <input type="password" name="cpassword" placeholder="Confirm Password" value="<?= $cpassword ?>"><br>
    <span><?= $cPassError ?></span><br/>

    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    <input type="submit" value="Submit">
</form>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illum suscipit quibusdam laudantium, quia ut voluptates iste natus. Officia veritatis nostrum minus optio animi quidem a tenetur, aperiam accusantium mollitia.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illum suscipit quibusdam laudantium, quia ut voluptates iste natus. Officia veritatis nostrum minus optio animi quidem a tenetur, aperiam accusantium mollitia.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illum suscipit quibusdam laudantium, quia ut voluptates iste natus. Officia veritatis nostrum minus optio animi quidem a tenetur, aperiam accusantium mollitia.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illum suscipit quibusdam laudantium, quia ut voluptates iste natus. Officia veritatis nostrum minus optio animi quidem a tenetur, aperiam accusantium mollitia.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illum suscipit quibusdam laudantium, quia ut voluptates iste natus. Officia veritatis nostrum minus optio animi quidem a tenetur, aperiam accusantium mollitia.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illum suscipit quibusdam laudantium, quia ut voluptates iste natus. Officia veritatis nostrum minus optio animi quidem a tenetur, aperiam accusantium mollitia.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illum suscipit quibusdam laudantium, quia ut voluptates iste natus. Officia veritatis nostrum minus optio animi quidem a tenetur, aperiam accusantium mollitia.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illum suscipit quibusdam laudantium, quia ut voluptates iste natus. Officia veritatis nostrum minus optio animi quidem a tenetur, aperiam accusantium mollitia.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illum suscipit quibusdam laudantium, quia ut voluptates iste natus. Officia veritatis nostrum minus optio animi quidem a tenetur, aperiam accusantium mollitia.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illum suscipit quibusdam laudantium, quia ut voluptates iste natus. Officia veritatis nostrum minus optio animi quidem a tenetur, aperiam accusantium mollitia.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illum suscipit quibusdam laudantium, quia ut voluptates iste natus. Officia veritatis nostrum minus optio animi quidem a tenetur, aperiam accusantium mollitia.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla illum suscipit quibusdam laudantium, quia ut voluptates iste natus. Officia veritatis nostrum minus optio animi quidem a tenetur, aperiam accusantium mollitia.</p>
<?php
    require_once("assets/footer.php");
?>