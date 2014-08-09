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
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(new PhpSessionStorage());
    }
}
