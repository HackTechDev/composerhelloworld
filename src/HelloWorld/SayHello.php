<?php

namespace HelloWorld;

use PHP_Timer;

class SayHello
{
    public static function world()
    {
        $timer = new PHP_Timer();
        $timer->start();
        return "Hello World\n" . $timer->resourceUsage() . "\n";
    }
}
