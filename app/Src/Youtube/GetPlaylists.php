<?php

namespace App\Src\Youtube;

use App\Models\ParametersModel;
use Exception;
use GuzzleHttp\Client;

class GetPlaylists {

    public function get() {
        $httpClient = new Client();
        $param = ParametersModel::find(1);

        $url = 'https://www.googleapis.com/youtube/v3/playlists?part=snippet&maxResults=50' .
            '&channelId=' . $param->youtube_channel_id .
            '&key=' . $param->key_api_google;

        try {
            $response = $httpClient->get($url);
            return json_decode($response->getBody()->getContents(), true);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $response = $e->getResponse();
            $response_data = ($response->getBody()->getContents());
            throw new Exception($response_data, 1);
        }
    }
}
