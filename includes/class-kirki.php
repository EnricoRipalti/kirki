<?php

/**
 * Class Kirki
 *
 * The main Kirki object
 */
class Kirki {

	/** @var Kirki The only instance of this class */
	public static $instance = null;

	/** @var string Version number */
	public static $version = '0.8.4';

	public $config  = null;
	public $fonts   = null;
	public $scripts = null;
	public $fields  = null;
	public $builder = null;

	/**
	 * Access the single instance of this class
	 * @return Kirki
	 */
	public static function get_instance() {
		if ( self::$instance==null ) {
			self::$instance = new Kirki();
		}
		return self::$instance;
	}

	/**
	 * Shortcut method to call the Field class
	 */
	public static function fields() {
		return self::get_instance()->fields;
	}

	/**
	 * Shortcut method to get the configuration of the single instance.
	 */
	public static function config() {
		return self::get_instance()->config;
	}

	/**
	 * Shortcut method to get the translation strings
	 */
	public static function i18n() {
		$config  = self::config();
		$options = $config->get_all();
		return $options['i18n'];
	}

	/**
	 * Shortcut method to get the font registry.
	 */
	public static function fonts() {
		return self::get_instance()->fonts;
	}

	/**
	 * Constructor is private, should only be called by get_instance()
	 */
	private function __construct() {


	}

}
