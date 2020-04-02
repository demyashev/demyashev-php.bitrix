<?php

require __DIR__ . '/../vendor/autoload.php';

$url = $_POST['url'];

/** @var \Demyashev\Bitrix\Core $bitrix */
$bitrix = new Demyashev\Bitrix\Core($url);

/** @var \Demyashev\Bitrix\Module\Profile $profile */
$profile = $bitrix->getModule('profile');

$user = $profile->profile();

echo json_encode([
    'id' => $user->getId(),
    'admin' => $user->getAdmin(),
    'name' => $user->getName(),
    'last_name' => $user->getLastName(),
    'personal_gender' => $user->getPersonalGender(),
    'personal_photo' => $user->getPersonalPhoto(),
    'time_zone' => $user->getTimeZone(),
    'time_zone_offset' => $user->getTimeZoneOffset(),
]);