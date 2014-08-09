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
     * @var $_SESSION
     */
    protected $session;

    /**
     * Constructor
     */
    public function __construct()
    {
        if (PHP_SESSION_DISABLED === session_status()) throw new \Exception('PHP Session is DISABLED!');

        PHP_SESSION_ACTIVE === session_status() ?: session_start();

        $this->session = &$_SESSION;
    }

    /**
     * {@inheritdoc}
     */
    public function get($key)
    {
        return $this->exists($key) ? $this->session[$key] : null;
    }

    /**
     * {@inheritdoc}
     */
    public function set($key, $value)
    {
        $this->session[$key] = $value;

        return [$key => $value];
    }

    /**
     * {@inheritdoc}
     */
    public function getAll()
    {
        return $this->session;
    }

    /**
     * {@inheritdoc}
     */
    public function exists($key)
    {
        return isset($this->session[$key]);
    }
}
