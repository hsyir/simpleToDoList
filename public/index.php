<?php

use Services\Layout\Layout;
use Services\Models\TodoList;
use Services\Models\User;

require("../loader.php");

$user = new User();

$todoList = new TodoList;

$validActions = ['done','delete','insert'];
if (isset($_POST["action"]) and in_array($_POST["action"], $validActions)) {
    $action = $_POST["action"];
    $todoList->$action();
    redirect("/index.php");
}

Layout::pageHeader("صفحه اصلی");

?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="/index.php" method="post" id="testForm">
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

$todoList = $todoList->getAll();
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
                <input type='hidden' name='action' value='done' />
                <input type='hidden' name='id' value='$row[id]' />
                <input type='checkbox' value='done' name='done' class='doneCheckBox' ".($row["done"] ? "checked" : "")." />
                </form>"
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

<script>
    let checkboxes = document.getElementsByClassName("doneCheckBox");
    for(let i=0;i<=checkboxes.length-1; i++){
        checkboxes[i].addEventListener("change",function(e){
            e.target.parentElement.submit();
        })
    }

</script>

<?php

Layout::pageFooter();


