<?php
require_once __DIR__."/vendor/autoload.php";
require_once "console/test.php";

use Symfony\Component\Console\Application;

$application = new Application();

// ... register commands

$application->add(new \AppBundle\Command\CreateUserCommand());
$application->run();
