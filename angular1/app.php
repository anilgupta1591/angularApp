<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div ng-app="myshoppingList" ng-controller="myCtrl">
<ul >
	<li ng-repeat="x in products">{{x}}
	<span ng-click="removeItem($index)">&times; </span>
	</li>
</ul>
{{errortext}}
	<input type="text" ng-model="addMe">
	<button ng-click="addItem()"> Add</button>
</div>
<script type="text/javascript">
	var app = angular.module("myshoppingList",[]);
	app.controller('myCtrl',function($scope){
		$scope.products = ["a","b","c"];
		$scope.addItem = function(){
			 $scope.errortext = "";
	       
	        if ($scope.products.indexOf($scope.addMe) == -1) {
	            $scope.products.push($scope.addMe);
	        } else {
	            $scope.errortext = "The item is already in your shopping list.";
	        }

	     
		}

		$scope.removeItem = function(x){
			$scope.products.splice(x,1);
		}
	});
</script>

</body>
</html>