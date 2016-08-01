<?php

namespace App\Model;

class Record
{

    private $executeTime;

    private $sql;

    private $requestParams;

    private $host;

    private $address;

    private $requestUrl;

    private $queryString;

    /**
     * Record constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getExecuteTime()
    {
        return $this->executeTime;
    }

    /**
     * @param mixed $executeTime
     */
    public function setExecuteTime($executeTime)
    {
        $this->executeTime = $executeTime;
    }

    /**
     * @return mixed
     */
    public function getQueryString()
    {
        return $this->queryString;
    }

    /**
     * @param mixed $queryString
     */
    public function setQueryString($queryString)
    {
        $this->queryString = $queryString;
    }

    /**
     * @return mixed
     */
    public function getSql()
    {
        return $this->sql;
    }

    /**
     * @param mixed $sql
     */
    public function setSql($sql)
    {
        $this->sql = $sql;
    }

    /**
     * @return mixed
     */
    public function getRequestParams()
    {
        return $this->requestParams;
    }

    /**
     * @param mixed $requestParams
     */
    public function setRequestParams($requestParams)
    {
        $this->requestParams = $requestParams;
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getRequestUrl()
    {
        return $this->requestUrl;
    }

    /**
     * @param mixed $requestUrl
     */
    public function setRequestUrl($requestUrl)
    {
        $this->requestUrl = $requestUrl;
    }

    public function __toString()
    {
        return "executeTime:{$this->getExecuteTime()},
                host:{$this->getHost()},
                address:{$this->getAddress()},
                requestUrl:{$this->getRequestUrl()},
                queryString:{$this->getQueryString()},
                sql:{$this->getSql()}";
    }
}