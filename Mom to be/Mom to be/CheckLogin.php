<?php
session_start();
$DB_HOST = 'localhost';
$DB_USER = 'root';

$DB_PASSWORD = '';
$DB_DATABASE = 'whospital'; //DB Name here

//Connect to mysql server
$con = mysql_connect($DB_HOST, $DB_USER, $DB_PASSWORD);
if(!$con) {
die('Failed to connect to server: ' . mysql_error());
}

//Select database
$db = mysql_select_db($DB_DATABASE);
if(!$db) {
die("Unable to select database");
}

if(isset($_GET['submit'])){
$username=$_GET['loginUsername']; //Get the username and password from the form
$password=$_GET['loginPassword'];

$qry= "SELECT * FROM patients ";

$result=mysql_query($qry);
if ($result){
while($info = mysql_fetch_array( $result ))
 { //Check whether the query was successful or not

		if ($info['patient_name'] == $username && $info['password'] == $password)
		{
			$_SESSION['userID']= $medical_record_NO;
			header('Location:Profile.php');
		}

		else
		header('Location:Login.php');
		exit();
}
}
}
?>
