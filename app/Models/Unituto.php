<?php

namespace App\Models;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Stream;

class Unituto
{
    const API_URL = 'https://www.universal-tutorial.com/api';

    protected $createRequest, $apiKey, $email;

    public function __construct($apiKey, $email) {
        $this->createRequest = new Client(['headers' => ['Accept' => 'application/json', 'api-token' => $apiKey, 
        'user-email' => $email] ,'http_errors' => false]);
        $this->getAuthToken();
    }
    /*
     * Get auth_token
     */
    private function getAuthToken()
    {
       $authToken = json_decode($this->makeRequest('GET','getaccesstoken')->getContents(), true)['auth_token'];
       $this->createRequest = new Client(['headers' => ['Authorization' => 'Bearer '.$authToken, 
       'Accept' => 'application/json'] ,'http_errors' => false]);
    }

    /*
     * Get list of countries
     */
    public function getCountries(): Stream
    {
        return $this->makeRequest('GET','countries');
    }

    /**
     * Get States list
     */
    public function getStates(string $params): Stream
    {
        return $this->makeRequest('GET','states/'.$params);
    }

    /**
     * Get list of cities
     */
    public function getCities(array $params): Stream
    {
        return $this->makeRequest('GET','cities', $params);
    }

    /**
     * Add query parameters
     */
    private function parameters(array $params)
    {
        return [
            'query' => $params
        ];
    }

    /**
     * Make a request from api
     */

     private function makeRequest(string $type, string $endpoint, array $queries = []): Stream
     {
        $request = $this->createRequest->request($type, self::API_URL.'/'.$endpoint, $this->parameters($queries));
        return $request->getBody();
     }
}