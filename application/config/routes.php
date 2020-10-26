<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'firstview';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Login/index';
$route['logout'] = 'Login/logout';
$route['pengaturan'] = 'Pengaturan/index';
$route['contact'] = 'Pengaturan/contact';
$route['dashboard'] = 'Dashboard/index';
$route['userdata'] = 'User/index';
$route['userdata/add'] = 'User/add';
$route['userdata/edit'] = 'User/edit';
$route['userdata/delete'] = 'User/delete';
$route['proyek'] = 'Proyek/index';
$route['proyek/add'] = 'Proyek/add';
$route['proyek/edit'] = 'Proyek/edit';
$route['proyek/subkon'] = 'Proyek/addSubkon';
$route['proyek/delsubkon'] = 'Proyek/deleteSubkon';
$route['proyek/rpp'] = 'Proyek/addRpp';
$route['proyek/delrpp'] = 'Proyek/deleteRpp';
$route['transaksi'] = 'Transaksi/index';
$route['transaksi/add'] = 'Transaksi/add';
$route['transaksi/delete'] = 'Transaksi/delete';
$route['transaksi/item'] = 'Transaksi/addItem';
$route['transaksi/delitem'] = 'Transaksi/deleteItem';
$route['pelaksana'] = 'Pelaksana/index';
$route['pelaksana/add'] = 'Pelaksana/add';
$route['pelaksana/edit'] = 'Pelaksana/edit';
$route['datalain'] = 'Datalain/index';
$route['laporan'] = 'Laporan/index';
$route['laporan/proyek'] = 'Laporan/laporanProyek';
$route['laporan/subkon'] = 'Laporan/laporanSubkon';
$route['laporan/material'] = 'Laporan/laporanMaterial';
