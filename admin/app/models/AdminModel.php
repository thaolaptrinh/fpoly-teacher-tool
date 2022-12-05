<?php

class AdminModel extends Model
{
  public $data = array();



  public function __construct()
  {
    # code...

  }


  public function index()
  {
    # code...
    $this->data = [
      'site_status' => $this->settings('site_status'),
      'teacher' => [
        'total' => $this->num_rows("SELECT * FROM `teachers`"),
        'now' => $this->num_rows("SELECT * FROM `teachers` WHERE DATE_FORMAT(`register_date`, '%Y-%m-%d')  = CURDATE()")
      ]
    ];
  }
}
