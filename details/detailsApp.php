<!-- Display details property values, not including the rooms table. 
this file is included in the details/index.php
-->

<?php

if (isset($_GET['detailsId'])) {
  $id = $_GET['detailsId'];

  $sql = "select * from house2 where propId=$id";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $oneRow = $stmt->fetch(PDO::FETCH_OBJ);
}
?>
<!-- Getting the valuse from the database -->
<?php
echo "<b>PropId:</b> RWP00 $oneRow->propId <br>";
echo  "<b>Property Address:</b> $oneRow->propAddr ", " <br>";
echo  "$oneRow->city .", " ";
echo  "$oneRow->zipCode <br>";
echo  "<b>Price:</b> $oneRow->price <br>";
echo  "<b>Built Date:</b> $oneRow->builtDate <br>";

// Converting the listed date and time to date only for display.
$d = strtotime("$oneRow->listDate");
$dmin = date("Y-m-d", $d);

echo  "<b>Listed:</b> $dmin <br>";
echo  "<b>Property Category:</b> $oneRow->propType <br>";
echo  "<b>Property Use:</b> $oneRow->propCategory <br>";
echo  "<b>A/c:</b> $oneRow->aircon <br>";
echo  "<b>Heating:</b> $oneRow->heating <br>";
echo  "<b>Rooms:</b> $oneRow->rooms <br>";
echo  "<b>Garage Space:</b> $oneRow->garagespace <br>";
echo  "<b>Parking Space:</b> $oneRow->parkingspace <br>";
echo  "<b>Bathrooms:</b> $oneRow->bathroomQty <br>";
?>

<?php

//  Getting the row values
$kitchenData = $oneRow->kitRm;
$livData = $oneRow->livRm;
$famData = $oneRow->famRm;
$dinData = $oneRow->dinRm;

$bd_rm1Data = $oneRow->dbRm1; //bd_rm1 and 2 are from the database table
$bd_rm2Data = $oneRow->dbRm2;
$bd_rm3Data = $oneRow->dbRm3;
$bd_rm4Data = $oneRow->dbRm4;

// explode() function breaks a string into an array
$kit_rm = explode(', ', $kitchenData);
$liv_rm = explode(', ', $livData);
$fam_rm = explode(', ', $famData);
$din_rm = explode(', ', $dinData);
$bd_rm1 = explode(', ', $bd_rm1Data);
$bd_rm2 = explode(', ', $bd_rm2Data);
$bd_rm3 = explode(', ', $bd_rm3Data);
$bd_rm4 = explode(', ', $bd_rm4Data);



// Function to get the array values after the first array[0].
//  Used to get the details for the rooms in the house.
function printArray($arr_rm)
{
  $num = count($arr_rm);
  for ($i = 1; $i < count($arr_rm); $i++) {
    echo $arr_rm[$i];
    if ($i < ($num - 1)) {
      echo "/";
    }
  }
}

?>