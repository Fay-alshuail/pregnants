<?php
include 'config.php';
session_start();


$qry= "SELECT * FROM `medecines`";
$result=mysql_query($qry);

if ($result){
while($info = mysql_fetch_array( $result ))
 { //Check whether the query was successful or not
	$name = $info['medecine_name'];
    $time = $info['time'];

	if (time() >= strtotime($time)) {
		echo "<script>alert('It is time to take "+ $name +"!'); </script>";
		}
}
} //End If result
?>
