<?php

/**
 * echo hi to persons
 *
 * @param [string] $name
 * @return void
 */
function sayHello($name)
{
    echo "های " . $name;
}

function pageHeader($pageTitle)
{
    require("./header.php");
}

function pageFooter()
{
    require("./footer.php");
}

function connectToHost(){
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

return $conn;
}
function  select($conn){

    $sql = "SELECT * FROM `list` order by `id`";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
    
           // $secondary = $row["done"] ? "list-group-item-secondary" : "";
             
            // if ($row['done']) {
            if ($row['done']==true) {
                $secondary  = "'flexSwitchCheckCheckedDisabled'  checked disabled";
            } else {
                $secondary ="flexSwitchCheckDefault";
            }
             echo "<label class='form-check-label' for='flexSwitchCheckChecked'>".$row['title']."</label>";
            // echo "<li class='list-group-item ".$secondary."'>".$row['title']."</li>";
            echo "<input class='form-check-input' name='check[]' value='".$row['id']."' type='checkbox' id=".$secondary."> <br>";

            
        }
    } else {
        echo "<li class='list-group-item list-group-item-warning'>هیچ تسکی اضافه نشده است</li>";
    }

}
function insertToDatabase($conn,$value){
    $query = "insert into `list` (title,done)values('".$value."','0')";

    if(!$result = mysqli_query($conn,$query)){
        echo "متاسفانه خطایی رخ داده !" .mysqli_errno($conn);
    }

}

function UpdateDatabase($conn,$values){

$query = "update `list` set done='1' where id='".$values."'";
 if(!$result = mysqli_query($conn,$query)){
     echo "متاسفانه خطایی رخ داده !" .mysqli_errno($conn);
 } 
}