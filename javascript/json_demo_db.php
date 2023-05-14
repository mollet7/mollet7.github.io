<?php
  header("Content-Type: application/json; charset=UTF-8");
  $obj = json_decode($_GET["x"], false);

  $conn = new mysqli ("localhost", "root", "","bata");
  $stmt = $conn -> prepare ("SELECT name FROM employees LIMIT ?");
  $stmt->bind_param("s", $obj->limit);
  $stmt->execute();
  $result = $stmt->get_result();
  $outp = $result->fetch_all(MYSQLI_ASSOC);

  echo json_encode($outp);

?>