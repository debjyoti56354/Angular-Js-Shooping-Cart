var app = angular.module("Demo", ['angularModalService']) 
 .controller("productsController", function ($scope, $http, ModalService, $rootScope) {
 $http.get("service/student/list/ ").then(function (response) {
 $scope.products = response.data; 
 angular.forEach($scope.products, function (product) {
    product.price = parseFloat(product.price);
	//product.avg_ratings=Math.round()
   }); 
 }) 
  
             $scope.rowCount = 3; 
		   
/*  $scope.sortColumn = "name";
  
  $scope.getProd = function (id) {

   $http.get("service/student/list/ "+id+"/").then(function (response) {
 $scope.prod2 = response.data; 
  
	//$(#myModal).modal('show');

  
}
*/

    $scope.show = function(id) {
		$rootScope.id = id;
        ModalService.showModal({
            templateUrl: 'modal.html',
            controller: "ModalController"
        }).then(function(modal) {

			
            modal.element.modal();
            modal.close.then(function(result) {
                $scope.message = "You said " + result;
            });
        });
    };
  
							$scope.formatNumber2 = function(i) {
						return Math.round(i); 
					}
  
  
			//  $scope.reverseSort = false; 
 
          /*  $scope.sortData = function (column) {
				//$scope.reverseSort = ($scope.sortColumn == column) ?!$scope.reverseSort : false;
				$scope.sortColumn = column;
				} */
 
         /*   $scope.getSortClass = function (column) { 
 
                if ($scope.sortColumn == column) {
					return $scope.reverseSort? 'arrow-down': 'arrow-up';
					} 
 
                return '';
				}   
*/
		   
             })
			 
			 .controller('ModalController', function($scope, close, $log, $rootScope, $http) {
					var id = $rootScope.id;
					$http.get("service/student/list/"+id+"/").then(function (response) {
					$scope.prod2 = response.data; 

					$log.info($scope.prod2);
					$scope.formatNumber = function(i) {
						return Math.round(i * 100)/100; 
					}
				
				  $scope.myVar = "Hello ALl";
				 $scope.close = function(result) {
					close(result, 500); // close, but give 500ms for bootstrap to animate
				 };

				});
			 });
			 
			 	 
 