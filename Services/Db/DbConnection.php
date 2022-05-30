<?php

namespace Services\Db;
class DbConnection
{
    public function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "todo";
        
        $connection = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$connection) {
            die(" Connection failed: " . mysqli_connect_error());
        }

        return $connection;
    }
}
