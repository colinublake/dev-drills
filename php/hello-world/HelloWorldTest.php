<?php

declare(strict_types=1);

require_once __DIR__ . '/HelloWorld.php';

assert(helloWorld() === 'Hello, World!', 'says hello');

fwrite(STDOUT, "ok\n");
