<?php
/**
 * const only copy from lib/Cake/TestSuite/CakeTestSuiteDispatcher.php
 */

/**
* Path to the tests directory of the app.
*/
if (!defined('TESTS')) {
define('TESTS', APP . 'Test' . DS);
}

/**
* Path to the test cases directory of CakePHP.
*/
define('CORE_TEST_CASES', CAKE . 'Test' . DS . 'Case');

/**
* Path to the test cases directory of the app.
*/
if (!defined('APP_TEST_CASES')) {
define('APP_TEST_CASES', TESTS . 'Case');
}
