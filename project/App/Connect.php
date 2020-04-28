<?php 

namespace App;

use Exception;
use PDOException;

/**
 * RESPOSAVEL POR FAZER CONEXAO COM O BANCO DE DADOS
 * @author Robson Lucas
 */
abstract class Connect 
{
    /**
     * HOST
     * 
     * @param string
     */
    private static $host = '';


    /**
     * USER
     * 
     * @param string
     */
    private static $user = '';


    /**
     * PASSWORD
     * 
     * @param string
     */
    private static $pass = '';


    /**
     * DATABASE
     * 
     * @param string
     */
    private static $db   = '';


    /**
     * RETORNA INSTACIA PDO
     * @return PDO
     */
    public static function get () 
    {
        try 
        {
            $getConnect = new \PDO('mysql:host='.self::$host.';dbname='.self::$db.','.self::$user.','. self::$pass);
            return $getConnect;
        } catch (\PDOException $e)
        {
            throw new \Exception($e.__CLASS__);
        }
    }
}