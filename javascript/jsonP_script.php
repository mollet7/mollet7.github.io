<?php 
    header("Content-Type: application/json; charset=UTF-8");
    $obj = json_decode($_GET["x"], false);

    $conn = new mysqli("localhost", "root", "", "property_plots");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $table = $obj->table;
    $limit = $obj->limit;
    $result = $conn->query("SELECT name FROM $table LIMIT $limit");
    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    $outp1 = $result->fetch_all(MYSQLI_ASSOC);
    echo "myFunc1(" . json_encode($outp1) . ")";
?>
