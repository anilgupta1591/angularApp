<!DOCTYPE html>
<html>
<head>
	<title>Angular Http</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body>
<div ng-app="myApp" ng-controller="myCtrl">
{{ajaxData}}

<table>
<tr>
<th> ID</th>
<th> Name</th>
</th>
  <tr ng-repeat="x in ajaxData track by $index ">
  <td>{{ x.id }}</td>
    <td>{{ x.name }}</td>
 
  </tr>
</table>
<select ng-model="selectedName" ng-options=" x for x in names">
<option>Select anme</option>
</select>
</div>

<script type="text/javascript">
	var app = angular.module('myApp',[]);
	app.controller('myCtrl', ['$scope', '$http',function($scope,$http){
		$http({
			url:'data.php',
			method:'POST',
			headers: {
			   'Content-Type': 'json'
			 },
			data:{'name':'Anil'},
			
			})
		.then(function(response){
			console.log(response);
			$scope.ajaxData = response.data;
			$scope.names = ["Anil","Ajay","Ankit"];
		});
	}]);
</script>


<style>
table, th , td {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}
table tr:nth-child(odd) {
  background-color: #f1f1f1;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}
</style>
</body>
</html>