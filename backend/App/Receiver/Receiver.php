<?php

namespace App\Receiver;

class Receiver
{
  private $name;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function action()
  {
    echo sprintf('execute %s<br>', $this->getName());
  }
}