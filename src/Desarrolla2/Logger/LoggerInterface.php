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

namespace Desarrolla2\Logger;
use Desarrolla2\Logger\Adapter\AdapterInterface;

/**
 * 
 * Description of LoggerInterface
 *
 * @author : Daniel González <daniel.gonzalez@freelancemadrid.es> 
 */
interface LoggerInterface
{

    /**
     * Log text
     * 
     * @param string $text
     * @param string $logLevel
     */
    public function log($text, $logLevel);

    /**
     * Set adapter
     *
     * @param \Desarrolla2\Exporter\Adapter\AdapterInterface $adapter
     */
    public function setAdapter(AdapterInterface $adapter);

    /**
     * Set option
     * 
     * @param string $key
     * @param string $value
     */
    public function setOption($key, $value);

    /**
     * Set options
     * 
     * @param array $options
     */
    public function setOptions(array $options = array());
}
