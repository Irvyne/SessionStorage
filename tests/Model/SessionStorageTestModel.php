<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

namespace Tests\Irvyne\SessionStorage\Model;

use Irvyne\SessionStorage\Model\SessionStorageInterface;

/**
 * Class SessionStorageTestModel
 * @package Tests\Irvyne\SessionStorage\Model
 */
abstract class SessionStorageTestModel extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Irvyne\SessionStorage\Model\SessionStorageInterface
     */
    protected $session;

    /**
     * Constructor (Dependency Injection)
     *
     * @param SessionStorageInterface $session
     */
    public function __construct(SessionStorageInterface $session)
    {
        $this->session = $session;
    }

    public function testSetReturn()
    {
        $key = $this->getHash();
        $value = $this->getHash();

        $this->assertEquals([$key => $value], $this->session->set($key, $value));
    }

    public function testGetExistReturn()
    {
        $key = $this->getHash();
        $value = $this->getHash();
        $this->session->set($key, $value);

        $this->assertEquals($value, $this->session->get($key));
    }

    public function testGetNotExistReturn()
    {
        $this->assertNull($this->session->get($this->getHash()));
    }

    public function testExistTrue()
    {
        $key = $this->getHash();
        $this->session->set($key, true);

        $this->assertTrue($this->session->exists($key));
    }

    public function testExistFalse()
    {
        $this->assertFalse($this->session->exists($this->getHash()));
    }

    /**
     * @return string
     */
    protected function getHash()
    {
        return sha1(uniqid(mt_rand(), true));
    }
}
