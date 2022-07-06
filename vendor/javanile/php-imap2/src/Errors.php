<?php

/*
 * This file is part of the PHP Input package.
 *
 * (c) Francesco Bianco <bianco@javanile.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Javanile\Imap2;

use Javanile\Imap2\ImapClient;

class Errors
{
    protected static $alerts = [];

    protected static $errors = [];

    public static function appendAlert($alert)
    {
        self::$alerts[] = $alert;
    }

    public static function appendError($error)
    {
        self::$errors[] = $error;
    }

    public static function alerts()
    {
        if (empty(self::$alerts)) {
            return false;
        }

        $return = self::$alerts;

        self::$alerts = [];

        return $return;
    }

    public static function errors()
    {
        if (empty(self::$errors)) {
            return false;
        }

        $return = self::$errors;

        self::$errors = [];

        return $return;
    }

    public static function lastError()
    {
        return false;
    }

    public static function invalidImapConnection($backtrace, $depth, $return)
    {
        $warning = 'Invalid IMAP connection parameter for '.$backtrace[$depth]['function'].'() '
                 . 'at '.$backtrace[$depth]['file']. ' on line '.$backtrace[$depth]['line'].'. Source code';

        trigger_error($warning, E_USER_WARNING);

        return $return;
    }
}
