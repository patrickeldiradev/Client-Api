<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreClientRequest;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use App\Services\Client\StoreClientService;
use Illuminate\Http\Request;

class ClientsController extends Controller
{

    /**
     * Get painated Clients
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $clients = Client::paginate();
        return ClientResource::collection($clients);
    }

    /**
     * Store new Client
     * @param StoreClientRequest $request
     * @param StoreClientService $service
     * @return ClientResource
     */
    public function store(StoreClientRequest $request, StoreClientService $service)
    {
        return new ClientResource( $service->excute( $request->validated() ) );
    }

}
