<?php

class Home extends Controller
{

  public $data = array();
  public $model_home;



  public function __construct()
  {
    # code...
    if (empty($_SESSION['access_token']) || !isset($_SESSION['access_token'])) {
      header('Location: ' . BASE_URL('admin/auth/login'));
      exit();
    }
    $this->data['type'] = 'admin';
    $this->data['page_parent'] = 'admin';
    $this->model_home = $this->model('admin/HomeModel');
    $this->data = array_merge($this->data, $this->model_home->data);
  }

  public function index()
  {
    # code...

    $this->model_home->index();
    $this->data['page_title'] = 'Trang chủ';
    $this->data['content'] = 'admin/index';
    $this->data['page_target'] = 'admin/index';
    $this->data = array_merge($this->data, $this->model_home->data);
    $this->render('layouts/admin/home', $this->data);
  }

  public function site()
  {
    # code...

    $this->model_home->site();
    $this->data['page_title'] = 'Hệ thống';
    $this->data['content'] = 'admin/manager/site';
    $this->data['page_target'] = 'admin/site';
    $this->data = array_merge($this->data, $this->model_home->data);
    $this->render('layouts/admin/home', $this->data);
  }

  public function co_so()
  {
    # code...

    $this->model_home->co_so();
    $this->data['page_title'] = 'Cơ sở';
    $this->data['content'] = 'admin/manager/co_so';
    $this->data['page_target'] = 'admin/co_so';
    $this->data = array_merge($this->data, $this->model_home->data);
    $this->render('layouts/admin/home', $this->data);
  }

  public function account()
  {
    # code...

    $access = $this->model_home->get_row("SELECT access FROM `admin` WHERE access_token = '" . $_SESSION['access_token'] . "' ")['access'];

    if ($access != 999) {
      error('500');
      die();
    }

    $this->model_home->account();
    $this->data['page_title'] = 'Tài khoản';
    $this->data['content'] = 'admin/manager/account';
    $this->data['page_target'] = 'account';
    $this->data = array_merge($this->data, $this->model_home->data);
    $this->render('layouts/admin', $this->data);
  }


  public function teachers()
  {
    # code...

    $this->model_home->teachers();
    $this->data['page_title'] = 'Giáo viên';
    $this->data['content'] = 'admin/teachers';
    $this->data['page_target'] = 'admin/teachers';
    $this->data = array_merge($this->data, $this->model_home->data);
    $this->render('layouts/admin/home', $this->data);
  }
}
