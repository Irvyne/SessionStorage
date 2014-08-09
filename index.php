<?php
/**
 * Created by Thibaud BARDIN (Irvyne)
 * This code is under the MIT License (https://github.com/Irvyne/license/blob/master/MIT.md)
 */

use Irvyne\SessionStorage\PhpSessionStorage;

require __DIR__.'/vendor/autoload.php';

/** @var \Irvyne\SessionStorage\PhpSessionStorage $session */
$session = new PhpSessionStorage();

$key = 'banana';
$value = 'Juliette';

$session->set($key, $value);

echo 'The value of "'.$key.'" in session is: '.$session->get($key);
