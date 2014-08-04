<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

namespace Irvyne\SessionStorage\Model;

/**
 * Interface SessionStorageInterface
 */
interface SessionStorageInterface
{
    /**
     * Get the value of the given key from Session
     *
     * @param  integer|string $key
     * @return mixed
     */
    public function get($key);

    /**
     * Set the value of the given key in Session
     *
     * @param  integer|string $key
     * @param  mixed          $value
     * @return mixed
     */
    public function set($key, $value);

    /**
     * Get all keys and values from Session
     *
     * @return array
     */
    public function getAll();

    /**
     * Test if the given key exists from Session
     *
     * @param  string $key
     * @return bool
     */
    public function exists($key);
}
