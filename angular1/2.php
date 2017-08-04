<!DOCTYPE html>
<html>
<head>
	<title>Angular examples1</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>
<body ng-app="myApp">

<div ng-controller="myCtrl">
<input type="text"  ng-model="fname" />
<input type="text"  ng-model="lname" />
{{fullname()}}
</div>
<script type="text/javascript">
	var myapp = angular.module('myApp',[]);
	myapp.controller('myCtrl',function($scope){
		$scope.fname="Anil";
		$scope.lname="Gupta";
		$scope.fullname=function(){
			return $scope.fname+" "+$scope.lname;
		}
	});
</script>
</body>
</html>