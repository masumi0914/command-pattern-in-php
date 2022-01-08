<?php

namespace App\Invoker;

use App\Command\Interfaces\CommandInterface AS Command;

class Invoker
{
  private $commands;

  public function __construct()
  {
    $this->commands = [];
  }

  public function addCommand(Command $command)
  {
    $this->commands[] = $command;
  }

  public function undoCommand()
  {
    if (!empty($this->commands)) {
      array_pop($this->commands);
    }
  }

  public function execute()
  {
    if (!empty($this->commands)) {
      foreach ($this->commands as $command) {
        $command->execute();
      }
    }
  }
}