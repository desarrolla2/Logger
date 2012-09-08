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

use Desarrolla2\Logger\Adapter\AdapterInterface;

/**
 * 
 * Description of File
 *
 * @author : Daniel González <daniel.gonzalez@freelancemadrid.es> 
 * @file : File.php , UTF-8
 * @date : Sep 8, 2012 , 5:27:55 PM
 */
class File implements AdapterInterface
{

    protected $validOptions = array(
        'file'
    );

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->options = array(
            'file' => '/dev/null'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function isValidOption($key)
    {
        if (in_array($key, $this->validOptions)) {
            return true;
        }
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function log($message, $logLevel)
    {
        $line = '[' . date('Y-m-d') . '] [' . date('H:i:s') . '][' . $logLevel . ']' . $message;
        file_put_contents($this->options['file'], $line, FILE_APPEND);
    }

    /**
     * {@inheritdoc}
     */
    public function setOption($key, $value)
    {
        $this->options[$key] = $value;
    }

}
