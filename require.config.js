
require.config({
	baseUrl: '/ketab',
	paths: {
		'domReady': 'common/libs/domReady/domReady',
		'jQuery': 'common/libs/jquery/dist/jquery.min',
		'bootstrap': 'common/libs/bootstrap/dist/js/bootstrap',
		'less': 'common/libs/less/dist/less-1.7.0',
		'es5Shim': 'common/libs/es5-shim/es5-shim',
		'angular': 'common/libs/angular/angular.min',
		'ngUiRouter': 'common/libs/angular-ui-router/release/angular-ui-router.min',
		'ngMock': 'common/libs/angular-mocks/angular-mocks',
		'jasmine': 'common/libs/jasmine/lib/jasmine-core/jasmine',
		'jasmine-html': 'common/libs/jasmine/lib/jasmine-core/jasmine-html'
	},
	shim: {
		'jQuery': {
			exports: 'jQuery'
		},
		'bootstrap': {
			exports: 'bootstrap',
			deps: ['jQuery']
		},
		'angular': {
			exports: 'angular',
			deps: ['jQuery']
		},
		'ngUiRouter': {
			exports: 'ngUiRouter',
			deps: ['angular']
		},
		'ngMock': {
			exports: 'ngMock',
			deps: ['angular']
		},
		'jasmine': {
			exports: 'jasmine',
			deps: ['angular']
		},
		'jasmine-html': {
			exports: 'jasmine-html',
			deps: ['jasmine']
		}
	}
});

define(['require', 'angular', 'ngMock', 'jQuery', 'bootstrap', 'es5Shim', 'less', 'ketab', 'routes'], function(require, ng) {
	'use strict';

	require(['domReady'], function(document) {
		ng.bootstrap(document, ['ketab']);
	});

});