<?php

require("./functions.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
// if (!$conn) {
if ($conn==false) {
    die(" ---------- Connection failed: " . mysqli_connect_error());
}


pageHeader("صفحه اصلی");

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
<?php


$sql = "SELECT * FROM `list` order by `id`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {

       // $secondary = $row["done"] ? "list-group-item-secondary" : "";
         
        // if ($row['done']) {
        if ($row['done']==true) {
            $secondary  = "list-group-item-secondary";
        } else {
            $secondary ="";
        }
         
        echo "<li class='list-group-item ".$secondary."'>".$row['title']."</li>";
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
