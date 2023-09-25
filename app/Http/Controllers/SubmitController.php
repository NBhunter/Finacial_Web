<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubmitController extends Controller
{
    public function SendProfiler(Request $request){
        try {
            $request->validate(
                [
                    'CUS_NAME',
                    'CUS_PHONE',
                    'CUS_AOM',
                    'CUS_TIME_START',
                    'CUS_TIME_END',
                    'CUS_CREATE_TIME',
                    'STATUS',
                ]
                );
        }catch(\GuzzleHttp\Exception\RequestException $e) {

        }
    }
}
