<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
</head>
<body ng-app="myApp">

<a href="#/">Scope</a>
<a href="#2">2</a>
<a href="#3">3</a>
<div ng-view></div>

<script>
	var app = angular.module('myApp',['ngRoute']);
	app.config(function($routeProvider){
		$routeProvider
		.when('/',{
			templateUrl:'scope.php'
		})
		.when('/2',{
			templateUrl:'2.php'
		})
		.when('/3',{
			templateUrl:'1.php'
		});
	});
</script>
</body>
</html>


