<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Backend');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// ==============================================================================
// ==============================Frontend========================================
// ==============================================================================
// $routes->get('/', 'Frontend\Home::index');
$routes->group('bet-huay-thai', ['filter' => 'auth_mem'], function ($routes) {
	$routes->get('', 'Frontend\BetHauythai::index');
	$routes->get('bet-list', 'Frontend\BetHauythai::BetList');
	$routes->get('bet-report', 'Frontend\BetHauythai::BetReport');
	$routes->get('bet-result', 'Frontend\BetHauythai::BetResult');
});
// login frontend
$routes->get('/', 'Login\Singin::index');
$routes->add('singin/(:any)', 'Login\Singin::$1');

// ==============================================================================
// ==============================Backend=========================================
// ==============================================================================
$routes->group('backend', ['filter' => 'auth'], function ($routes) {

	$routes->get('add_user', 'Backend\Add_user::index');
	$routes->add('add_user/(:any)', 'Backend\Add_user::$1');

	$routes->get('user', 'Backend\user::index');
	$routes->add('user/(:any)', 'Backend\User::$1');


	//group setting lotto
	$routes->group('set-huay', function ($routes) {
		$routes->get('pay-rate', 'Sethuay\Set_huay::Payrate');
		$routes->get('per-bet', 'Sethuay\Set_huay::Perbet');
		$routes->get('max-min-bet', 'Sethuay\Set_huay::Maxminbet');
		$routes->get('commission', 'Sethuay\Set_huay::Commission');
		$routes->get('close-time', 'Sethuay\Set_huay::Closetime');
		
		$routes->add('api/(:any)', 'Sethuay\Set_huay::$1');

		

	});
});

// login backend
$routes->get('login', 'Login\Login::index');
$routes->add('login/(:any)', 'Login\Login::$1');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
