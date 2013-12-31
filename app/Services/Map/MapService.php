<?php

namespace App\Services\Map;

use Illuminate\Support\Facades\Http;

class MapService
{

    /**
     * Call google maps and get address by lat and long.
     * @param $lat
     * @param $long
     * @return mixed
     * @throws \Exception
     */
    public function getAddress($lat, $long)
    {
        $location   = $lat . ',' . $long;
        $key        = config('services.google_map.key');
        try {
            $response   = Http::get('https://maps.googleapis.com/maps/api/geocode/json?latlng='.$location.'&key='. $key);
            return $response->json()['results'][0]['formatted_address'];
        } catch (\Exception $exception) {
            Throw new \Exception('Address not found');
        }

    }

}
