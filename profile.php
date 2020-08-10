<?php
session_start();
if (!empty($_POST['aname']) && !empty($_POST['achivedate']) && !empty($_POST['travelall']) && !empty($_POST['registerall']) && !empty($_POST['proof']) )  {

$a = $_POST['aname'];
$b = $_SESSION['name'];

mysql_connect("localhost","root","i420myenemies");
mysql_select_db("achievements");
mysql_query("INSERT INTO achievements (name,achievement) VALUES ('$b','$a') ") or die("failed to query database".mysql_error());

echo ( "<font color = 'black'>UPDATED SUCCESFULLY</font><br><br>");



}


