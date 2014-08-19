
require(['ketab'], function(ketab) {
	ketab.controller('BooksController', ['$scope', 'Books', function($scope, Books){
		$scope.title ="ازموينې";
		$scope.books = Books;
	}]);
});
