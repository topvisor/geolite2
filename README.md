# Geolite2

Проект нужен для удобного подключения geolite2 к вашему проекту через composer. Это может быть особенно полезно вместе с [GeoIP2 PHP API](https://github.com/maxmind/GeoIP2-php)

# Установка

Используйте [composer](https://getcomposer.org/) для установки.

composer.json:
```json
{
    "require": {
        "topvisor/geolite2": "x.x.x"
    }
}
```

где x.x.x - выбранная вами версия composer пакета.

# Пример использования базы данных для поиска информации о городе по ip

```php
var_dump(Topvisor\Geolite2\Geolite2::city($ip));
```

Информация, полученная о городе по $ip, будет выведена на экран.

# Базовые методы

* city(string $ip) - получить объект GeoIp2\Model\City, содержащий информацию о городе, по ip, который в нем расположен

# Лицензия
geolite2 - это open-source проект, и он распространяется под лицензией [MIT](http://choosealicense.com/licenses/mit/)

Проект включает в себя данные GeoLite, созданные MaxMind.
<a href="http://www.maxmind.com">http://www.maxmind.com</a>.
