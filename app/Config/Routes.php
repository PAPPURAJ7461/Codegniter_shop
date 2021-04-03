<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
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
$routes->get('/', 'Home::index');
$routes->get('admin/login', 'AdminController::index');
$routes->get('admin/register', 'AdminController::signup');
$routes->Post('admin/auth', 'AdminController::auth');
$routes->get('admin/dashboard', 'AdminController::dashboard');
$routes->get('admin/logout', 'AdminController::logout');
$routes->get('product_details', 'Home::product_details');
$routes->get('admin/add_product', 'ProductController::add_product');
$routes->post('admin/save_product', 'ProductController::save_product');
$routes->get('admin/product_list', 'ProductController::product_list');
$routes->get('admin/product_view', 'ProductController::product_view');
$routes->get('admin/edit_product', 'ProductController::edit_product');
$routes->Post('admin/update_product', 'ProductController::update');
$routes->get('admin/delete', 'ProductController::delete');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
