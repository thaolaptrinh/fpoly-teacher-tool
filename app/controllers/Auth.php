<?php

class Auth extends Controller
{

  public $data = array();
  public $model_home;



  public function __construct()
  {
    # code...
    if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
      header('Location: ' . BASE_URL('dashboard'));
      exit();
    }


    $this->model_home = $this->model('AuthModel');
    $this->data = array_merge($this->data, $this->model_home->data);
  }

  public function login()
  {
    # code...
    $this->model_home->login();
    $this->data = [
      'page_target' => 'auth',
      'target' => 'auth/login',
      'content' => 'auth/login',
      'page_title' => 'Đăng nhập',
    ];

    $this->data = array_merge($this->data, $this->model_home->data);
    $this->render('layouts/auth', $this->data);
  }

  public function register()
  {
    # code...
    $this->model_home->register();
    $this->data = [
      'page_target' => 'auth',
      'target' => 'auth/register',
      'content' => 'auth/register',
      'page_title' => 'Đăng ký',
    ];
    $this->data = array_merge($this->data, $this->model_home->data);
    $this->render('layouts/auth', $this->data);
  }
  public function resetpass()
  {
    # code...
    $this->model_home->resetpass();
    $this->data = [
      'page_target' => 'auth',
      'target' => 'auth/resetpassword',
      'content' => 'auth/resetpass',
      'page_title' => 'Quên mật khẩu',
    ];
    $this->data = array_merge($this->data, $this->model_home->data);
    $this->render('layouts/auth', $this->data);
  }
}
