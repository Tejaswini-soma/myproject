<?php 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><title>Sign Up</title>
    <link rel="stylesheet" href="we.css" />
    
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
     <style>
    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  width: 150pt;
}
 </style>

</head>
<body>
 <center><em>GREQUO</em></center>
    <p>A place to share knowledge and to get better solutions</p>
    <div class="signup-box">
      <h1>Sign Up</h1>
      <h4>It's free and only takes a minute</h4>
<form  method="post" action="http://localhost/web/signup.php">
<div class="container">
 <label>First Name</label>
 <input type="text" name="name" placeholder="Enter Username" required/><br/>
<label>Last Name</label>
<input type="text" name="lname" placeholder="Enter Last Name" required/><br/>
 <label>Email</label>
<input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Enter Email" required/><br/>
 <label>Password</label>
<input type="password" name="pass" placeholder="Enter Password" required/><br/>
<label>Confirm Password</label>
<input type="password" name="pass1" placeholder="Confirm Password" required/><br/>
<br />
<button name="s" class="button">Register</button>

</div>
</form>
 <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="login.php">Login here</a>
    </p>


<?php
$p=$_POST["pass"];
$p1=$_POST["pass1"];

$dbh=mysql_connect("localhost","root","niranjan");
mysql_select_db("grequo");

if(isset($_POST["s"])) 
{
    if($p==$p1)
    {
     $str="insert into login values('" . $_POST["name"] ."','" . $_POST["lname"] . "','" . $_POST["email"] . "','" . $_POST["pass"] . "')";
mysql_query($str);
echo "<script>alert('Registration Sucessful');</script>";  

    }
    else
    {
         
         echo "<script>alert('Password Mismatch');</script>"; 
    }

}

?>

</body>
</html>
