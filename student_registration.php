<?php
    $pageTitle = "Student Registration";
    require_once("assets/header.php");
   
    // Initializing Variables
    $passError = $phone1Error = $phone2Error = ""; # Error Variables
    $firstname = $middlename = $surname = $gender = $dob = $password = $cpassword = $student_address = $class = $department = ""; // Student Variables
    $g_firstname = $g_middlename = $g_surname = $g_gender = $g_email = $g_phone1 = $g_phone2 = $g_maritalstatus = $guardian_address = ""; // Guardian Variables

    // Form Validation
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Capturing student bio-data
        $firstname = $_POST["firstname"];
        $middlename = $_POST["middlename"];
        $surname = $_POST["surname"];
        $gender = $_POST["gender"];
        $dob = $_POST["dob"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $student_address = $_POST['student_address'];
        $class = $_POST['class'];
        $department = $_POST['department'];

        // Capturing guardian bio-data
        $g_firstname = $_POST["g_firstname"];
        $g_middlename = $_POST["g_middlename"];
        $g_surname = $_POST["g_surname"];
        $g_gender = $_POST["g_gender"];
        $g_email = $_POST["g_email"];
        $g_phone1 = $_POST["g_phone1"];
        $g_phone2 = $_POST["g_phone2"];
        $g_maritalstatus = $_POST["g_maritalstatus"];
        $guardian_address = $_POST['guardian_address'];

        // Password Validation
        if($password == $cpassword) {
            if(preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[!@%$&?-_])[A-Za-z\d!@%$&?-_]{8,}/", $password)) {
                $pass = password_hash($password, PASSWORD_DEFAULT);
            } else {
                $passError = "Password must contain at least 8 characters, including uppercase, lowercase, number, and special character";
            }
        } else {
            $passError = "Password do not match";
        }

        // Phone Number Validation
        if (!preg_match('/^0[789][01]\d{8}$|^\+234[789][01]\d{8}$/', $g_phone1)) {
            $phone1Error = "Invalid Phone Number";
        }

        if (!empty($g_phone2)) {
            if (!preg_match('/^0[789][01]\d{8}$|^\+234[789][01]\d{8}$/', $g_phone2)) {
                $phone2Error = "Invalid Phone Number";
            }
        } 

        // Capturing Guardian Address
        if(empty($guardian_address)) {
            $guardian_address = $student_address;
        }


        // Population the database
        if($passError == "" && $phone1Error == "" && $phone2Error =="") {
            echo "$firstname, $middlename, $surname, $gender, $dob, $pass, $cpassword, $class, $department, $student_address";
        } else {
            echo "Errors: $passError, $phone1Error, $phone2Error";
        }
        
    }

?>

<main class="m-5 p-5" style="background: gray;">
    <form autocomplete="off" method="post" action="" style="display: flex; gap: 20px; flex-flow: column">
        <h1>Student Bio Data</h1>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="First name" name="firstname" value="<?= $firstname?>" required/>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Middlename (Optional)" name="middlename" value="<?= $middlename?>"/>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Surname" name="surname" value="<?= $surname?>" required/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                Gender:
                <input type="radio" name="gender" value="Male"/> Male
                <input type="radio" name="gender" value="Female" checked/> Female
                <input type="radio" name="gender" value="Others"/> Others
            </div>
            <div class="col">
                <div class="d-flex">
                    Date Of Birth:
                    <input type="date" class="form-control" name="dob" value="<?= $dob ?>" required/>
                </div>
            </div>

        </div>
        
        <div class="row">
            <div class="col">
                <input type="password" class="form-control" placeholder="Password" name="password" value="<?= $password?>" required/>
                <span class="text-danger"><?= $passError?></span>
            </div>
            <div class="col">
                <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" value="<?= $cpassword ?>" required />
                <span class="text-danger"><?= $passError?></span>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <textarea placeholder="Home Address" name="student_address" class="form-control" required><?= $student_address?></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col">
                Class:
                <select class="form-select" name="class" value="<?= $class?>" required>
                    <option value="Cresh">Cresh</option>
                    <option value="KG1">KG1</option>
                    <option value="KG2">KG2</option>
                    <option value="Nur1">Nur1</option>
                    <option value="Nur2">Nur2</option>
                    <option value="Pry1">Pry1</option>
                    <option value="Pry2">Pry2</option>
                    <option value="Pry3">Pry3</option>
                    <option value="Pry4">Pry4</option>
                    <option value="Pry5">Pry5</option>
                    <option value="Pry6">Pry6</option>
                    <option value="JSS1">JSS1</option>
                    <option value="JSS2">JSS2</option>
                    <option value="JSS3">JSS3</option>
                    <option value="SSS1">SSS1</option>
                    <option value="SSS2">SSS2</option>
                    <option value="SSS3">SSS3</option>
                </select>
            </div>
            <div class="col">
                Department:
                <select class="form-select" name="department" value="<?= $department?>" required>
                    <option value="null">No Selection</option>
                    <option value="Art">Art</option>
                    <option value="Science">Science</option>
                    <option value="Commercial">Commercial</option>
                    
                </select>
            </div>
        </div>

        <h1>Guardian Biodata</h1>

        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="First name" name="g_firstname" value="<?= $g_firstname?>" required/>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Middlename (Optional)" name="g_middlename" value="<?= $g_middlename?>"/>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Surname" name="g_surname" value="<?= $g_surname?>" required/>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <input type="tel" class="form-control" placeholder="Phone Number" name="g_phone1" value="<?= $g_phone1?>" required/>
                <span class="text-danger"><?= $phone1Error ?></span>
            </div>
            <div class="col">
                <input type="tel" class="form-control" placeholder="Alt Phone Number (Optional)" name="g_phone2" value="<?= $g_phone2?>"/>
                <span class="text-danger"><?= $phone2Error ?></span>
            </div>
            <div class="col">
                <input type="email" class="form-control" placeholder="E-Mail Address" name="g_email" value="<?= $g_email?>" required/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                Gender:
                <input type="radio" name="g_gender" value="Male"/> Male
                <input type="radio" name="g_gender" value="Female" checked/> Female
                <input type="radio" name="g_gender" value="Others"/> Others
            </div>
            <div class="col">
                <div class="d-flex">
                    Marital Status:
                    <select name="g_maritalstatus" required class="form-control" value="<?=$g_maritalstatus?>">
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Seperated">Seperated</option>
                        <option value="Widowed">Widowed</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <textarea placeholder="Home Address" name="guardian_address" class="form-control"><?= $guardian_address?></textarea>
            </div>
        </div>

        <div class="row ">
            <div class="col">
                <input type="submit" value="Register Student" class="form-control btn btn-primary"/>
            </div>
        </div>
    </form>
</main>