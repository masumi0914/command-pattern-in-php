<?php

require_once 'vendor/autoload.php';

use App\Command\CommandA;
use App\Command\CommandB;
use App\Command\CommandC;
use App\Invoker\Invoker;
use App\Receiver\Receiver;

$invoker = new Invoker();

$invoker->addCommand(new CommandA(new Receiver()));
$invoker->addCommand(new CommandB(new Receiver()));
$invoker->addCommand(new CommandC(new Receiver()));

$invoker->execute();
$invoker->undoCommand();
$invoker->execute();