<?php

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
