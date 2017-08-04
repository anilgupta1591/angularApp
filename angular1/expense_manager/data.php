
<?php 
ini_set("display_errors", "1");
error_reporting(E_ALL);
$con = mysqli_connect('localhost','u224974519_food','Ignoumca@15','u224974519_food') or die(mysql_error());

$sql="select * from user";
$data = mysqli_query($con,$sql);

$response = array();

while($res = mysqli_fetch_array($data,MYSQLI_ASSOC)){
	$response[] = $res;
	//$response['name'][] = $res['name'];
}
print  json_encode($response);
?>



