<?php

namespace App\Command;

use App\Command\Interfaces\CommandInterface;
use App\Receiver\Receiver;

class CommandC implements CommandInterface
{
  private $name = 'CommandC';
  private $receiver;

  public function __construct(Receiver $receiver)
  {
    $this->receiver = $receiver;
    $this->receiver->setName($this->name);
  }

  public function execute()
  {
    $this->receiver->action();
  }
}