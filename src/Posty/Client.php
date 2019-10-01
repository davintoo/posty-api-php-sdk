<?php

namespace Posty;

use Posty\Endpoints\AbstractEndpoint;
use Posty\Exceptions\BaseException;

/**
 * Class Client
 *
 * @category Posty
 * @package  Posty
 * @author   Alex Slubsky <aslubsky@gmail.com>
 */
class Client
{
    /**
     * @var Transport
     */
    protected $transport;

    /**
     * @var array
     */
    protected $params;

    /**
     * Client constructor
     *
     * @param array $params
     */
    public function __construct($params = [])
    {
        $this->params = $params;//@todo add validation

        $this->transport = new Transport($this->params['endPoint'], $this->params['apiToken']);
    }

    /**
     * @return array
     */
    public function getUsers($domain)
    {
        $endpoint = new \Posty\Endpoints\GetUsers();
        $endpoint->setDomain($domain);
        return $this->performRequest($endpoint);
    }

    /**
     * @return array
     */
    public function addUser($domain, $params)
    {
        $endpoint = new \Posty\Endpoints\AddUser();
        $endpoint->setDomain($domain);
        $endpoint->setBody($params);
        return $this->performRequest($endpoint);
    }


    /**
     * @return array
     */
    public function updateUser($domain, $name, $params)
    {
        $endpoint = new \Posty\Endpoints\UpdateUser();
        $endpoint->setDomain($domain);
        $endpoint->setName($name);
        $endpoint->setBody($params);
        return $this->performRequest($endpoint);
    }

    /**
     * @return array
     */
    public function deleteUser($domain, $name)
    {
        $endpoint = new \Posty\Endpoints\DeleteUser();
        $endpoint->setDomain($domain);
        $endpoint->setName($name);
        return $this->performRequest($endpoint);
    }


    /**
     * @return array
     */
    public function getDomains()
    {
        $endpoint = new \Posty\Endpoints\GetDomains();
        return $this->performRequest($endpoint);
    }

    /**
     * @param $endpoint AbstractEndpoint
     *
     * @return array
     * @throws BaseException
     */
    private function performRequest(AbstractEndpoint $endpoint)
    {
        return $this->transport->performRequest(
            $endpoint->getMethod(),
            $endpoint->getURI(),
            $endpoint->getParams(),
            $endpoint->getBody()
        );
    }
}
