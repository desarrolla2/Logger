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

namespace Desarrolla2\Logger\Adapter;

/**
 * 
 * Description of AdapterInterface
 *
 * @author : Daniel González <daniel.gonzalez@freelancemadrid.es>
 * @file : AdapterInterface.php , UTF-8
 * @date : Sep 8, 2012 , 5:20:57 PM
 */
interface AdapterInterface
{

    /**
     * @param string $key
     */
    public function isValidOption($key);

    /**
     * Log text
     * 
     * @param string $text
     * @param string $logLevel
     */
    public function log($message, $logLevel);

    /**
     * @param string $key
     * @param string $value
     */
    public function setOption($key, $value);
}
