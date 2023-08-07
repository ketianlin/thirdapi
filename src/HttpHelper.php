<?php

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class HttpHelper
{
    public static function FormPost($url, $data = [], $headers = [], $timeout = 10, $isReturnArray = true)
    {
        $options = [
            'form_params'=>$data
        ];
        $constructParams = ['timeout' => $timeout];
        if ($headers) {
            $constructParams['headers'] = $headers;
        }
        try {
            $client = new Client($constructParams);
            $response = $client->post($url, $options);
            $content = $response->getBody()->getContents();
            if ( ! $isReturnArray){
                return $content;
            }
            return json_decode($content, true);
        } catch (GuzzleException $e) {
            throw new Exception($e->getMessage());
        }
    }

    public static function JsonPost($url, $data = [], $headers = [], $timeout = 10)
    {
        $body = json_encode($data);
        if ($body == '[]'){
            $body = '{}';
        }
        $options = [
            'body'=>$body,
//            'verify' => false,
        ];
        $constructParams = ['timeout' => $timeout];
        if ($headers) {
            $constructParams['headers'] = $headers;
        }
        try {
            $client = new Client($constructParams);
            $response = $client->post($url, $options);
            $content = $response->getBody()->getContents();
            return json_decode($content, true);
        } catch (GuzzleException $e) {
            throw new Exception($e->getCode(),$e->getMessage());
        }
    }

    public static function Get($url, $data = [], $headers = [], $timeout = 10)
    {
        $options = [
            'query'=>$data
        ];
        $constructParams = ['timeout' => $timeout];
        if ($headers) {
            $constructParams['headers'] = $headers;
        }
        try {
            $client = new Client($constructParams);
            $response = $client->get($url, $options);
            $content = $response->getBody()->getContents();
            return json_decode($content, true);
        } catch (GuzzleException $e) {
            throw new Exception($e->getMessage());
        }
    }
}