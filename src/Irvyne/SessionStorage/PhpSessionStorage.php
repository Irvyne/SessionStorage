<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

namespace Irvyne\SessionStorage;

use Irvyne\SessionStorage\Model\SessionStorageInterface;
use Irvyne\SessionStorage\Model\SingletonPatternTrait;

/**
 * Class PhpSessionStorage
 */
class PhpSessionStorage implements SessionStorageInterface
{
    use SingletonPatternTrait;

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
    public function getAll()
    {
        return $_SESSION;
    }

    /**
     * {@inheritdoc}
     */
    public function exist($key)
    {
        return isset($_SESSION[$key]);
    }
} 