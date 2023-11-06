<?php
use SLiMS\Application;
use SLiMS\Kernel;
use SLiMS\Http\Request;

require __DIR__ . '/../vendor/autoload.php';

$kernel = new Kernel($app = Application::getInstance());
$kernel->boot(function($kernel){
    // hooking your code here
    // $kernel->registerHookBeforeBoot(fn() => // code here);
    // $kernel->registerHookBoot(fn() => // code here);
});

$kernel->handle(Request::capture())->send();
