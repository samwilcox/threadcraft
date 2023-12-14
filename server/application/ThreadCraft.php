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

namespace ThreadCraft;

class Application {
    public static function run() {
        \ignore_user_abort(true);
        \date_default_timezone_set('UTC');
        \spl_autoload_register('self::autoloader', true, true);

        \ThreadCraft\Core\Request::i();

        $controller = isset(\ThreadCraft\Core\Request::i()->controller) ? \ucfirst(\ThreadCraft\Core\Request::i()->controller) : 'index';
        $controller = $controller . 'Controller';
        $controllerNs = '\\ThreadCraft\\Controllers\\' . $controller;
        $action = isset(\ThreadCraft\Core\Request::i()->action) ? \ucfirst(\ThreadCraft\Core\Request::i()->action) : 'index';

        $obj = new $controllerNs();
        $obj->$action();

        \session_write_close();
    }

    public static function autoloader($className) {
        $bits = \explode('\\', $className);
        $class = \array_pop($bits);

        \array_shift($bits);

        $path = \realpath(\dirname(__FILE__) . '/' . \str_replace('\\', '/', \implode('\\', $bits)) . '/' . $class . '.php');

        if (\strlen($path) > 0) {
            require_once ($path);
        }
    }

    protected static function request() { return \ThreadCraft\Core\Request::i(); }
}