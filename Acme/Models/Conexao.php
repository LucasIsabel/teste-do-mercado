<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 29/03/16
 * Time: 08:33
 */

namespace Acme\Models;
use PDO;

class Conexao extends DataAccess
{
    protected static $pdo;
    protected $dataAcess;

    public function __construct()
    {
        $this->dataAcess = new DataAccess();
        $this->pdo = new PDO("mysql:host={$this->dataAcess->getLocalhost()};dbname={$this->dataAcess->getDatabase()}",$this->dataAcess->getUser(),$this->dataAcess->getPassword());
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    }

    public function getCon()
    {
        return $this->pdo;
    }
}