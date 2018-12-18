<?php

class Home extends Controller
{
  public function Index($name = '')
  {
    $db = $this->model('User');

    echo $db->name = 'Margai';


  }

  public function test()
  {
    echo 'test';
  }
}
