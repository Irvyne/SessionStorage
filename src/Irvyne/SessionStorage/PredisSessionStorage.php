<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

namespace Irvyne\SessionStorage;

use Irvyne\SessionStorage\Model\SessionStorageInterface;
use Irvyne\SessionStorage\Model\SingletonPatternTrait;
use Predis\Client;

/**
 * Class RedisSessionStorage
 * @package Irvyne\SessionStorage
 */
class PredisSessionStorage implements SessionStorageInterface
{
    use SingletonPatternTrait;

    /**
     * @var Client
     */
    protected $client;

    /**
     * Constructor for Singleton Pattern
     */
    protected function init()
    {
        $this->client = new Client();
    }

    /**
     * {@inheritdoc}
     */
    public function get($key)
    {
        return $this->exists($key) ? $this->client->get($key) : null;
    }

    /**
     * {@inheritdoc}
     */
    public function set($key, $value)
    {
        $this->client->set($key, $value);

        return [$key => $value];
    }

    /**
     * {@inheritdoc}
     */
    public function getAll()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function exists($key)
    {
        return $this->client->exists($key);
    }
}
