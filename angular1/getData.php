<?php
//mysql_connect('localhost','root','');
//mysql_select_db('expense_manager');
ini_set("display_errors", "1");
error_reporting(E_ALL);
$con = mysqli_connect('mysql.hostinger.in','u224974519_food','Ignoumca@15','u224974519_food') or die(mysql_error());
//$con = mysqli_connect('localhost','root','','expense_manager') or die(mysqli_error());
//mysql_select_db('u224974519_food');


if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "delete from expense where id=$id";
	$data = mysqli_query($con,$sql);
	echo 1;
}else if(isset($_GET['update'])){
	$id = $_GET['id'];
	$sql = "select * from expense where id=$id";
	$data = mysqli_query($con,$sql);
	$res = mysqli_fetch_assoc($data);
	print  json_encode($res);
	exit();

}else{

$sql = "select * from expense";
$data = mysqli_query($con,$sql);

$response = array();

while($res = mysqli_fetch_assoc($data)){
	$response[] = $res;
	//$response['name'][] = $res['name'];
}
print  json_encode($response);
exit();
}
?>