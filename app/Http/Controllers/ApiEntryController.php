<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ReadDataApiService\ReadDataApi;

class ApiEntryController extends Controller
{
    //

    protected $readDataApi;

    public function __construct(ReadDataApi $readDataApi)
    {
        $this->readDataApi = $readDataApi;
    }

    public function insertApiRecords()
    {

        try {

            $this->readDataApi->getApiEntry();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }

        return 'Operation Successful';
    }
}
