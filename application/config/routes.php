<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Untuk routes Admin kepada mahasiswa
$route['admin/hapusmhs/(:any)'] = 'admin/hapusmhs/$1';
$route['admin/updatemhs/(:any)'] = 'admin/updatemhs/$1';
$route['admin/createmhs']        = 'admin/createmhs';
$route['admin'] = 'admin';

// Untuk router Admin kepada dosen
$route['admin/hapusdosen/(:any)'] = 'admin/hapusdosen/$1';
$route['admin/updatedosen/(:any)'] = 'admin/updatedosen/$1';
$route['admin/createmhs']        = 'admin/createmhs';
$route['admin'] = 'admin';


$route['default_controller'] = 'beranda';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
