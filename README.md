# Geolite2

База данных, содержащая информацию о городах.

# Установка

Используйте [composer](https://getcomposer.org/) для установки.

composer.json:
```json
{
    "repositories":[
		{
			"url":"https://github.com/topvisor/geolite2.git",
			"type":"git"
		}
	],
    "require": {
        "topvisor/geolite2": "~1.0.0"
    }
}
```

# Пример использования базы данных для поиска информации о городе по ip

```php
var_dump(Topvisor\Geolite2\Geolite2::city($ip));
```

Информация, полученная о городе по $ip, будет выведена на экран.

# Базовые методы

* city(string $ip) - получить объект GeoIp2\Model\City, содержащий информацию о городе, по ip, который в нем расположен
