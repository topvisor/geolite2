<?php

// https://github.com/topvisor/geolite2

namespace Services\System_2;

use Exception;
use GeoIp2;
use TV\TV;
use Services\System_2;

class Geolite2{

	private static GeoIp2\Database\Reader $reader;

	static function city(string $ip): ?GeoIp2\Model\City{
		try{
			return System_2\Geolite2::getReader()->city($ip);
		}catch(Exception $e){
			return null;
		}
	}

	private static function getReader(): GeoIp2\Database\Reader{
		if(!isset(System_2\Geolite2::$reader)) System_2\Geolite2::$reader = new GeoIp2\Database\Reader(__DIR__ . '/GeoLite2-City.mmdb');

		return System_2\Geolite2::$reader;
	}

}

