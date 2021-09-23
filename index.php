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

</head>
<body>
 <center><em>GREQUO</em></center>
    <p>A place to share knowledge and to get better solutions</p>
    
    <p class="para-2">
      Click to create an account? <a href="signup.php">Signup Here</a>
    </p>
     <p class="para-2">
      Already have an account? <a href="login.php">Login Here</a>
    </p>


<?php
session_start();
$dbh=mysql_connect("localhost","root","niranjan");
mysql_select_db("grequo");
if(isset($_POST["s"])) 
{
$n=$_POST["email"];
$p=$_POST['pass'];

$str="select email,pass from login";
$squery=mysql_query($str);
while($row=mysql_fetch_array($squery))
{
    //echo $row["name"]." ";
    //echo $row["pass"]." ";
    if($n==$row["email"]&& $p== $row["pass"])
    {
        $_SESSION['email']=$n;
        header("location:content.php");

    }
    else
    {
        //echo "Login Failed";   
    }

    echo "<br/>";
}
}
?>

</body>
</html>
