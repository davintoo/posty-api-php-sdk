<?php

namespace Posty;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

/**
 * Class Transport
 *
 * @category Posty
 * @package  Posty
 * @author   Alex Slubsky <aslubsky@gmail.com>
 */
class Transport
{
    /** @var Client */
    protected $client;

    protected $token;

    public function __construct($endPoint, $token)
    {
        $this->client = new Client([
            'base_uri' => $endPoint
        ]);
        $this->token = $token;
    }

    private function _makeRequest($method, $uri)
    {
        $headers = [
            'Accept' => 'application/json'
        ];

        if (strpos($uri, '?') === false) {
            $uri = $uri . '?auth_token=' . $this->token;
        } else {
            $uri = $uri . '&auth_token=' . $this->token;
        }
        return new Request($method, $uri, $headers);
    }

    public function performRequest($method, $uri, $params, $body)
    {
//        $this->token
        $request = $this->_makeRequest($method, $uri);
        $options = [];
        if ($body) {
            $options['json'] = $body;
        }
        $res = $this->client->send($request, $options);
        return \GuzzleHttp\json_decode($res->getBody(), true);
    }
}
