var myApp= angular.module("myModule",[]);

var myController = function ($scope) {     $scope.message = "AngularJS Tutorial"; 

var company={
	
	CompanyName:'Oracle',
	jonprof:'Developer',
	img:'image/oracle.png'
	
	
};

$scope.company = company; 


} 
 
// Register the controller with the module myApp.controller("myController", myController); 
myApp.controller("myController", myController); 