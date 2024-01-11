# Geolite2

Проект нужен для удобного подключения БД geolite2 к вашему проекту через composer.

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
