<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css.css">
<title>
Ajax Print Out
</title>
</head>
<body>
<h1 align=center> Ajax </h1>



<?php 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$date=$_POST['date'];
$gd=$_POST['gd'];
$ms=$_POST['ms'];
$email=$_POST['email'];
$num=$_POST['num'];
$ad=$_POST['ad'];
$pos=$_POST['pos'];
$myfile=$_POST['myfile'];


echo "<table align= center bordercolor='#3268B2' padding='50' border='0' width='500' height='500' cellspacing ='0' bgcolor='lightgray'>";
  echo"<tr >";
  echo "<td class>Full Name: $fname</td>";
  echo "</tr>";

  echo"<tr >";
  echo "<td>Last Name: $lname</td>";
  echo "</tr>";

  echo"<tr>";
  echo "<td>Date of Birth: $date</td>";
  echo "</tr>";
   
  echo"<tr>";
  echo "<td>Gender: $gd</td>";
  echo "</tr>";
  
  echo"<tr>";
  echo "<td>Marital Status: $ms</td>";
  echo "</tr>";

  echo"<tr >";
  echo "<td>E-mail: $email</td>";
  echo "</tr>";

  echo"<tr >";
  echo "<td>Phone Number: $num</td>";
  echo "</tr>";

  echo"<tr>";
  echo "<td>Address: $ad</td>";
  echo "</tr>";

  echo"<tr>";
  echo "<td>Postal Code: $pos</td>";
  echo "</tr>";

  echo"<tr>";
  echo "<td>File Location: $myfile</td>";
  echo "</tr>";

  echo "</table>";



?>
</body>
</html>