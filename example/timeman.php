<?php

require __DIR__ . '/../vendor/autoload.php';

$url = $_POST['url'];

$action = $_POST['action'];

/** @var \Demyashev\Bitrix\Core $bitrix */
$bitrix = new Demyashev\Bitrix\Core($url);

/** @var \Demyashev\Bitrix\Module\Timeman $timeman */
$timeman = $bitrix->getModule('timeman');

switch ($action) {
    case 'open':
        $worktime = $timeman->open();
        break;

    case 'pause':
        $worktime = $timeman->pause();
        break;

    case 'close':
        $worktime = $timeman->close();
        break;

    case 'status':
        $worktime = $timeman->status();
        break;
}

$settings = $timeman->settings();

echo json_encode([
    'status' => $worktime->getStatus(),
    'duration' => $worktime->getDuration(),
    'time_start' => $worktime->getTimeStart() ? date('d.m.Y H:i:s', strtotime($worktime->getTimeStart())) : '',
    'time_finish' => $worktime->getTimeFinish() ? date('d.m.Y H:i:s', strtotime($worktime->getTimeFinish())) : '',
    'time_leaks' => $worktime->getTimeLeaks(),

    'admin' => $settings->getAdmin(),
    'uf_timeman' => $settings->getUfTimeman(),
    'uf_tm_free' => $settings->getUfTmFree(),
    'uf_tm_max_start' => $settings->getUfTmMaxStart(),
    'uf_tm_min_finish' => $settings->getUfTmMinFinish(),
    'uf_tm_min_duration' => $settings->getUfTmMinDuration(),
    'uf_tm_allowed_delta' => $settings->getUfTmAllowedDelta()
]);