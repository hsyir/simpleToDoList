<?php

function done()
{
    global $conn;
    $done = isset($_POST["done"]) ? 1 : 0;
    $sql = " UPDATE `list` SET `done` = '$done' WHERE `list`.`id` = $_POST[id];";
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
    $sql = "SELECT * FROM `list` order by `done`,`id` ASC";
    $result = mysqli_query($conn, $sql);
    return $result;
}
