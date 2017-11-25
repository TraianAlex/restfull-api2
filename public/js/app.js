angular.module('app', ['app.controllers', 'ngRoute'])

	.config(function($routeProvider){
		$routeProvider
			.when('/login', {
				templateUrl: '/js/views/login.html',
				controller: 'LoginController'
			})
			.when('/posts', {
				templateUrl: '/js/views/posts.html',
				controller: 'PostController'
			})
			.when('/post/:id', {
				templateUrl: '/js/views/post.html',
				controller: 'ShowController'
			})
			.otherwise({
        		redirectTo: "/"
    		})
	});