<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class TheStrainController extends Controller
{
    public function getStrains(Request $request)
        {
            $strain = rawurlencode($request->strain);
            Log::info($strain);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://strainapi.evanbusse.com/5SGaXEt/strains/search/name/$strain",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
                "Postman-Token: f471e910-2266-1f69-4d61-dc963e2c3e1b"
        ),
));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $strains = json_decode($response, TRUE);

        $data = [
            'strains' => $strains
        ];

        Log::info($strains);
        return view('searchstrain')->with($data);



    }
}
