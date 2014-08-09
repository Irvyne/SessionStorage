<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

namespace Irvyne\SessionStorage;

use Irvyne\SessionStorage\Model\SessionStorageInterface;

/**
 * Class PhpSessionStorage
 * @package Irvyne\SessionStorage
 */
class PhpSessionStorage implements SessionStorageInterface
{
    /**
     * Constructor
     */
    public function __construct()
    {
        if (PHP_SESSION_DISABLED === session_status()) throw new \Exception('PHP Session is DISABLED!');

        PHP_SESSION_ACTIVE === session_status() ?: session_start();
    }

    /**
     * {@inheritdoc}
     */
    public function get($key)
    {
        return $this->exists($key) ? $_SESSION[$key] : null;
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
    public function getAll()
    {
        return $_SESSION;
    }

    /**
     * {@inheritdoc}
     */
    public function exists($key)
    {
        return isset($_SESSION[$key]);
    }
}
