<?php
/**
 * Bootstrap for phpunit command
 */

if (!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}
require_once __DIR__ . DS . 'bootstrap' . DS . 'cake_dot_php.php';
require_once __DIR__ . DS . 'bootstrap' . DS . 'cake_test_suite_const.php';

/*
 * Classes that can be used without declaring App::uses()
 */
App::uses('ClassRegistry', 'Utility');
App::uses('CakeTestCase', 'TestSuite');
App::uses('CakeTestSuite', 'TestSuite');
App::uses('ControllerTestCase', 'TestSuite');
App::uses('CakeTestModel', 'TestSuite/Fixture');

set_error_handler(new \PHPUnit\Util\ErrorHandler(true, true, true, true));
