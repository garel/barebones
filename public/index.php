<?php

use Parsec\Kernel\Kernel;
use Parsec\Controller\ContentController;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

include __DIR__."/../app/Kernel/Kernel.php";

$kernel = new Kernel();

$helloWorld = $kernel->getContainer()->get(ContentController::class);
$helloWorld->index();
