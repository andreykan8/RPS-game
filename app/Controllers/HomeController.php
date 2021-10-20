<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Processor\Processor;

class HomeController
{
    public function home()
    {
        return require_once __DIR__ . '/../Views/home.view.php';
    }

    public function choice()
    {
        $process = new Processor();
        $process->process();
        return require_once __DIR__ . '/../Views/home.view.php';
    }
}