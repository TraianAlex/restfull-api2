<?php
//Angular
get('home', function(){
	return view('app');
});

$router->controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);

post('oauth/access_token', function(){
	return Response::json(Authorizer::issueAccessToken());
});

//Route::group(['before' => 'oauth'], function(){//use middleware instead this
	resource('post', 'ApiController', ['except' => ['create', 'edit']]);
//});

Route::get('/', function () {
    //return view('welcome');
    return redirect('home');
});