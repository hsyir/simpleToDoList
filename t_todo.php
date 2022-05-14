<?php


if (isset($_POST["action"]) and $_POST["action"] == "done") {
    done();
    redirect("/index.php");
}

if (isset($_POST["action"]) and $_POST["action"] == "delete") {
    delete();
    redirect("/index.php");
}

if (isset($_POST["action"]) and $_POST["action"] == "insert") {
    insert();
    redirect("/index.php");
}


function done()
{
    global $conn;
    $sql = " UPDATE `list` SET `done` = '1' WHERE `list`.`id` = $_POST[id];";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function delete()
{
    global $conn;
    $sql = " DELETE FROM `list` WHERE `list`.`id` = $_POST[id]";
    $result = mysqli_query($conn, $sql);
    echo mysqli_affected_rows($conn);
    return $result;
}

function insert()
{
    global $conn;
    $taskTitle = $_POST["task_title"];
    $sql = "INSERT INTO `list` (`title`, `done`) VALUES ('$taskTitle', '0');";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function todoList()
{
    global $conn;
    $sql = "SELECT * FROM `list` order by `id`";
    $result = mysqli_query($conn, $sql);
    return $result;
}
