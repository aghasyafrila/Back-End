<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['hapus/(:num)'] = 'welcome/proseshapus/$1';
$route['editSiswa'] = 'welcome/editSiswa';
$route['edit/(:num)'] = 'welcome/kehalamanEdit/$1';
$route['tambahSiswa'] = 'welcome/prosesTambah';
$route['tambah_siswa'] = 'welcome/keHalamanTambah';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['welcome_message'] = 'ItemController/index';
$route['welcome_message/(:any)']['delete'] = "ItemController/delete/$1";