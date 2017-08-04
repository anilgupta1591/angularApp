<!DOCTYPE html>
<html>
<head>
	<title>Angular examples</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body>
<div ng-app="myApp" ng-controller="myCtrl">
<input type="text" ng-model="name">
Hello <p ng-bind="name"></p>



<div  ng-init="firstName='John'">

<p>The name is <span ng-bind="firstName"></span></p>
</div>
</div>

<script type="text/javascript">
	var app = angular.module('myApp',[]);
	app.controller('myCtrl',function($scope){
		$scope.name='anil';
	});
</script>
</body>
</html>