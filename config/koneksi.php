<?php
$host = 'localhost';
$db = 'sirespek';
$user = 'root';
$pass = '';
$conn = mysqli_connect($host, $user, $pass, $db);
function query($queryy)
{
    global $conn;
    $result = mysqli_query($conn, $queryy);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
