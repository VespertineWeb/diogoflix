<?php

namespace App\Src\Youtube;

use App\Models\ParametersModel;
use App\Models\VideosModel;
use Exception;
use GuzzleHttp\Client;

class GetVideo {

    public function get_by_id($video_id) {
        $httpClient = new Client();
        $param = ParametersModel::find(1);

        $video = VideosModel::findOrFail($video_id);

        if ($video->embedHtml != null) {
            return $video;
        } else {
        }

        $url = 'https://www.googleapis.com/youtube/v3/videos?part=player' .
            '&id=' . $video->videoId .
            '&key=' . $param->key_api_google;

        try {
            $response = $httpClient->get($url);
            $result = json_decode($response->getBody()->getContents(), true);

            // dd($result['items']);

            $video->update(['embedHtml' => $result['items'][0]['player']['embedHtml']]);
            return VideosModel::find($video_id);
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $response = $e->getResponse();
            $response_data = ($response->getBody()->getContents());

            // Log::notice($response_data);
            throw new Exception($response_data, 1);
        }
    }
}
