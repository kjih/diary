<?php

    session_start();

    include("php/connection.php");

    $query = "SELECT diary FROM users WHERE id = '" . $_SESSION['id'] . "' LIMIT 1";

    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);

    $diary = $row['diary'];

?>