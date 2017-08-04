<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Expense Manager</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-basic.css">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script type="text/javascript" src="src/js/angular-datepicker.js"></script>
      <!-- <link rel="stylesheet" type="text/css" href="http://720kb.github.io/csshelper/assets/ext/src/helper.css"> -->
      <link rel="stylesheet" type="text/css" href="src/css/angular-datepicker.css">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    </head>


	<header>
		<h1>Expense Manager</h1>
    </header>

  


    <div  ng-app="myApp" ng-controller="myCtrl">

        <!-- You only need this form and the form-basic.css -->
    <div class="main-content" ng-hide="form">
            <form class="form-basic" name="myForm">


                <div class="form-title-row">
                    <h1 ng-bind="title">Add Record</h1>
                </div>
                <input type="hidden" ng-model="user_id" >
                <div class="form-row">
                    <label>
                        <span>Type</span>
                        
                        <select ng-model="types" name="types" ng-init="types = type[0]"  ng-options="t for t in type" required>
                        </select>
                        <label class="error-msg" ng-hide="myForm.types.$valid">This field is required</label>
    
                    </label>
                </div>



                <div class="form-row">
                    <label>
                        <span>Add Friend</span>
                        <select ng-model="friends" multiple size="2">
                        <option ng-click="addFriend(f)" ng-repeat="f in friend">{{f}}</option>
                        </select>
                    </label>
                </div>

                 <div class="form-row">
                    <label>
                        <span>Friend Name</span>
                        <input type="text" name="names" ng-model="names" required/>
                        <label class="error-msg" ng-hide="myForm.names.$valid">This field is required</label>
                    </label>
                </div>

                <div class="form-row">
                    <label>
                        <span>Currency</span>
                        <select ng-model="currencies">
                            <option ng-repeat="c in currency">{{c}}</option>
                        </select>
                    </label>
                </div>

                <div class="form-row">
                    <label>
                       <span>Date</span>
                        <div class="datepicker" style="margin-left: 180px;margin-top: -36px" date-format="y-MM-dd">
                        <input ng-model="myDate" type="text" />
                        </div>
                    </label>
                </div>      
                 

                 <div class="form-row">
                    <label>
                        <span>Amount</span>
                         <input type="text"  ng-model="amount">
                    </label>
                </div>

                
            

                <div class="form-row">
                    <button type="submit" ng-bind="button" ng-click="AddItem()">Add</button>
                </div>

            </form>
     </div>

    <div ng-hide="table">
    <div class="table-title">
    <h3>Expense Detail</h3>
    </div>
    <table class="table-fill">
    <thead>
    <tr rowspan="6">
    <th> <a href="javascript:void(0);"  ng-click="addRecord()">Add record</a></th>
    </tr>
    </thead>
   
    <tbody class="table-hover">
    <tr>
        <th class="text-left">ID</td>
        <th class="text-left">Type</td>
        <th class="text-left">Name</td>
        <th class="text-left">Currency</td>
        <th class="text-left">Date</td>
        <th class="text-left">Amount</td>
        <th class="text-left" colspan="2"> Action</td>
    </tr>
    <tr ng-repeat="x in expense">
        <td>{{x.id}} </td>
        <td> {{x.type}}</td>
        <td> {{x.name}}</td>
        <td> {{x.currency}}</td>
        <td> {{x.date}}</td>
        <td> {{x.amount|currency}}</td>
        <td><a href="javascript:void(0);" ng-click="editItem(x,$index)">Edit </a> </td>
        <td><span ng-click="removeItem(x)">&times;</span> </td>
    </tr>
    </tbody>
    </table>
    </div>
</div>
</body>

<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);
</style>
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
            'url':'getData.php',
            'method':'GET',
             headers: {
                   'Content-Type': 'application/json'
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



<script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyD6uAkyFll75edtvOOoMTTAJOXelFmsp9E",
    authDomain: "expense-manager-a9213.firebaseapp.com",
    databaseURL: "https://expense-manager-a9213.firebaseio.com",
    projectId: "expense-manager-a9213",
    storageBucket: "expense-manager-a9213.appspot.com",
    messagingSenderId: "213162696983"
  };
  firebase.initializeApp(config);
</script>
</html>
