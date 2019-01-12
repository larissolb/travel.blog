<?php
/**
 * Created by PhpStorm.
 * User: dasha
 * Date: 12.01.2019
 * Time: 8:33
 */

namespace Dasha\Travelblog\Models;


use Dasha\Travelblog\Base\DBConnection;

class AccountModel
{
    const USER_ADDED = "USER_ADDED";
    const USER_EXISTS = "USER_EXISTS";
    const LOGIN_ERROR = "LOGIN_ERROR";
    const PWD_ERROR = "PWD_ERROR";
    const USER_AUTH = "USER_AUTH";
    const DB_ERROR = "DB_ERROR";

    private $db;
    public function __construct()
    {
        $this->db = new DBConnection();
    }

    public function loginExists($userData){
        $sql = 'SELECT login FROM user WHERE login =:login';
        $params = ['login'=>$userData['login']];

        $statement = $this->db->connection->prepare($sql);
        $statement->execute($params);

        $answer = $statement->fetch(\PDO::FETCH_ASSOC);

        return $answer;
    }

    public function addUser($userData){

        if ($this->loginExists($userData)){
            return self::USER_EXISTS;
        }

        $sql = "INSERT INTO user (login, hash, email)
              VALUES (:login, :hash, :email)";
        $params = [
            'login'=>$userData['login'],
            'hash'=>password_hash($userData['pwd'], PASSWORD_DEFAULT),
            'email'=>$userData['email'],
        ];

        $statement = $this->db->connection->prepare($sql);
        if($statement->execute($params) === false) {
            return self::DB_ERROR;
        }
        return self::USER_ADDED;
    }

    public function authUser($userData){
        $sql = "SELECT login, hash FROM user 
      WHERE login=:login";
        $params = [
            'login'=> $userData['login']
        ];

        $statement = $this->db->connection->prepare($sql);
        $statement->execute($params);

        $answer = $statement->fetch(\PDO::FETCH_ASSOC);

        if (!$answer){
            return self::LOGIN_ERROR;
        }

        $hash = $answer['hash'];

        if (!password_verify($userData['pwd'], $hash)){
            return self::PWD_ERROR;
        }

        return self::USER_AUTH;
    }

}