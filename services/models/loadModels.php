<?php

require __DIR__ . "/BaseModel.php";

function loadModel($modelName)
{
    if(class_exists($modelName))
        return;

    $modelFilePath = __DIR__ . "/$modelName.php";
    if (!file_exists($modelFilePath)) {
       throw new Exception("File $modelFilePath Nistesh");
    }
    require($modelFilePath);
}
