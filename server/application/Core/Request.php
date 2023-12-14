<?php

/**
 * T H R E A D  C R A F T
 * Bulletin board system using React with PHP
 * By Sam Wilcox <sam@threadcraft.com>
 * 
 * https://www.threadcraft.com
 * 
 * See the user-end license agreement at:
 * https://license.threadcraft.com
 */

namespace ThreadCraft\Core;

class Request extends \ThreadCraft\Application {
    protected static $instance;
    protected static $incoming = [];

    public function __construct() {
        self::parseRequest();
    }

    public static function i() {
        if (!self::$instance) self::$instance = new self;
        return self::$instance;
    }

    public static function parseRequest() {
        foreach ($_GET as $k => $v) self::$incoming[$k] = \filter_var($v, FILTER_UNSAFE_RAW);
        foreach ($_POST as $k => $v) self::$incoming[$k] = \filter_var($v, FILTER_UNSAFE_RAW);

        
    }
}