<?php

defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;

$route['page/about'] = 'Main/about';
$route['page/otp'] = 'Main/otp';
$route['post/register'] = 'Main/register';
$route['verfiy/otp'] = 'Main/verify_otp';
/**
 * navbar page
 */
$route['page/account'] = 'Course/Account';
$route['page/account/register'] = 'Course/Account/register';

/**
 * student page
 */
$route['page/course/detail/(:any)'] = 'Course/Course/course_detail/$1';
$route['page/student/lecture/list'] = 'Course/Student';
$route['page/student/lecture/(:any)'] = 'Course/Student/student_lecture/$1';
$route['page/student/lecture/(:any)/(:any)'] = 'Course/Student/student_lecture_play/$1/$2';


/**
 * backend
 */
$route['login'] = 'Admin/Main/login';
$route['logout'] = 'Admin/Main/logout';
$route['dashboard'] = 'Admin/Dashboard';
$route['courselist'] = 'Admin/Course';
$route['page/course/create'] = 'Admin/Course/page_create';
$route['admin/page/course/detail/(:any)'] = 'Admin/Course/page_detail/$1';
$route['course/submit'] = 'Admin/Course/course_create';
$route['course/preview'] = 'Admin/Course/preview';
$route['course/content/submit'] = 'Admin/Course/course_submit';

/**
 * purchase
 */
$route['course/purchase'] = 'Admin/Purchase/create';
$route['course/page/purchase/buy'] = 'Admin/Purchase/page_purchase';
$route['course/purchase/list'] = 'Admin/Purchase/transactions';
$route['course/purchase/detail/(:any)'] = 'Admin/Purchase/detail_transaction/$1';
$route['course/purchase/approve'] = 'Admin/Purchase/approve_user_course';



/**
 * mentor
 */
$route['mentor'] = 'Admin/User/mentor';

//external
$route['youtube/data'] = 'Course/Course/youtube';
