<?php

require("./functions.php");
require("./t_todo.php");

pageHeader("صفحه اصلی");

?>

<div class="container">
    <div class="row">
        <div class="col-md-6">

            <form action="/index.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="task_title" class="form-control" placeholder="عنوان وظیفه / تسک" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    <button class="btn btn-outline-secondary" type="submit" name="action" value="insert"  id="button-addon1">اضافه کردن</button>
                </div>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
<?php

$todoList = todoList();
if (mysqli_num_rows($todoList) > 0) {
    while ($row = mysqli_fetch_assoc($todoList)) {
        $secondary = $row["done"] ? "list-group-item-secondary" : "";         
        echo 
            "<li class='list-group-item ".$secondary."'>"
            .$row['title']
            ."<form method='post' action='/index.php' >
                <button name='action' value='delete'>DEL</button>
                <input type='hidden' name='id' value='$row[id]' /></form>"

            ."<form action='/index.php' method='post'>
                <button name='action' value='done'>check</button>
                <input type='hidden' name='id' value='$row[id]' /></form>"

            ."</li>";
    }
} else {
    echo "<li class='list-group-item list-group-item-warning'>هیچ تسکی اضافه نشده است</li>";
}

?>
            </ul>
        </div>
    </div>
</div>

<?php




pageFooter();
