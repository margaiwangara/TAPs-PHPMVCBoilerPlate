<?php

class Home extends Controller
{
  public function Index($name = '')
  {
    $db = $this->model('User');

    $name = "Luke";

    return $this->view('home/sample', ['name' => $name]);


  }

  public function test()
  {
    echo 'test';
  }
}
