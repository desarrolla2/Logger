<?php

/**
 * This file is part of the Logger proyect.
 *
 * Description of AdapterNotSetException
 *
 * @author : Daniel González <daniel.gonzalez@freelancemadrid.es>
 * @file : AdapterNotSetException.php , UTF-8
 * @date : Sep 6, 2012 , 12:38:54 AM
 */

namespace Desarrolla2\Logger\Exception;

class AdapterNotSetException extends \Exception
{

    public function __construct($message, $code, $previous)
    {
        $_message = 'Adapter not set';
        if ($message) {
            $_message .= ' ( ' . $message . ' )';
        }
        parent::__construct($_message, $code, $previous);
    }

}
