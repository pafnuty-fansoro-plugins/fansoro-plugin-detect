<?php

/**
 * Detect plugin for Morfy CMS
 *
 * @package    Morfy
 * @subpackage Plugins
 * @author     Pavel Belousov / pafnuty
 * @author     Romanenko Sergey / Awilum
 * @version    1.0.0
 * @license    https://github.com/pafnuty-morfy-plugins/morfy-plugin-detect/blob/master/LICENSE MIT
 *
 */

require_once 'classes/Mobile_Detect.php';

Action::add('before_page_rendered', function () {
	Detect::init();
});

class Detect {
	protected static $detect;

	public static function init() {
		static::$detect = new Mobile_Detect();
	}

	public static function isMobile($userAgent = null, $httpHeaders = null) {
		return static::$detect->isMobile($userAgent, $httpHeaders);
	}

	public static function isTablet($userAgent = null, $httpHeaders = null) {
		return static::$detect->isTablet($userAgent, $httpHeaders);
	}

	public static function getUserAgent() {
		return static::$detect->getUserAgent();
	}

	public static function isiPhone() {
		return static::$detect->isiPhone();
	}

	public static function isiPad() {
		return static::$detect->isiPad();
	}

	public static function isIOS() {
		return static::$detect->isIOS();
	}

	public static function isAndroid() {
		return static::$detect->isAndroid();
	}

	public static function isChrome() {
		return static::$detect->isChrome();
	}

	public static function isOpera() {
		return static::$detect->isOpera();
	}

	public static function isFirefox() {
		return static::$detect->isFirefox();
	}

	public static function isIE() {
		return static::$detect->isIE();
	}

	public static function is($key, $userAgent = null, $httpHeaders = null) {
		return static::$detect->is($key, $userAgent, $httpHeaders);
	}

	public static function mobileGrade() {
		return static::$detect->mobileGrade();
	}

}