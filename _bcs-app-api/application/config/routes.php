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
|
*/

$route['default_controller'] = "api";
$route['404_override'] = '';
$route['home'] = 'home';
$route['more'] = 'more';
$route['agreement'] = 'agreement';
$route['returns'] = 'returns';
$route['returnqty'] = 'returnqty';
$route['returnitems'] = 'returnitems';
$route['returnitems/(:any)'] = 'returnitems';
$route['returnlist'] = 'returnlist';
$route['returnlist/(:any)'] = 'returnlist';
$route['scrap'] = 'scrap';
$route['suggest'] = 'suggest';
$route['suggest/(:any)'] = 'suggest';
$route['account'] = 'account';
$route['collections'] = 'collections';
$route['search/(:any)'] = 'search';
$route['categories'] = 'categories';
$route['categories/(:any)'] = 'categories';
$route['colorways'] = 'colorways';
$route['colorways/(:any)'] = 'colorways';
$route['query'] = 'query';
$route['query/(:any)'] = 'query';
$route['heros'] = 'heros';
$route['sql/(:any)'] = 'sql';
$route['pdp/(:any)'] = 'pdp';
$route['(:any)'] = 'api';
$route['modified'] = 'modified';
$route['wishlist'] = 'wishlist';
$route['fb'] = 'fb';
$route['modified/(:any)'] = 'modified';


/* End of file routes.php */
/* Location: ./application/config/routes.php */