<!DOCTYPE html>
<html>
<head>
	<title>Assignment</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script type="text/javascript" src="src/js/angular-datepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="http://720kb.github.io/csshelper/assets/ext/src/helper.css">
  <link rel="stylesheet" type="text/css" href="src/css/angular-datepicker.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div ng-app="myApp" ng-controller="myCtrl">
<div ng-hide="form">
<h2 ng-bind="title"> Add Item </h2>
<form name="myForm">
<table>
<tr> 
	<td>
	Type:
	</td>
	<td>
				<input type="hidden" ng-model="user_id" >
				<select ng-model="types" name="types" ng-init="types = type[0]"  ng-options="t for t in type" required>
				</select>
				<span class="error-msg" >{{myForm.types.$valid}}</span>
	</td>
</tr> 
<tr> 
	<td>
	Add Friend:
	</td>
	<td>
				<select ng-model="friends" multiple size="2">
				<option ng-click="addFriend(f)" ng-repeat="f in friend">{{f}}</option>
				</select>

	</td>
</tr>
<tr> 
	<td>
	Name:
	</td>
		<td>
		<input type="text" name="names" ng-model="names" required>
		<span class="error-msg" ng-hide="myForm.names.$valid">This field is required</span>
	</td>
</tr>
<tr> 
	<td>
	Currency:
	</td>
	<td>
			<select ng-model="currencies">
				<option ng-repeat="c in currency">{{c}}</option>
			</select>
	</td>
</tr>
<tr> 
	<td>
	Date:
	</td>
		<td>
		 <div class="datepicker"
      date-format="y-MM-dd">
      	<input ng-model="myDate" type="text" />
   		  </div>
   

	</td>
</tr>
<tr> 
	<td>
	Amount:
	</td>
		<td><input type="text"  ng-model="amount">
	</td>
</tr>
<tr>
	<td colspan="2" align="center">
	<button ng-bind="button" ng-click="AddItem()">Add</button>
	</td>
</tr>
</table>
</form>
</div>

<div ng-hide="table">
<table border="1">
<tr rowspan="6">
<th> <a href="javascript:void(0);"  ng-click="addRecord()">Add record</a></th>
</tr>
	<tr>
		<td>ID</td>
		<td>Type</td>
		<td>Name</td>
		<td>Currency</td>
		<td>Date</td>
		<td>Amount</td>
		<td colspan="2"> Action</td>
	</tr>
		<tr ng-repeat="x in expense|orderBy:'id' ">
		<td>{{x.id}} </td>
		<td> {{x.type}}</td>
		<td> {{x.name}}</td>
		<td> {{x.currency}}</td>
		<td> {{x.date}}</td>
		<td> {{x.amount|currency}}</td>
		<td><a href="javascript:void(0);" ng-click="editItem(x,$index)">Edit </a> </td>
		<td><span ng-click="removeItem(x)">&times;</span> </td>
	</tr>
</table>
</div>

</div>




<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
<script type="text/javascript">
	var app  = angular.module('myApp',['720kb.datepicker','ngRoute']);

app.config(function($routeProvider){
		$routeProvider
		.when('/show',{
			controller : "myCtrl"
		})
		.when('/2',{
			templateUrl:'2.php'
		})
		.when('/3',{
			templateUrl:'1.php'
		});
});
	app.controller('myCtrl',function($scope,$http){
		$scope.form = true;

		$scope.data ={};
		$scope.title="Add Item";
		$scope.button="Add";
		$scope.expense =[];
		$scope.type=["Cash", "Credit", "Wallet"];
		$scope.friend = ["Anil","Amit","Ajay"];
		$scope.currency=["USD","INR","AUD"];
		
		this.myDate = new Date();
  		this.isOpen = false;
		
		$http({
			'url':'http://freekafood.com/api/getData.php',
			'method':'GET',
			dataType: 'jsonp',
			 headers: {
				   'Content-Type': 'application/json',
				   'Access-Control-Allow-Origin': '*'
				 }
		}).then(function(response){
			$scope.expense = {};
			$scope.expense= response.data;
			console.log(response.data);
		});	

		$scope.addFriend = function(x){
			$scope.names = x;
		}
		
		$scope.addRecord = function(){
				$scope.form = false;
				$scope.table = true;
		}

		$scope.AddItem = function(){
			$scope.data['type'] = $scope.types; 
			$scope.data['name'] = $scope.names;
			$scope.data['currency'] = $scope.currencies;
			$scope.data['date'] = $scope.myDate;
			if($scope.currencies == 'INR')
			$scope.data['amount'] = $scope.amount*0.015;
			else if($scope.currencies == 'AUD') 
				$scope.data['amount'] = $scope.amount*0.77;
			else
				$scope.data['amount'] = $scope.amount;

			

		 $scope.errortext = "";
			
			 /*if ($scope.expense.indexOf($scope.data) == -1) {*/
			if($scope.myForm.$valid){
			
			//alert($scope.types );
			if($scope.user_id != ""){
					$http({
			        url: 'query.php?update=1',
			        method: "POST",
			        headers: {
					   'Content-Type': 'json'
					 },
			        data: { 'id':$scope.user_id,'type' : $scope.types,'name' : $scope.names,'currency' : $scope.currencies,'date' : $scope.myDate,'amount' : $scope.data['amount'] }
			    })
			    .then(function(response) {
			    	$scope.expense = {};
					$scope.expense= response.data;
			            // success
			    });
			}else{
			$http({
		        url: 'query.php',
		        method: "POST",
		        headers: {
				   'Content-Type': 'json'
				 },
		        data: { 'type' : $scope.types,'name' : $scope.names,'currency' : $scope.currencies,'date' : $scope.myDate,'amount' : $scope.data['amount'] }
		    })
		    .then(function(response) {
		    	$scope.product = angular.copy($scope.data);
				$scope.expense.push($scope.product);

		    	console.log(response);
		            // success
		    });
		}
			$scope.table = false;
			$scope.form = true;
		}
			/*$scope.adddVisible = false;
			$scope.recordVisible = true;
		}*/
			/*}else{
				 $scope.errortext = "The item is already in your array.";
			}*/
			$scope.types = "";
			$scope.names = "";
			$scope.currencies = "";
			$scope.myDate = "";
			$scope.amount = "";
			console.log($scope.expense);
		}

		$scope.editItem = function(data,x){
			$scope.form = false;
			$scope.table = true;
			$scope.title="Edit Item";
			$scope.button="Done";
			$scope.user_id = data.id;
			$scope.types = data.type;
			$scope.names = data.name;
			$scope.currencies ="USD";
			$scope.myDate = data.date;
			$scope.amount = data.amount;
			$scope.expense.splice(x,1);

	

			console.log(data);
			console.log(data.names+"==========="+data.types);
		}
		//$scope.removeItem = [];
		$scope.removeItem = function(data){
			 if ($scope.expense.indexOf(data) === -1) {
             	$scope.expense.push(data);
	         }
	         else {
	             $scope.expense.splice($scope.expense.indexOf(data), 1);

	             $http({
					'url':'getData.php?id='+data.id,
					'method':'GET',
					 headers: {
						   'Content-Type': 'application/json'
						 }
				}).then(function(response){
					console.log(response);
				});	
	         }

		}

	});

</script>
</body>
</html>