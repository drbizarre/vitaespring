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
| http://codeigniter.com/user_guide/general/routing.html
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
|
*/

//$route['default_controller'] = "envysea";
$route['default_controller'] = "welcome";
$route['404_override']       = '';
$route['backoffice'] = "envysea";
//PAGINA

$route['sobre-nosotros'] = 'welcome/nosotros';
$route['tienda/(:any)']  = 'welcome/tienda/$1';
$route['producto/(:any)']  = 'welcome/producto/$1';
$route['carrito']          = 'welcome/carrito';
$route['pagar']          = 'welcome/pagar';
$route['carrito/update']   = 'welcome/carrito_update';
$route['oportunidad']    = 'welcome/oportunidad';
$route['videos']         = 'welcome/videos';
$route['noticias']       = 'welcome/noticias';
$route['contacto']       = 'welcome/contacto';
$route['reembolsos']     = 'welcome/reembolsos';
$route['envios']         = 'welcome/envios';
$route['pagos']          = 'welcome/pagos';
$route['privacidad']     = 'welcome/privacidad';


//CUSTOMER SUPPLIER
$route['customer-supplier'] = 'customer_supplier';
$route['customer-supplier/new'] = 'customer_supplier/new_customer';
$route['customer-supplier/save'] = 'customer_supplier/save';
$route['customer-supplier/delete/(:any)'] = 'customer_supplier/delete/$1';
$route['customer-supplier/edit/(:any)'] = 'customer_supplier/edit/$1';

// BUSINESS UNIT
$route['business-unit'] = 'business_unit';
$route['business-unit/new'] = 'business_unit/new_unit';
$route['business-unit/save'] = 'business_unit/save';
$route['business-unit/delete/(:any)'] = 'business_unit/delete/$1';
$route['business-unit/edit/(:any)'] = 'business_unit/edit/$1';


// CUENTAS	
$route['cuentas/new'] = 'cuentas/new_account';


/* End of file routes.php */
/* Location: ./application/config/routes.php */