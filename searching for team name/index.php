<?php
	
	session_start();
	if(isset($_SESSION['user'])){  
	
	   header("location:student_dashboard.php"); 
	   exit();
	}
?>


<link rel="stylesheet" type="text/css" href="static/css/login.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

<form action="./core/verifylogin.php" method="post">
  <div class="imgcontainer">
    <img src="index.png" alt="Avatar" class="avatar" height="200" width="100">
  </div>

  <div class="container">
    <br>
    <label for="enroll"><b>Enrollment Number</b></label>
    <input type="text" placeholder="Enter Enrollment Number" name="enroll" required>
     <br>
    <label for="Email"><b>Email</b></label>
    <input type="email" placeholder="Enter Username" name="Email" required>
     <br>
     <label for="Email"><b>HOSTEL</b></label>
     <select id="hostel" name="HOSTEL" required>
        <option value="">Select your HOSTEL</option>
        <option value = "BH1">BH1</option>
        <option value = "BH2">BH2</option>
        <option value = "BH3">BH3</option>
        <option value = "BH4">BH4</option>
        <option value = "BH5">BH5</option>
        <option value = "GH1">GH1</option>
        <option value = "GH2">GH2</option>
        <option value = "GH3">GH3</option>
    </select>
     <br>
    <label for="Password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>
      <br>  
   <input type="submit" name="submit" value="submit" class="sub">
    <label>
      <h3>Not Registered ?? Click <a href="usersignup.php">Here</a></h3>
    </label>
  </div>
  
  <div class="container student-forgot" style="background-color:#f1f1f1">
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>

