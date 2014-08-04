<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

namespace Irvyne\SessionStorage\Model;

/**
 * Trait SingletonPattern
 */
trait SingletonPatternTrait
{
    /**
     * @var object
     */
    protected static $instance;

    /**
     * @return object|static
     */
    final public static function getInstance()
    {
        return isset(static::$instance) ? static::$instance : static::$instance = new static;
    }

    /**
     * Avoid constructor to be launched outside of the class
     */
    final private function __construct()
    {
        $this->init();
    }

    /**
     * Replace __construct() method
     */
    protected function init() {}

    /**
     * Avoid wakeup
     *
     * @return null
     */
    final private function __wakeup()
    {
        return null;
    }

    /**
     * Avoid clone
     *
     * @return null
     */
    final private function __clone()
    {
        return null;
    }
} 