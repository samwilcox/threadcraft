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

namespace ThreadCraft\Controllers;

class BaseController {
    protected static $vars = [];

    protected static function output($arr) {
        $json = \json_encode($arr);
        \ThreadCraft\Output\Output::i()->sendJSON($json);
    }
}