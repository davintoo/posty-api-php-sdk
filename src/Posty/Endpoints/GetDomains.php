<?php

namespace Posty\Endpoints;

/**
 * Class GetUserLink
 *
 * @category Posty
 * @package  Posty\Endpoints
 * @author   Alex Slubsky <aslubsky@gmail.com>
 */
class GetDomains extends AbstractEndpoint
{
    protected $domain = '';

    /** @var  string */
    protected $uri = '/api/v1/domains';

    /** @var  string */
    protected $method = 'GET';
}
