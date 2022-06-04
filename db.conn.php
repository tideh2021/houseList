
<?php
# server name
$sName = "localhost";
# user name
$uName = "root";
# password
$pass = "your password";
# database name
// $db_name = "image_db";
$db_name = "ritewood";

#creating database connection
try {
  $dsn = "mysql:host=" . $sName . ";dbname=" . $db_name;
  $conn = new PDO($dsn, $uName, $pass);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed : " . $e->getMessage();
}
// connection to infinityfree
// # server name
// $sName = "sql109.epizy.com";
// # user name
// $uName = "epiz_31642808";
// # password
// $pass = "0ucMHxcL6fgXeG";
// # database name
// // $db_name = "image_db";
// $db_name = "epiz_31642808_ritewood";

// #creating database connection
// try {
//   $dsn = "mysql:host=" . $sName . ";dbname=" . $db_name;
//   $conn = new PDO($dsn, $uName, $pass);

//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//   echo "Connection failed : " . $e->getMessage();
// }

// Second infinity connection
// # server name
// $sName = "sql109.epizy.com";
// # user name
// $uName = "epiz_31642808";
// # password
// $pass = "vsTNukKVKp3PJH";
// # database name
// // $db_name = "image_db";
// $db_name = "epiz_31642808_ritewood";

// #creating database connection
// try {
//   $dsn = "mysql:host=" . $sName . ";dbname=" . $db_name;
//   $conn = new PDO($dsn, $uName, $pass);

//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//   echo "Connection failed : " . $e->getMessage();
// }

?>
