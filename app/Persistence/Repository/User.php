<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/7/15
 * Time: 15:28
 */
namespace APP\Persistence\Repository;

class User
{

    private $userName;

    private $password;

    /**
     * User constructor.
     * @param $userName
     * @param $password
     */
    public function __construct($userName, $password)
    {
        $this->userName = $userName;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    

}