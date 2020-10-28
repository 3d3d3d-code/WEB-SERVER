<?php




class DbConnect
{

    private static $pdo = null;



    public static function getDb()
    {

        if (DbConnection::$pdo === null) {
            DbConnection::$pdo = new PDO($dsn, 'root', '');
        }

        return DbConnection::$pdo;
    }
}
