[Документация](https://dev.1c-bitrix.ru/rest_help/timeman/base/timeman_status.php)

---

# timeman.status

```
object(stdClass)#6 (13) {
  ["STATUS"]=>
  string(6) "OPENED"
  ["TIME_START"]=>
  string(25) "2020-03-25T08:36:39+03:00"
  ["TIME_FINISH"]=>
  NULL
  ["DURATION"]=>
  string(8) "00:00:00"
  ["TIME_LEAKS"]=>
  string(8) "00:00:00"
  ["ACTIVE"]=>
  bool(true)
  ["IP_OPEN"]=>
  string(13) "94.25.229.190"
  ["IP_CLOSE"]=>
  string(0) ""
  ["LAT_OPEN"]=>
  int(0)
  ["LON_OPEN"]=>
  int(0)
  ["LAT_CLOSE"]=>
  int(0)
  ["LON_CLOSE"]=>
  int(0)
  ["TZ_OFFSET"]=>
  int(10800)
}
```

# timeman.pause

```
object(stdClass)#6 (13) {
  ["STATUS"]=>
  string(6) "PAUSED"
  ["TIME_START"]=>
  string(25) "2020-03-25T08:36:39+03:00"
  ["TIME_FINISH"]=>
  string(25) "2020-03-25T16:39:18+03:00"
  ["DURATION"]=>
  string(8) "00:00:00"
  ["TIME_LEAKS"]=>
  string(8) "00:00:00"
  ["ACTIVE"]=>
  bool(true)
  ["IP_OPEN"]=>
  string(13) "94.25.229.190"
  ["IP_CLOSE"]=>
  string(0) ""
  ["LAT_OPEN"]=>
  int(0)
  ["LON_OPEN"]=>
  int(0)
  ["LAT_CLOSE"]=>
  int(0)
  ["LON_CLOSE"]=>
  int(0)
  ["TZ_OFFSET"]=>
  int(10800)
}
```

# timeman.open

```
object(stdClass)#6 (13) {
  ["STATUS"]=>
  string(6) "OPENED"
  ["TIME_START"]=>
  string(25) "2020-03-25T08:36:39+03:00"
  ["TIME_FINISH"]=>
  NULL
  ["DURATION"]=>
  string(8) "00:00:00"
  ["TIME_LEAKS"]=>
  string(8) "00:06:31"
  ["ACTIVE"]=>
  bool(true)
  ["IP_OPEN"]=>
  string(13) "94.25.229.190"
  ["IP_CLOSE"]=>
  string(0) ""
  ["LAT_OPEN"]=>
  int(0)
  ["LON_OPEN"]=>
  int(0)
  ["LAT_CLOSE"]=>
  int(0)
  ["LON_CLOSE"]=>
  int(0)
  ["TZ_OFFSET"]=>
  int(10800)
}
```

# timeman.close

```
object(stdClass)#6 (13) {
  ["STATUS"]=>
  string(6) "CLOSED"
  ["TIME_START"]=>
  string(25) "2020-03-27T09:27:00+03:00"
  ["TIME_FINISH"]=>
  string(25) "2020-03-27T12:42:12+03:00"
  ["DURATION"]=>
  string(8) "03:15:12"
  ["TIME_LEAKS"]=>
  string(8) "00:00:00"
  ["ACTIVE"]=>
  bool(true)
  ["IP_OPEN"]=>
  string(14) "194.24.240.244"
  ["IP_CLOSE"]=>
  string(14) "194.24.240.244"
  ["LAT_OPEN"]=>
  int(0)
  ["LON_OPEN"]=>
  int(0)
  ["LAT_CLOSE"]=>
  int(0)
  ["LON_CLOSE"]=>
  int(0)
  ["TZ_OFFSET"]=>
  int(10800)
}

```

# timeman.settings

```
object(stdClass)#6 (7) {
  ["UF_TIMEMAN"]=>
  bool(true)
  ["UF_TM_FREE"]=>
  bool(false)
  ["UF_TM_MAX_START"]=>
  string(8) "09:15:00"
  ["UF_TM_MIN_FINISH"]=>
  string(8) "17:45:00"
  ["UF_TM_MIN_DURATION"]=>
  string(8) "08:00:00"
  ["UF_TM_ALLOWED_DELTA"]=>
  string(8) "00:15:00"
  ["ADMIN"]=>
  bool(true)
}
```