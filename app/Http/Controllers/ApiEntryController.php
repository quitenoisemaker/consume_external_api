<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ReadDataApiService\ReadDataApi;

class ApiEntryController extends Controller
{
    //
    public function insertApiRecords(ReadDataApi $readDataApi)
    {

        try {

            $readDataApi->getApiEntry();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }

        return 'Success';
    }
}
