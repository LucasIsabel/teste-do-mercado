<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 29/03/16
 * Time: 08:51
 */

namespace Acme\Models;


class DataAccess
{
    private $user;
    private $localhost;
    private $database;
    private $password;



    public function __construct()
    {
        $this->user = "";
        $this->localhost = "";
        $this->database = "";
        $this->password = "";
    }

    public function getLocalhost()
    {
        return $this->localhost;
    }

    public function setLocalhost($localhost)
    {
        $this->localhost = $localhost;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function getDatabase()
    {
        return $this->database;
    }

    public function setDatabase($database)
    {
        $this->database = $database;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

}