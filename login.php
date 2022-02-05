
<?php
include('db.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
</head>

<body>
    <?php
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $employeeid    = stripslashes($_REQUEST['employee_id']);
        $employeeid   = mysqli_real_escape_string($con, $employeeid);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $usertype = stripslashes($_REQUEST['usertype']);    // removes backslashes
        $usertype = mysqli_real_escape_string($con, $usertype);

        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username' AND employee_id='$employeeid' AND usertype='$usertype'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysqli_connect_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            //while ($row = mysqli_fetch_array($result)){
            //echo '<script type= "text/javascript">alert("Login successful")</script>';
            // }
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            if ($usertype == "Employer") {
    ?>
                <script type="text/javascript">
                    window.location.href = "Employerhomepage.php"
                </script>
            <?php
            } else {
            ?>
                <script type="text/javascript">
                    window.location.href = "Employeehomepage.php"
                </script>
        <?php
            }
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/ID/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
        ?>
        <form class="form" method="post" name="login">
            <img src="assets/bushwell.jpg" alt="Company logo" class="center" width="100" height="100">
            <h1 class="login-title">BUSHWELL CORPORATION</h1>
            <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" required />
            <input type="text" class="login-input" name="employee_id" placeholder="Employee ID" required />
            <input type="password" class="login-input" name="password" placeholder="Password" required />
            <select name="usertype">
                <option value="Employer">Employer</option>
                <option value="Employee">Employee</option>
            </select>
            <input type="submit" value="Login" name="submit" class="login-button" />
            <p class="link"><a href="send_link.php">Forgot Password?</a></p>
            <p class="link">Don't have an account? <a href="registration.php">Register Now</a></p>
        </form>
    <?php
    }
    ?>
</body>

</html>