<?php

class Admin extends Controller
{

  public $data = array();
  public $model_home;



  public function __construct()
  {
    # code...
    if (empty($_SESSION['access_token']) || !isset($_SESSION['access_token'])) {
      header('Location: ' . BASE_URL('login'));
      exit();
    }
    $this->data['target'] = 'admin';
    $this->model_home = $this->model('AdminModel');
    $this->data = array_merge($this->data, $this->model_home->data);
  }

  public function index()
  {
    # code...
    $this->model_home->index();
    $this->data['page_title'] = 'Trang chủ';
    $this->data['content'] = 'admin/index';
    $this->data = array_merge($this->data, $this->model_home->data);
    $this->render('layouts/admin', $this->data);
  }

  public function profile()
  {
    # code...
    $this->data['page_title'] = 'Thông tin cá nhân';
    $this->data['content'] = 'admin/profile';
    $this->data = array_merge($this->data, $this->model_home->data);
    $this->render('layouts/admin', $this->data);
  }
}
