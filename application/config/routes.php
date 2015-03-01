<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|e
*/

$route['404_override'] = '';

// Guest 
$route['default_controller'] = "mains";
$route['login'] = "mains/login";
$route['registration'] = "mains/registration";

// User
$route['profile'] = "users/profile";
$route['dashboard'] = "/users";
$route['users/updateProfile'] = "users/updateProfile";
$route['logout'] = "mains/logout";

// Admin
$route['adminlogin'] = "mains/adminLogin";
$route['admin/dashboard'] = "/admins"; // Show
$route['admin/edit/(:num)'] = "admins/edit/$1"; // Edit
$route['admin/orderEdit/(:num)'] = "admins/orderEdit/$1";
// Admin - Order Related
$route['order/saveAdminNote'] = "orders/saveAdminNote";

// Main Site Nav
$route['about'] = "mains/about";
$route['catalog'] = "mains/catalog";
$route['trade'] = "mains/trade";
$route['faq'] = "mains/faq";
$route['contact'] = "mains/contact";
$route['requestCatalog'] = "catalogs/requestCatalog";


// Product_Items (Custom Products)
$route['productitem/newProductitem/keypad'] = "productitems/newProductitemKeypad"; // New Keypad
$route['productitem/newProductitem'] = "productitems/newProductitem"; // New
$route['productitem/createProductitem'] = 'productitems/createProductitem'; // Create
$route['productitem/destroyProductitem'] = '/productitems/destroyProductitem'; // Create

// $route['productitem/update'] = "admins/update"; // Update
$route['productitem/update'] = "admins/updateProductitem"; // Update

// Product_Items * Retrieve *
$route['retrieveMechanisms'] = 'productitems/retrieveMechanisms'; 
$route['retrieveEdgeScrew'] = 'productitems/retrieveEdgeScrew';

// Products 
$route['products'] = "products";
$route['admin/createProduct'] = "admins/createProduct";
// Products * Retrieve *
$route['products/retrieveAllCollections'] = "products/retrieveAllCollections";
$route['products/retrieveAllFinish'] = "products/retrieveAllFinish";
$route['products/retrieveAllType'] = "products/retrieveAllType";

// Orders
$route['order/createOrder'] = "orders/createOrder";
$route['order/newOrder'] = "orders/newOrder";
$route['order/deleteOrder/(:num)'] = "orders/deleteOrder/$1";
$route['order/updateOrder/(:num)'] = "orders/updateOrder/$1";
$route['order/showOrder/(:num)'] = "orders/showOrder/$1";
$route['order/updateOrderInfo'] = "orders/updateOrderInfo";
$route['order/updateStatus'] = "orders/updateStatus";

// PDF
$route['mpdftester'] = "product_items/mpdftester";
$route['tradeEmail'] = "mains/tradeEmail";

$route['digitalCopy'] = "mains/catalogDigital";
$route['catalogSuccess'] = "mains/catalogSuccess";

// $route['product_items/edit/(:num)'] = "product_items/edit/$1";
// die('here');

/* End of file routes.php */
/* Location: ./application/config/routes.php */














































