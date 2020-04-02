<?php

require __DIR__ . '/vendor/autoload.php';

$url = "https://example.bitrix24.ru/rest/0/example/profile/";

/** @var \Demyashev\Bitrix\Core $bitrix */
$bitrix = new Demyashev\Bitrix\Core($url);

/** @var \Demyashev\Bitrix\Module\Profile $profile */
$profile = $bitrix->getModule('profile');

/** @var \Demyashev\Bitrix\Model\Profile */
# $user = $profile->profile();

/** @var \Demyashev\Bitrix\Module\Timeman $timeman */
$timeman = $bitrix->getModule('timeman');


$timemanRequest = new \Demyashev\Bitrix\Model\Timeman\Request(['USER_ID' => $bitrix->getUserId()]);
$timemanRequest->setUserId($bitrix->getUserId());

/** @var \Demyashev\Bitrix\Model\Timeman\Response\Worktime\Status $timemanStatus */
$timemanStatus = $timeman->status();
$timemanStatus = $timeman->status($timemanRequest);

# $timemanPause = $timeman->pause();

# $timemanOpen = $timeman->open();

# $timemanClose = $timeman->close();

# $timemanSettings = $timeman->settings();

var_dump($timemanStatus);