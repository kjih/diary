<?php

    session_start();

    include("connection.php");

    $query = "UPDATE users SET diary = '" . mysqli_real_escape_string($con, $_POST['diary']) . "' WHERE id = '" . $_SESSION['id']. "' LIMIT 1";

    mysqli_query($con, $query);

?>
