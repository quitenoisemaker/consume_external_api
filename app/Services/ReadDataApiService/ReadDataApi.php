<?php

namespace App\Services\ReadDataApiService;

use App\Models\ApiEntry;
use Illuminate\Support\Facades\Http;

class ReadDataApi
{
    public function getApiEntry()
    {
        # code...
        $url = ApiEntry::PUBLIC_ENDPOINT;

        $response = Http::get(
            $url
        );
        $responseBodyClient = $response->json();
        $externalApiEntries = $responseBodyClient['entries'];

        foreach ($externalApiEntries as $externalApiEntry) {
            ApiEntry::updateOrInsert(
                [
                    'api' => $externalApiEntry['API'],
                    'description' => $externalApiEntry['Description'],
                    'link' => $externalApiEntry['Link'],
                    'category' => $externalApiEntry['Category'],
                ],
                [
                    'auth' => $externalApiEntry['Auth'],
                    'httpS' => $externalApiEntry['HTTPS'],
                    'cors' => $externalApiEntry['Cors'],
                ]
            );
        }
    }
}
