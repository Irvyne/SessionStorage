<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

namespace Tests\Irvyne\SessionStorage;

use Irvyne\SessionStorage\PhpSessionStorage;
use Tests\Irvyne\SessionStorage\Model\SessionStorageTestModel;

/**
 * Class PhpSessionStorageTest
 * @package Tests\Irvyne\SessionStorage
 */
class PhpSessionStorageTest extends SessionStorageTestModel
{
    /**
     * @var PhpSessionStorage
     */
    protected $session;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(new PhpSessionStorage());
    }

    public function testConstructMethod()
    {
        $this->assertEquals(PHP_SESSION_ACTIVE, session_status());
    }

    public function testMultipleConstructMethod()
    {
        $this->session->__construct();

        $this->assertEquals(PHP_SESSION_ACTIVE, session_status());
    }

    public function testGetAll()
    {
        $array = [];

        for ($i = 1; $i <= 10; $i++) {
            $key = $this->getHash();
            $value = $this->getHash();
            $array[$key] = $value;
            $this->session->set($key, $value);
        }

        $this->assertEquals($array, $this->session->getAll());
    }
}
