<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Session;

class Api
{
    public static function post(string $endpoint, ?array $options): ?array
    {
        $curl = curl_init();

        $data = json_encode($options);


        curl_setopt_array($curl, array(
            CURLOPT_URL => Url::URL . "/{$endpoint}/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{$data}",
            CURLOPT_HTTPHEADER => array(
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);

        $err = curl_error($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
            curl_close($curl);
        }

        curl_close($curl);
        return json_decode($response, TRUE);
    }

    public function get(string $endpoint, ?array $options): ?array
    {
        $curl = curl_init();
        $data = json_encode($options);

        curl_setopt_array($curl, array(
            CURLOPT_URL => Url::URL . "/{$endpoint}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS => "{$data}",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer " . Session::get('token'),
                "content-type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
            curl_close($curl);
        }

        curl_close($curl);
        return json_decode($response, TRUE);
    }
}
