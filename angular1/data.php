
<?php 
mysql_connect('localhost','root','');
mysql_select_db('test');

$sql="select * from user";
$data = mysql_query($sql);

$response = array();

while($res = mysql_fetch_array($data)){
	$response[] = $res;
	//$response['name'][] = $res['name'];
}
print  json_encode($response);
?>



