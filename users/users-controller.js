'use strict';

kankor.controller('UsersController', ['$scope', 'Users', function($scope, Users){
	$scope.users = Users;
	$scope.title ="کارن";
	$scope.visibleCount = 100;	// Number of 
	$scope.showLoadMore = true;
	$scope.orderByTerm = '';	// sort the columns based on this term
	$scope.reverseOrder = false;
	$scope.userOperated = '';

	$scope.setUserOperated = function(id){
		$scope.userOperated = id;
	}

	$scope.increaseVisibleCount = function(){
		$scope.visibleCount += 100;
		if($scope.visibleCount >= $scope.users.length){
			$scope.showLoadMore = false;
		}
	}

	$scope.setOrder = function(orderByTerm){
		$scope.reverseOrder = !$scope.reverseOrder;
		$scope.orderByTerm = orderByTerm;
		console.log($scope.orderByTerm);
	}

	$scope.deleteUser = function(id){
		$scope.users.splice(id, 1);
		console.log(id);
	}
	$scope.editUser = function(user){
		$('#editUser').modal();
	}
}]);