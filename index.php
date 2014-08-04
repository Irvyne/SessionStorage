<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

require __DIR__.'/vendor/autoload.php';

/** @var \Irvyne\SessionStorage\PhpSessionStorage $session */
$session = \Irvyne\SessionStorage\PhpSessionStorage::getInstance();

$key = 'name';
$value = 'Thibaud';

$session->set($key, $value);

echo 'The value of "'.$key.'" in session is: '.$session->get($key);