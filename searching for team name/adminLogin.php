<?php session_start();

if(isset($_SESSION['loggedin'])){
  
     header("location: ./admin_dashboard.php");

}

?>


<link rel="stylesheet" type="text/css" href="static/css/login.css">
<body>

<form action="core/admin-login-verify.php" method="post">
  <h1 class="admin-heading">Welcome back Admin</h1>

  <div class="imgcontainer">
    <img src="index.png" alt="Avatar" class="avatar" height="200" width="100">
  </div>

  <div class="container">

    <label for="Email"><b>Username</b></label>
    <input type="email" placeholder="Enter Email" name="Email" required>

    <label for="Password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>

    <label for="branch"><b>Branch</b></label>
    <select id="branch" name="branch" required>
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
        
   <input type="submit" name="submit" value="submit" class="sub">
    <label>
      <h3 class="admin-forgot">
        <span>Not Admin ?? Click <a href="index.php">Here</a></span>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </h3>
    </label>
  </div>  
</form>

</body>
