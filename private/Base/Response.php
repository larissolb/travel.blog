<?php
/**
 * Created by PhpStorm.
 * User: dasha
 * Date: 27.12.2018
 * Time: 20:13
 */

namespace Dasha\Travelblog\Base;


class Response
{
    private $body;
    private $headers = [];
    private $statusCode = 200;

    public function __construct(
        $body='',
        $code = 200,
        $headers=[])
    {
        $this->setBody($body);
        $this->setHeaders($headers);
        $this->setStatusCode($code);
    }




    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getHeaders()
    {
        return $this->headers;
    }


    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }


    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }




}