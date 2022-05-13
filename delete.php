<?php
include 'db.conn.php';


if(isset($_GET['deleteId'])) {
  $id = $_GET['deleteId'];

  $sql = "DELETE from house2 where propId=$id";
  $stmt = $conn->query($sql);
    // $data = $stmt -> fetch();
if($stmt) {
  header('Location: ./index.php');
} else {
  echo ("Item Not deleted");
}
}

