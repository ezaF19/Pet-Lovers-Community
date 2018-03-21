<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['user/read/(:any)'] = 'user/read/$1';
$route['user'] = 'user/posts';
$route['recent'] = 'plcrecent/posts';
$route['user/delete/(:any)'] = 'user/delete/$1';
$route['user/(:any)'] = 'user/posts';
$route['user'] = 'plcpost/posting';
$route['user'] = 'user/posts';
$route['register'] ='register/index';
$route['adoptions'] ='adoptsales/sales';
$route['itemsales'] ='itemsales/sales';
$route['adoptsales'] ='adoptsales/sales';
$route['allservices'] ='allservices/index';
$route['login'] ='login/index';
$route['login'] ='login/sign';
$route['logout'] ='logout/index';
$route['default_controller'] = 'homepage/view';
$route['(:any)'] = 'homepage/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
