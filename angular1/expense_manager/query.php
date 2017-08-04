<?php


$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
ini_set("display_errors", "1");
error_reporting(E_ALL);
$con = mysqli_connect('localhost','u224974519_food','Ignoumca@15','u224974519_food') or die(mysql_error());

$type = $request->type;
$name = $request->name;
$currency = $request->currency;
$date = $request->date;
$amount = $request->amount;
if(isset($_GET['update'])){
	$id = $request->id;	
	$sql = "update expense set type='$type',name='$name',currency='$currency',date='$date',amount='$amount' where id='$id'";
	mysqli_query($con,$sql);

	$sql1 = "select * from expense";
	$data = mysqli_query($con,$sql1);

	$response = array();

	while($res = mysqli_fetch_assoc($data)){
		$response[] = $res;
		//$response['name'][] = $res['name'];
	}
	print  json_encode($response);
	exit();

}else{
$sql = "insert into expense (type,name,currency,date,amount) values('$type','$name','$currency','$date',$amount)";
mysqli_query($con,$sql);
}
echo 1;
exit();
?>