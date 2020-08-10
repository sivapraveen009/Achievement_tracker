<?php
session_start();
$username = $_POST['username'];
$password = $_POST['Password'];
$username = stripcslashes($username);
$password = stripcslashes($password);
$_SESSION["name"] = $username;
if (!empty($_POST['username'])){
    
mysql_connect("localhost","root","i420myenemies");
mysql_select_db("achievements");
$result = mysql_query("select * from achievers where name='$username' and password='$password' ") or die("failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if ($row['name'] == $username && $row['password'] == $password){
   header("Location: http:profile.html");
}
else {
    echo ( "<font color = 'black'>Failed try!!!</font><br><br>");
 
     echo ( "<font color = 'black'>Seems like your account details do not match!!");
    
    }
}
else {
echo "<font color = 'white'>input something folk!Dont act smart ah!!</font>";
}
?>


  
