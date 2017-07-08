var app = angular.module("Demo", ["ngRoute"]).config(function ($routeProvider, $locationProvider) {  
               $routeProvider
			   .when("/home", {         
			   templateUrl: "Templates/home.html", 
			controller: "homeController",
			controllerAs: "homeCtrl"     ,
   caseInsensitiveMatch: true 			
			})                
			.when("/courses", {   
			templateUrl: "Templates/courses.html",   
			controller: "coursesController as coursesCtrl",   
			controllerAs: "coursesCtrl"  ,
			   caseInsensitiveMatch: true 
			})                
			.when("/students", {          
			templateUrl: "Templates/students.html",     
			controller: "studentsController as studentsCtrl",  
			controllerAs: "studentsCtrl"   ,
   caseInsensitiveMatch: true 			
			}) 
 .otherwise({        
 redirectTo: "/home",
caseInsensitiveMatch: true  
 }) 

 }) 
 .config(['$locationProvider', function($locationProvider) {    
 $locationProvider.hashPrefix('');   
 }]) 
.controller("homeController", function () {         
        this.message = "Home Page";         
		})           
		.controller("coursesController", function () {
			this.courses = ["PHP", "Android", "Angular JS", "SQL Server"];         
			})            
		.controller("studentsController", function ($http, $route) {   
		var vm = this; 
		vm.reloadData = function () {   
		$route.reload();     
		} 
		$http.get("service/student/list/")
		.then(function (response) {              
		vm.students = response.data;             
		}) }) 
 
 