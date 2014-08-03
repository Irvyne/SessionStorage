<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

/**
 * Class PhpSessionStorage
 * Pattern: Singleton Pattern
 */
class PhpSessionStorage implements SessionStorageInterface
{
    use SingletonPattern;

    /**
     * Constructor for Singleton Pattern
     */
    protected function init()
    {
        session_start();
    }

    /**
     * {@inheritdoc}
     */
    public function get($key)
    {
        return !empty($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    /**
     * {@inheritdoc}
     */
    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
        return [$key => $value];
    }

    /**
     * {@inheritdoc}
     */
    public function exist($key)
    {
        return isset($_SESSION[$key]);
    }
} 