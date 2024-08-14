<?php
    $pageTitle = "Student Registration";
    require_once("assets/header.php");
?>

<main class="m-5 p-5 bg-secondary">
    <form>
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="First name" name="firstname" required/>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Middlename (Optional)" name="middlename"/>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Surname" name="surname" required/>
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
                    <input type="date" class="form-control" name="dob" required/>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
        
        <div class="row">
            <div class="col">
                <input type="password" class="form-control" placeholder="Password" name="password" required/>
            </div>
            <div class="col">
                <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword" required/>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <textarea placeholder="Home Address" name="student_address" class="form-control"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col">
                Class:
                <select class="form-select" name="class" required>
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
                <input type="text" class="form-control" placeholder="Middlename (Optional)" name="middlename"/>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Surname" name="surname" required/>
            </div>
        </div>
    </form>
</main>