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

header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
header('Access-Control-Allow-Origin: *');

// error_reporting( E_ALL );
// ini_set( 'display_errors', true );
error_reporting( 0 );

define('ROOT_PATH', dirname(__FILE__) . '/');

require_once (ROOT_PATH . 'application/ThreadCraft.php');
\ThreadCraft\Application::run();