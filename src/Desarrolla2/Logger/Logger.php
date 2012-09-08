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

use Desarrolla2\Logger\LoggerInterface;
use Desarrolla2\Logger\Adapter\AdapterInterface;

/**
 * 
 * Description of Logger
 *
 * @author : Daniel González <daniel.gonzalez@freelancemadrid.es> 
 */
class Logger implements LoggerInterface
{

    /**
     * @var \Desarrolla2\Logger\ExporterInterface;
     */
    protected $adapter = null;

    /**
     * @var array
     */
    protected $options = array();

    public function log($text, $logLevel)
    {
        $this->adapter->log($text, $logLevel);
    }

    /**
     * {@inheritdoc}
     */
    public function setAdapter(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * {@inheritdoc}
     */
    public function setOption($key, $value)
    {
        $key = $this->sanitizeOption($key);
        if ($this->getAdapter()->isValidOption($key)) {
            throw new Exception\OptionNotValidException('Option not valid ' . $key);
        }
        $this->options[$key] = $value;
        $this->getAdapter()->setOption($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function setOptions(array $options = array())
    {
        foreach ($options as $key => $value) {
            $this->setOption($key, $value);
        }
    }

    /**
     * Get the adapter
     *
     * @return type
     * @throws Exception\AdapterNotSetException
     */
    protected function getAdapter()
    {
        if ($this->adapter) {
            return $this->adapter;
        } else {
            throw new Exception\AdapterNotSetException();
        }
    }

    /**
     *
     * @param  string $option
     * @return string
     */
    protected function sanitizeOption($option)
    {
        return trim(strtolower((string) $option));
    }

}
