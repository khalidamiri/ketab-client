
var kankor = angular.module('kankor', ['ui.router']);

// Configuration and route definition stuff should be going into this file.
kankor.config(['$urlRouterProvider', '$stateProvider', function($urlRouterProvider, $stateProvider){
	$urlRouterProvider.otherwise('/');
	$stateProvider
		.state('home', {
			url: '/',
			templateUrl: 'tests/tests.html',
			controller: 'TestsController'
		})
		.state('tests', {
			url: '/tests',
			templateUrl: 'tests/tests.html',
			controller: 'TestsController'
		})
		.state('users', {
			url: '/users',
			templateUrl: 'users/users.html',
			controller: 'UsersController'
		})
		.state('questions', {
			url: '/questions',
			templateUrl: 'questions/questions.html',
			controller: 'QuestionsController'
		});
}]);