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

class IndexController extends \ThreadCraft\Controllers\BaseController {
    protected static $model;

    public function __construct() {
        self::$model = new \ThreadCraft\Models\IndexModel();
    }

    public function index() {
        self::output(self::$model->getSystemHealth());
    }
}