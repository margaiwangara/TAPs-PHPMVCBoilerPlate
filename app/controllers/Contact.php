<?php

class Contact extends Controller
{
  public function Index()
  {
    echo 'contact/index';
  }

  public function Phone($phoneNumber = '')
  {
    echo $phoneNumber;
  }

  public function Fax($faxNumber = '')
  {
    echo $faxNumber;
  }
}
