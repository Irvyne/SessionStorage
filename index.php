<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

use Irvyne\SessionStorage\PhpSessionStorage;
use Irvyne\SessionStorage\PredisSessionStorage;

require __DIR__.'/vendor/autoload.php';

/** @var \Irvyne\SessionStorage\PhpSessionStorage $session */
$session = PredisSessionStorage::getInstance();

$key = 'name';
$value = 'Thibaud';

$session->set($key, $value);

echo 'The value of "'.$key.'" in session is: '.$session->get($key);
