<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require 'Trait/SingletonPattern.php';
require 'SessionStorageInterface.php';
require 'PhpSessionStorage.php';

$session = PhpSessionStorage::getInstance();

