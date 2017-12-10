
<?php
include 'config.php';
session_start();




//Get username and password from the form.


$username = $_GET['username'];
$password = $_GET['password'];
$_SESSION['username_s']=$username;

 mysql_query("SET NAMES 'utf8'");
 mysql_query('SET CHARACTER SET utf8');


  $sql =("SELECT * FROM `patients` WHERE `medical_record_NO` = '$username' AND `password`='$password'");
  $result = mysql_query($sql) or die(mysql_error());
  $num = mysql_num_rows($result);


  if ($row = mysql_fetch_assoc($result)){
    header('Location:Profile.php');
}
    else  {
echo "error";
}

?>
