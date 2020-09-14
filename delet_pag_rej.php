<?php

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "dbhotel";

  $conn = new mysqli($servername, $username, $password, $dbname);


  if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    return;
  }

  //elimina dalla tabella pagamenti la riga con pagante_id = 6 e con status = rejected

  $sql = "

    DELETE
    FROM pagamenti
    WHERE pagante_id = 6 AND status LIKE 'rejected'

  ";

  $result = $conn->query($sql);


  if ($result && $result->num_rows > 0) {


  } elseif ($result) {
    echo "deleted";
  }
  else {
    echo "query error";
  }


  $conn->close();




?>
