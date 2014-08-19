
define(['angular', 'ngUiRouter', 'users/index'], function(ng){
	'use strict';

	return ng.module('ketab', ['ui.router', 'ketab.users']);
});