<?php
include 'config.php';


$title=filter_input(INPUT_POST,"title");
$description=filter_input(INPUT_POST,"description");
$startday=filter_input(INPUT_POST,"startday");
$duration=filter_input(INPUT_POST,"duration");
$time=filter_input(INPUT_POST,"time");
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];


mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");
$sql="INSERT INTO `medecines` (`medecine_name`, `descreption`, `start_date`, `duration`, `time`, `time_a_day`, `every`) VALUES ('$title', '$description', '$startday', '$duration', '$time', '$q1', '$q2')";

if (mysql_query($sql)) {
  echo "<script type='text/javascript'>alert('good');</script>";
}
echo "<script type='text/javascript'>alert('error');</script>";

?>
