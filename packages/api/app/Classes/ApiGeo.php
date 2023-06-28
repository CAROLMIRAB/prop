<?php

namespace App\Classes;

class ApiGeo
{
    /**
     * places
     *
     * @param  mixed $address
     * @return void
     */
    static public function places($address)
    {
        $apiURL = 'https://maps.googleapis.com/maps/api/geocode/json?address=' . $address . '&components=country:CL&key=' . env('API_GEO_KEY');
        $client = new \GuzzleHttp\Client();
        $request = $client->request('GET', $apiURL);


        $statusCode = $request->getStatusCode();
        $responseBody = json_decode($request->getBody(), true);

        foreach ($responseBody['results'][0]['address_components'] as $a) {
            if ($a['types'][0] == 'route') $route = $a['long_name'];
            if ($a['types'][0] == 'administrative_area_level_1')  $region = $a['short_name'];
            if ($a['types'][0] == 'administrative_area_level_2') $provincia = $a['short_name'];
            if ($a['types'][0] == 'administrative_area_level_3') $comuna = $a['short_name'];
            if ($a['types'][0] == 'country') $country = $a['short_name'];
            if ($a['types'][0] == 'street_number') $number = $a['short_name'];
        }

        $data = [
            "lat" => $responseBody['results'][0]['geometry']['location']['lat'],
            "long" => $responseBody['results'][0]['geometry']['location']['lng'],
            "region" => $region,
            "provincia" => $provincia,
            "comuna" => $comuna,
            "route" => $route,
            "number" => $number,
            "placeid" => $responseBody['results'][0]['place_id'],
            "country" => $country
        ];


        return $data;
    }
}
