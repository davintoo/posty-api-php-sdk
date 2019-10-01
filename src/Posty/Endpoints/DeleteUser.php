<?php

namespace Posty\Endpoints;

/**
 * Class AddUser
 *
 * @category Posty
 * @package  Posty\Endpoints
 * @author   Alex Slubsky <aslubsky@gmail.com>
 */
class DeleteUser extends AbstractEndpoint
{
    protected $domain = '';
    protected $name = '';

    /** @var  string */
    protected $uri = '/api/v1/domains/{domain}/users/{name}';

    /** @var  string */
    protected $method = 'DELETE';

    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getURI()
    {
        return str_replace(['{domain}', '{name}'], [$this->domain, $this->name], $this->uri);
    }
}
