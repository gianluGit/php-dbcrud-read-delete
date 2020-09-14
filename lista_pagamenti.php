<?php
//db comunication

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "dbhotel";

  //db check db situation

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    return;
  }

  //read query sql

  // seleziona tutto dalla tabella pagamenti e stampa il risultato in una lista ordinata (fatto in classe)
  $sql = "

    SELECT id, status, price
    FROM pagamenti

  ";

  //while on result

  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

      echo $row['id'] . " | " . $row['status'] . " ----> " . $row['price'] . '<br>';

    }


  }
  elseif ($result) {
    echo "0 results";
  }
  else {
    echo "query error";
  }

  //close connection

  $conn->close();

?>
