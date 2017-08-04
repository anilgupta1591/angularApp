<?php


$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
mysql_connect('localhost','root','');
mysql_select_db('expense_manager');

$type = $request->type;
$name = $request->name;
$currency = $request->currency;
$date = $request->date;
$amount = $request->amount;
if(isset($_GET['update'])){
	$id = $request->id;	
	$sql = "update expense set type='$type',name='$name',currency='$currency',date='$date',amount='$amount' where id='$id'";
	mysql_query($sql);

	$sql1 = "select * from expense";
	$data = mysql_query($sql1);

	$response = array();

	while($res = mysql_fetch_assoc($data)){
		$response[] = $res;
		//$response['name'][] = $res['name'];
	}
	print  json_encode($response);
	exit();

}else{
$sql = "insert into expense (type,name,currency,date,amount) values('$type','$name','$currency','$date',$amount)";
mysql_query($sql);
}
echo 1;
exit();
?>