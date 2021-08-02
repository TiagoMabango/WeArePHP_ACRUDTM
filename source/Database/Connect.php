<?php

namespace Source\Database;

use \PDO;
use \PDOException;

/**
 * MIXTAP WE ARE PHP
 *
 * @author Tigao Mabango 
 * @package Source\Models
 */

class Connect{
    private const HOST="localhost";
    private const USER="root";
    private const DBNAME="acrudtm";
    private const PASSWD="";   
    
    private const OPTIONS =[
        PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8",
        PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];  

    private static $instance;

    public static function getInstance(): PDO{

        if(empty(self::$instance)){
            try{
                self::$instance = new PDO(
                    "mysql:host=".self::HOST.";dbname=".self::DBNAME,
                    self::USER,
                    self::PASSWD,
                    self::OPTIONS
                );

                
            }catch(PDOException $exception){
                die("<h1> Uppis! Erro ao conectar...</h1>");
            }
        }

        return self::$instance;
    }

}