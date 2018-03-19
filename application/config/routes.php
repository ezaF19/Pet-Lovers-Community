<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['register'] ='register/index';
$route['login'] ='login/index';
$route['login'] ='login/sign';
$route['logout'] ='logout/index';
$route['default_controller'] = 'homepage/view';
$route['(:any)'] = 'homepage/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
