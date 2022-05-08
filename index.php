<?php

require("./functions.php");

pageHeader("صفحه اصلی");

//require("./pageTitle.php");

?>

<div class="container">
    <div class="row">
        <div class="col-md-6">

            <form>
                <div class="input-group mb-3">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon1">اضفاه کردن</button>
                    <input type="text" class="form-control" placeholder="عنوان وظیفه / تسک" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>
            </form>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
            </ul>
        </div>
    </div>
</div>







<?php




pageFooter();
