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

namespace ThreadCraft\Output;

class Output extends \ThreadCraft\Application {
    protected static $instance;

    public static function i() {
        if (!self::$instance) self::$instance = new self;
        return self::$instance;
    }

    public static function sendJSON($json) {
        header('Content-Type: application/json');
        print $json;
    }
}