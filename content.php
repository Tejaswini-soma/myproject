
<!DOCTYPE HTML>
<html>
  <head>
    <title>Grequo.com</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cont.css" />
  </head>
<body>
    <h1><span class="blinking">Welcome!</span></h1>
    
    <style>
        body{
  background-image: url('enterpise.jpg');
}
        .vl {
          border-left: 2px solid black;
          height: 380px;
          position: absolute;
          left: 10%;
          margin-left: -1px;
          top: 22%;
        }
        .blinking{

animation:blinkingText 1.2s infinite;
}
@keyframes blinkingText{
0%{     color:black;    }
49%{    color: black; }
60%{    color: transparent; }
99%{    color:transparent;  }
100%{   color:black;    }
}


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
         
          
         <b> <u>GREQUO </u></b>&nbsp; &nbsp; &nbsp;
<mark style="background-color:red;"><img src="homme.jpg" alt="no image"  height="3%" width="2%"/> </mark><br> <br>
<p>+Create space</p> 
<div class="vl"></div>
<center><h2>Hello User</h2></center>
<form  method="post" action="http://localhost/web/content.php">
<div style = "position:left; left:50px; top:1px;border-width: 60%;">
  <center><label><b>Ask a question</b></label></center>
  <center><input type="text" name="ques" id="txtbox"placeholder="What is your question or link?" /></center>
       
  <center><label><b>Answer a question</b></label></center>
  <center><input type="text" name="ans" id="txtbox" placeholder="Answer" /><br /><br />
   <button name="s" class="button">Submit</button></center>
 </div>

 </form>

<?php


$dbh=mysql_connect("localhost","root","niranjan");
mysql_select_db("grequo");

if(isset($_POST["s"])) 
{
   
     $str="insert into qa values('" . $_POST["ques"] ."','" . $_POST["ans"] . "')";
mysql_query($str);
echo "<script>alert('Submitted Sucessful');</script>";  


}

$str="select * from qa";

$squery=mysql_query($str);
echo "<table border=1>
<tr>
<th width=10%>Question</th>
<th width=10%>Answer</th>

</tr>";

while($row=mysql_fetch_array($squery))
{
    echo "<tr>";
    echo "<td>".$row["question"]."</td>";
    
    echo "<td>".$row["answer"]."</td>";
   
    echo "</tr>";
   
}
echo "</table>";
 echo "<br/>";



?>


  
</body>
</html>