var app = angular.module("myModule", []).controller("myController", function ($scope) { 
 
            var employees = [          
			{ name: "Ben", gender: "Male", salary: 55000, city: "London" },  
			{ name: "David", gender: "Male", salary: 68000, city: "Chennai" },  
			{ name: "Chris", gender: "Male", salary: 57000, city: "London" },   
			{ name: "Alex", gender: "Female", salary: 53000, city: "Chennai" },    
			{ name: "Amy", gender: "Female", salary: 60000, city: "London" },
			]; 
 
            $scope.employees = employees;   

			  $scope.sortColumn = "name";
			  $scope.reverseSort = false; 
 
            $scope.sortData = function (column) {
				$scope.reverseSort = ($scope.sortColumn == column) ?!$scope.reverseSort : false;
				$scope.sortColumn = column;
				} 
 
            $scope.getSortClass = function (column) { 
 
                if ($scope.sortColumn == column) {
					return $scope.reverseSort? 'arrow-down': 'arrow-up';
					} 
 
                return '';
				}   


			
			}); 
 