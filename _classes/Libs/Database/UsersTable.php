<?php

namespace Libs\Database;
use PDOException;

class UsersTable
{
    private $db;
    public function __construct(MySQL $mysql)
    {
        $this->db = $mysql->connect();
    }
    
    public function insert($data){
        try{
            $statment = $this->db->prepare(
                "INSERT INTO users (name,email,phone,address,password,created_at) Values
                (:name,:email,:phone,:address,:password,NOW())");
                $statment->execute($data);
                return $this->db->lastInsertId();
        }catch(PDOException $e){
            echo $e->getMessage();
            exit();
        }
    }
}