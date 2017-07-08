var app = angular.module("myModule", []).controller("myController", function ($scope, $http) { 

 
            $http.get("json.txt").then(function (response) {       
			$scope.employees = response.data;          
			});   
			}); 