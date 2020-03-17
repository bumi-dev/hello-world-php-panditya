<?php

/**
 * Hello World
 *
 * @author   Panditya A. Putra <me@panditya.com>
 */

define('HELLO_WORLD_START', microtime(true));

require_once 'HelloWorld.php';

$app = new HelloWorld();

$app->printText();

?>
