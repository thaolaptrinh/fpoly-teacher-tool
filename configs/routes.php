<?php

$routes[''] = 'teacher';
$routes['default_controller'] = 'teacher';
$routes['dashboard'] = 'teacher';


//Auth  

$routes['auth/logout'] = 'teacher/logout';
$routes['auth/reset-password'] = 'auth/resetpass';

// Quản lý
$routes['danh-muc/khoa-hoc'] = 'teacher/khoa_hoc';
$routes['danh-muc/hoc-ky'] = 'teacher/hoc_ky';
$routes['danh-muc/mon-hoc'] = 'teacher/mon_hoc';
$routes['danh-muc/loai-lop'] = 'teacher/loai_lop';
$routes['danh-muc/loai-diem'] = 'teacher/loai_diem';
$routes['bang-diem'] = 'teacher/bang_diem';

// Lớp học
$routes['lich-day'] = 'teacher/lich_day';

// Tiện ích
$routes['tien-ich/thanh-ngu'] = 'teacher/thanh_ngu';
$routes['tien-ich/lien-ket'] = 'teacher/links';
$routes['profile'] = 'teacher/profile';


//Admin 
$routes['admin'] = 'admin/home';
$routes['admin/quan-ly/site'] = 'admin/home/site';
$routes['admin/quan-ly/co-so'] = 'admin/home/co_so';
$routes['admin/giao-vien'] = 'admin/home/teachers';
$routes['admin/quan-ly/account'] = 'admin/home/account';
