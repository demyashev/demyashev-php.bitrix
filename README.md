# Bitrix PHP SDK for REST API

Библиотека для работы с входящими вебхуками Битрикс24.

# Модули

Реализованы следующие модули битрикса:

- `timeman` - учет рабочего времени

# Настройка

- на странице настроек `https://<project>.bitrix24.ru/marketplace/hook/` добавьте новый входящий вебхук.
- выставьте права (разделы), которыми вы будете пользоваться
- скопируйте (сохраните) ссылку на вебхук (формат: `https://<project>.bitrix24.ru/rest/<userId>/<token>/<module>/`)

# Описание

Все запросы к REST API на стороне Битрикс24 исполняются под `USER_ID` пользователя, полученного в `url` вебхука.

Способы инициализации запроса
-

Инициализировать запрос можно упрощенно:

```
/** @var \Demyashev\Bitrix\Model\Timeman\Response\Worktime\Status $timemanStatus */
$timemanStatus = $timeman->status();
```

либо передав объект запроса с (возможными) параметрами:

```
$timemanRequest = new \Demyashev\Bitrix\Model\Timeman\Request();
$timemanStatus = $timeman->status($timemanRequest);
```

Параметры запроса
-

Параметры передать в тело запроса API можно двумя способами:

```
$timemanRequest = new \Demyashev\Bitrix\Model\Timeman\Request(['USER_ID' => 140]);
$timemanStatus = $timeman->status($timemanRequest);
```

либо:

```
$timemanRequest = new \Demyashev\Bitrix\Model\Timeman\Request();
$timemanRequest->setUserId(140);
$timemanStatus = $timeman->status($timemanRequest);
```

# Примеры

### Получение основной информации текущего пользователя

```
<?php

require __DIR__ . '/vendor/autoload.php';

$url = "https://<project>.bitrix24.ru/rest/<userId>/<userToken>/profile/";

/** @var \Demyashev\Bitrix\Core $bitrix */
$bitrix = new Demyashev\Bitrix\Core($url);

/** @var \Demyashev\Bitrix\Module\Profile $profile */
$profile = $bitrix->getModule('profile');

/** @var \Demyashev\Bitrix\Model\Profile */
$user = $profile->profile();

var_dump($user);
```

### Получение информации о текущем статусе отслеживания рабочего времени

```
<?php

require __DIR__ . '/vendor/autoload.php';

$url = "https://<project>.bitrix24.ru/rest/<userId>/<userToken>/profile/";

/** @var \Demyashev\Bitrix\Core $bitrix */
$bitrix = new Demyashev\Bitrix\Core($url);

/** @var \Demyashev\Bitrix\Module\Timeman $timeman */
$timeman = $bitrix->getModule('timeman');

/** @var \Demyashev\Bitrix\Model\Timeman\Response\Worktime\Status $timemanStatus */
$timemanStatus = $timeman->status();

var_dump($timemanStatus);
```

# Документация

Больше примеров смотрите [здесь](/example).

Структура ответов по каждому методу от Битрикс24 находится [здесь](/doc).

Официальная документация [здесь](https://dev.1c-bitrix.ru/rest_help/index.php).
