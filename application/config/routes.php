<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "navigation";
$route['404_override'] = 'navigation';
$route['signin'] = 'navigation/signin';
$route['register'] = 'navigation/register';
$route['welcome/(:any)'] = 'navigation/welcome/$1';
$route['welcome'] = 'navigation/welcome';
$route['message/(:any)'] = 'forms/message/$1';




/* End of file routes.php */
/* Location: ./application/config/routes.php */