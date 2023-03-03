<?php

class Auth extends Controller
{

  public $data = array();
  public $model_home;



  public function __construct()
  {
    # code...

    global $site_status;
    if ($site_status != 2) {
      require_once 'app/views/error/503.php';
      die();
    }


    $this->model_home = $this->model('AuthModel');
    if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
      header('Location: ' . BASE_URL('dashboard'));
      exit();
    }


    $this->data['type'] = 'auth';
    $this->data = array_merge($this->data, $this->model_home->data);
  }

  public function login()
  {
    # code...
    $this->model_home->login();
    $this->data['content'] = 'auth/login';
    $this->data['page_target'] = 'login';
    $this->data['page_title'] = 'Đăng nhập';
    $this->data = array_merge($this->data, $this->model_home->data);
    $this->render('layouts/auth', $this->data);
  }

  public function register()
  {
    # code...
    $this->model_home->register();
    $this->data['content'] = 'auth/register';
    $this->data['page_target'] = 'register';
    $this->data['page_title'] = 'Đăng ký';
    $this->data = array_merge($this->data, $this->model_home->data);
    $this->render('layouts/auth', $this->data);
  }
  public function resetpass()
  {
    # code...
    $this->model_home->resetpass();
    $this->data['content'] = 'auth/resetpass';
    $this->data['page_target'] = 'resetpass';
    $this->data['page_title'] = 'Quên mật khẩu';
    $this->data = array_merge($this->data, $this->model_home->data);
    $this->render('layouts/auth', $this->data);
  }
}
