<?php

$routes[''] = 'teacher';
$routes['default_controller'] = 'teacher';
$routes['dashboard'] = 'teacher';



//Auth  
// $routes['login'] = 'auth/login';
// $routes['register'] = 'auth/register';
// $routes['reset-pasword'] = 'auth/resetpass'; 
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
$routes['lich-thi'] = 'teacher/lich_thi';


// Sinh viên
$routes['sinh-vien/sinh-vien-gioi'] = 'teacher/sv_gioi';
$routes['sinh-vien/sinh-vien-yeu'] = 'teacher/sv_yeu';

$routes['tao-bang-diem'] = 'teacher/tao_bang_diem';

// Tiện ích

$routes['tien-ich/thanh-ngu'] = 'teacher/thanh_ngu';
$routes['tien-ich/lien-ket'] = 'teacher/links';

$routes['profile'] = 'teacher/profile';
