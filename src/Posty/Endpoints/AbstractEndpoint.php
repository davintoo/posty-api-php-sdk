<?php

namespace Posty\Endpoints;

/**
 * Class AbstractEndpoint
 *
 * @category Posty
 * @package  Posty\Endpoints
 * @author   Alex Slubsky <aslubsky@gmail.com>
 */
abstract class AbstractEndpoint
{
    /** @var array */
    protected $params = array();

    /** @var  string */
    protected $method = null;

    /** @var  array */
    protected $body = null;

    /** @var array */
    private $options = [];

    /** @var  string */
    protected $uri;

    /**
     * @return string
     */
    public function getURI()
    {
        return $this->uri;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @return array
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @return array
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param array $body
     *
     * @return $this
     */
    public function setBody($body)
    {
        if (isset($body) !== true) {
            return $this;
        }

        $this->body = $body;

        return $this;
    }
}
