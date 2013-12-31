<?php

namespace App\Services\Client;

use App\Models\Client;
use App\Services\Map\MapService;

class StoreClientService
{
    /**
     * @param MapService $mapService
     */
    public function __construct(MapService $mapService)
    {
        $this->mapService = $mapService;
    }

    /**
     * Create client and call maps to get address.
     * @param $data
     * @return mixed
     * @throws \Exception
     */
    public function excute($data)
    {
        $data['address'] = $this->mapService->getAddress($data['latitude'], $data['longitude']);
        return Client::create($data);
    }

}
