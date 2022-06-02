<?php

namespace Services\Db;

class DbConnection{

    public function connect(){

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "todo";
    
        // Create connection
        $connection = mysqli_connect($servername, $username, $password, $dbname);
      
        if (!$connection) {
          die(" ---------- Connection failed: " . mysqli_connect_error());
        }
        return $connection;
    }
    
  
}
  
