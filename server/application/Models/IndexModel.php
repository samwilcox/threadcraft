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

namespace ThreadCraft\Models;

class IndexModel extends \ThreadCraft\Models\BaseModel {
    private static $vars = [];

    public function getSystemHealth() {
        $test = ['Version' => '1.0', 'App' => 'ThreadCraft'];
        return $test;
    }
}