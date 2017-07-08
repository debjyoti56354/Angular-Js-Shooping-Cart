var app = angular.module("Demo", [])
.controller("redColourController", function ($scope, $rootScope) {    
             $rootScope.rootScopeColour = "I am Root Scope Colour";       
			 $scope.redColour = "I am Red Colour";          
			 })
			 .controller("greenColourController", function ($scope) {
				 $scope.greenColour = "I am Green Colour";
				 }) 
 