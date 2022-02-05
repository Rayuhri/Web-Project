<?php
session_start();
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body {
    font-family: "Lato", sans-serif
  }
  p {
    text-align: center;
    font-size: 25px;
  }
  .mySlides {
    display: none
  }

  html {
    background: url('Home Screen.png') no-repeat center fixed;
    background-size: cover;
  }
</style>

<body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-black w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="#home" class="w3-bar-item w3-button w3-padding-large">HOME</a>
      <a href="#scan" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SCAN ATTENDANCE</a>
      <a href="#activity" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MANAGE ACTIVITY</a>
      <a href="#profile" class="w3-bar-item w3-button w3-padding-large w3-hide-small">MANAGE PROFILE</a>
      <a href="#logout" class="w3-bar-item w3-button w3-padding-large w3-hide-small">LOGOUT</a>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
  </div>top: 0;
  right: 0;

  <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
  <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a href="#home" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">HOME</a>
    <a href="#scan" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SCAN ATTENDANCE</a>
    <a href="#activity" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MANAGE ACTIVITY</a>
    <a href="#profile" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MANAGE PROFILE</a>
    <a href="#logout" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">LOGOUT</a>
  </div>

  <!-- Page content -->
  <div class="w3-content" style="max-width:2000px;margin-top:46px" id='home'>

<!-- Automatic Slideshow Images -->
<div class="mySlides w3-display-container w3-center">
  <img src="assets/Home Screen.png" width="110%">
  <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    <h3><b>WELCOME BACK</b></h3>
  </div>
</div>
<div class="mySlides w3-display-container w3-center">
  <img src="assets/chinesenewyear.jpg" style="width:100%">
  <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    <h3><b>HAPPY CHINESE NEW YEAR</b></h3>
    
  </div>
</div>
<div class="mySlides w3-display-container w3-center">
  <img src="assets/follow sop.jpeg" style="width:110%">
  <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
    <h3><b>FOLLOW THE SOP's</b></h3>
    
  </div>
</div>

    <!-- The Band Section -->
    <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="">
      <h2 class="w3-wide">ABOUT US</h2>
      <p class="w3-opacity"><i>Together We Achieve More</i></p>
      <p class="w3-justify"></p>
      <div class="w3-row w3-padding-32">
        <div align='center'>
          <p>GOKUL NATH</p>
          <img src="assets/Home Screen.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
          <p align='center'>Director</p><br>
        </div>
        <div align='center'>
          <p>RAHYAN UDDIN</p>
          <img src="assets/Home Screen.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
          <p align='center'>Assistance Director</p>
        </div>
      </div>
    </div>
 
    <!-- The Tour Section -->
    <div class="w3-black" id="activity">
            <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
                <h2 class="w3-wide w3-center">TOUR DATES</h2>
                <p class="w3-opacity w3-center"><i>Remember to book your tickets!</i></p><br>

                <ul class="w3-ul w3-border w3-white w3-text-grey">
                    <li class="w3-padding">September <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
                    <li class="w3-padding">October <span class="w3-tag w3-red w3-margin-left">Sold out</span></li>
                    <li class="w3-padding">November <span class="w3-badge w3-right w3-margin-right">3</span></li>
                </ul>

                <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
                    <div class="w3-third w3-margin-bottom">
                        <img src="/w3images/newyork.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
                        <div class="w3-container w3-white">
                            <p><b>New York</b></p>
                            <p class="w3-opacity">Fri 27 Nov 2016</p>
                            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
                        </div>
                    </div>
                    <div class="w3-third w3-margin-bottom">
                        <img src="/w3images/paris.jpg" alt="Paris" style="width:100%" class="w3-hover-opacity">
                        <div class="w3-container w3-white">
                            <p><b>Paris</b></p>
                            <p class="w3-opacity">Sat 28 Nov 2016</p>
                            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
                        </div>
                    </div>
                    <div class="w3-third w3-margin-bottom">
                        <img src="/w3images/sanfran.jpg" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
                        <div class="w3-container w3-white">
                            <p><b>San Francisco</b></p>
                            <p class="w3-opacity">Sun 29 Nov 2016</p>
                            <p>Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                            <button class="w3-button w3-black w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'">Buy Tickets</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="w3-white" id="scan">
      <div align='center' class="w3-container w3-content w3-padding-64" style="max-width:800px"/ onblur='generateBarCode();'>
      <p><b>Please scan your attendance</b></p>
        <img id='barcode' src="https://api.qrserver.com/v1/create-qr-code/?data=ATTENDANCE RECORDED&amp;size=100x100" alt="" title="HELLO" width="200" height="200" />
      </div>
    </div>

    <!-- Ticket Modal -->
    

    <!-- The Contact Section -->
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="profile">
    <h1 align='center'>Welcome</h1>
      <h2 class="w3-wide w3-center">Your PROFILE</h2>
      
      <?php
      if(isset($_SESSION['username']))
      {
          $id = $_SESSION['username'];
          //We check if the user exists
          $sql = mysqli_query($con,'SELECT username,employee_id,usertype,email,contact_number FROM users WHERE username="'.$id.'"');
      
          if(mysqli_num_rows($sql)>0)
          {
      
          while($res = mysqli_fetch_array($sql)){
      
          // Save the data
          $username = $res['username'];
          $employeeid = $res['employee_id'];
          $usertype = $res['usertype'];
          $email = $res['email'];
          $contact_number = $res['contact_number'];

          }
          }           
      }
          //We display the user datas
      ?>

    <div id="insert-employee">
		<form  method="POST", align='center'>
			<fieldset>
				<span class="FieldInfo">Username :</span><input type="text" name="Name" value="<?php echo $username; ?>"><br>
				<span class="FieldInfo">EmployeeId :</span> <input type="text" name="EmployeeId" value="<?php echo $employeeid; ?>"disabled><br>
				<span class="FieldInfo">Email :</span> <input type="text" name="Email" value="<?php echo $email; ?>"><br>
				<span class="FieldInfo">Type :</span> <input type="text" name="usertype" value="<?php echo $usertype; ?>"disabled><br>
        <span class="FieldInfo">Contact Number :</span> <input type="text" name="contact_number" value="<?php echo $contact_number; ?>"><br>
				<br><br>
				<input type="submit" name="Submit" value="Update">
			</fieldset>
		</form>
	</div>
</body>
        


<?php

$con = mysqli_connect('localhost', 'root', '', 'loginsystem'); // Establishing connection with dataBase
if (isset($_POST['Submit'])) {
    $username = $_POST['Name'];
    $employeeid = $_POST['EmployeeId'];
    $email = $_POST['Email'];

    $contact_number = $_POST['contact_number'];

    
    $UpdateQuery = "UPDATE users SET username='$username', email='$email', contact_number='$contact_number' WHERE employee_id='$employeeid'";
    $sql = mysqli_query($con, $UpdateQuery);
    if ($sql) {
      $id = $_SESSION['username'];
      echo "<div class='form'>
      <h3>You Profile Updated Successfully</h3><br/>
      
      </div>";
    }
}
          
?>



    <!-- End Page Content -->
  
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="logout">
  <p><a href="logout.php">Logout</a></p>
  </div>
  <!-- Image of location/map -->
 

  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

  <script>
    // Automatic Slideshow - change image every 4 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {
        myIndex = 1
      }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 4000);
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }

    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('ticketModal');
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    function generateBarCode() 
{
    var nric = $('#text').val();
    var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=50x50';
    $('#barcode').attr('src', url);
}
  </script>

</body>

</html>