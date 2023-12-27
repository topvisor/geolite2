<?php

namespace Topvisor\Geolite2;

use Exception;
use GeoIp2;

class Geolite2{

	private static GeoIp2\Database\Reader $reader;

	static function city(string $ip): ?GeoIp2\Model\City{
		try{
			return Geolite2::getReader()->city($ip);
		}catch(Exception $e){
			return null;
		}
	}

	private static function getReader(): GeoIp2\Database\Reader{
		if(!isset(Geolite2::$reader)) Geolite2::$reader = new GeoIp2\Database\Reader(__DIR__ . '/GeoLite2-City.mmdb');

		return Geolite2::$reader;
	}

}

