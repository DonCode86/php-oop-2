<?php
require_once __DIR__ . '/classes/Food.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/RegisteredUser.php';
require_once __DIR__ . '/classes/CreditCard.php';

$food = new Food('Croccantini', 10.20, 10, 'gatto', '2022-10-10');


$user = new User('Daniele', 'Ciccarelli', 'daniele.ciccarelli@gmail.com');
$registered_user = new RegisteredUser('Erika', 'Ciccarelli', 'erika.ciccarelli@gmail.com');

try {
    $visa = new CreditCard('0000 0000 0000 0000', '2022-10-10', 'visa', 'Daniele', 'Ciccarelli', 123);
    $user->setCreditCard($visa);
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $amex = new CreditCard('1111 1111 1111 1111', '2022-01-10', 'mastercard', 'Daniele', 'Ciccarelli', 123);
    $registered_user->setCreditCard($amex);
} catch (Exception $e) {
    echo $e->getMessage();
}

var_dump($user, $registered_user);