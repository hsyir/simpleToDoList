<?php 

namespace Services\Models;

use Services\Db\DbConnection;

class BaseModel{

    protected $dbCon;

    public function __construct()
    {
        $dbConnection = new DbConnection;
        $this->dbCon = $dbConnection->connect();    
    }
}