<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Registration</title>
    <link rel="stylesheet" href="style.css" />

    <style>
        img {
            display: block;
            margin-left: auto;
            margin-right: 10px;
        }
    </style>
</head>

<script>
    function check_pass() {
        if (document.getElementById('password').value == //if equal
            document.getElementById('confirm_password').value) {
            document.getElementById('submit').disabled = false;
            document.getElementById("message2").innerHTML = "";


        } else {
            document.getElementById('submit').disabled = true;
            document.getElementById("message2").innerHTML = "**Passwords are not same";
        }


    }

</script>

<body>
    <?php
    require('db.php');
    // When form submitted, insert values into the database.


    if (isset($_REQUEST['username'])) {

        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $employeeid    = stripslashes($_REQUEST['employee_id']);
        $employeeid   = mysqli_real_escape_string($con, $employeeid);
        $usertype    = stripslashes($_REQUEST['usertype']);
        $usertype    = mysqli_real_escape_string($con, $usertype);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $contact_number = stripslashes($_REQUEST['contact_number']);
        $contact_number = mysqli_real_escape_string($con, $contact_number);
        $create_datetime = date("Y-m-d h:i:s");

        $check_employeeid="SELECT * FROM users WHERE employee_id ='$employeeid'";
        $IDResult = mysqli_query($con, $check_employeeid);
        $count = mysqli_num_rows($IDResult);
        
        if ($count>0){
           
            echo '<script type ="text/JavaScript">';  
            echo 'alert("User already exists!")';  
            echo '</script>';  
            echo '<script>window.location.href = "http://localhost/Project%20Web/registration.php";</script>';
              
        }
        
        $check_email="SELECT * FROM users WHERE email ='$email'";
        $emailResult = mysqli_query($con, $check_email);
        $count = mysqli_num_rows($emailResult);
        
        if ($count>0){
           
            echo '<script type ="text/JavaScript">';  
            echo 'alert("User already exists!")';  
            echo '</script>';  
            echo '<script>window.location.href = "http://localhost/Project%20Web/registration.php";</script>';
              exit();
        }

            $query    = "INSERT into `users` (username, password, email, employee_id,usertype,contact_number)
            VALUES ('$username', '" . md5($password) . "', '$email', '$employeeid','$usertype','$contact_number')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
    ?>
        <form class="form" action="" method="post">
        <img src="assets/bushwell.png" alt="Company logo" class="center" width="250" height="200">
            <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" required />
            <input type="text" class="login-input" name="employee_id" placeholder="Employee ID" required />
            <span id="message1" style="color:red"> </span>
            <input type="text" class="login-input" name="email" placeholder="Email Address" required />
            <input type="password" class="login-input" name="password" id="password" placeholder="Password" value="" onchange='check_pass();' required />
            <input type="password" class="login-input" name="re-enter password" placeholder="Re-Enter Password" value="" id="confirm_password" onchange='check_pass();'>
            <span id="message2" style="color:red"> </span>
            <input type="tel" class="login-input" name="contact_number" placeholder="Contact Number" required />
            <select name="usertype">
            <option value="Employer">Employer</option>
            <option value="Employee">Employee</option>
            </select>
            <input type="submit" name="submit" value="Register" class="login-button" id="submit">
            <p class="link">Already have an account? <a href="login.php">Login here</a></p>
        </form>
    <?php
    }
    ?>
</body>

</html>