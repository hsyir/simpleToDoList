<?php

require("./functions.php");


$conn = connectToHost();

pageHeader("صفحه اصلی");

/**
 * 
 * for insert data
 * 
 */
if(isset($_POST['send'])){
  insertToDatabase($conn,$_POST['task']);
}
//======================


/**
 * 
 * for update data
 */
if(isset($_POST['checked'])){
$tasks = (isset($_POST['check'])) ? $_POST['check'] : array();
if (count($tasks) > 0) { 
    foreach ($tasks as $task) {  
        UpdateDatabase($conn,$task);
    }  
} 
}
//==========================
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">

            <form method="POST" >
                <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon1" name="send">اضافه کردن</button>
                    <input type="text" class="form-control" name="task" placeholder="عنوان وظیفه / تسک" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
                <form method="POST">
            <div class="form-check form-switch">
<?php


select($conn);

?>
            </div>
            <button class="btn btn-outline-secondary" type="submit" id="button-addon1" name="checked">تغییر وضعیت </button>
            </form>
            </ul>
        </div>
    </div>
</div>

<?php




pageFooter();
