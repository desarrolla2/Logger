<?php

/**
 * This file is part of the Logger proyect.
 * 
 * Copyright (c)
 * Daniel González <daniel.gonzalez@freelancemadrid.es> 
 * 
 * This source file is subject to the MIT license that is bundled
 * with this package in the file LICENSE.
 */

require_once  __DIR__ .'/../vendor/autoload.php';
use Desarrolla2\Logger\Logger;
use Desarrolla2\Logger\Adapter\File;

$logger = new Logger;
$logger->setAdapter(new File);


$logger->setOption('file', '/tmp/text.txt');
$logger->log('prueba', 1);