<?php
/**
 * Time manipulation during testing methods
 * copy from lib/Cake/TestSuite/CakeTestSuiteDispatcher.php
 */
class TestTimeHelper {
	/**
	 * Sets a static timestamp
	 *
	 * @param bool $reset to set new static timestamp.
	 * @return int timestamp
	 */
	public static function time($reset = false) {
		static $now;
		if ($reset || !$now) {
			$now = time();
		}
		return $now;
	}

	/**
	 * Returns formatted date string using static time
	 * This method is being used as formatter for created, modified and updated fields in Model::save()
	 *
	 * @param string $format format to be used.
	 * @return string formatted date
	 */
	public static function date($format) {
		return date($format, static::time());
	}

}
