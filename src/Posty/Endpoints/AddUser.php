<?php

namespace Posty\Endpoints;

/**
 * Class AddUser
 *
 * @category Posty
 * @package  Posty\Endpoints
 * @author   Alex Slubsky <aslubsky@gmail.com>
 */
class AddUser extends AbstractEndpoint
{
    protected $domain = '';

    /** @var  string */
    protected $uri = '/api/v1/domains/{domain}/users';

    /** @var  string */
    protected $method = 'POST';

    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @return string
     */
    public function getURI()
    {
        return str_replace('{domain}', $this->domain, $this->uri);
    }
}
