
<?php

$id = $_GET['uploadId'];

$sql = "select * from house2 where propId=$id";
$stmt = $conn->prepare($sql);
$stmt->execute();
$oneRow = $stmt->fetch(PDO::FETCH_OBJ);


$kitchenData = $oneRow->kitRm;
$livData = $oneRow->livRm;
$famData = $oneRow->famRm;
$dinData = $oneRow->dinRm;

$bd_rm1Data = $oneRow->dbRm1; //bd_rm1 and 2 are from the database table
$bd_rm2Data = $oneRow->dbRm2;
$bd_rm3Data = $oneRow->dbRm3;
$bd_rm4Data = $oneRow->dbRm4;


$kit_rm = explode(', ', $kitchenData);
$liv_rm = explode(', ', $livData);
$fam_rm = explode(', ', $famData);
$din_rm = explode(', ', $dinData);
$bd_rm1 = explode(', ', $bd_rm1Data);
$bd_rm2 = explode(', ', $bd_rm2Data);
$bd_rm3 = explode(', ', $bd_rm3Data);
$bd_rm4 = explode(', ', $bd_rm4Data);

if(isset($_POST['update3'])) {
$propAddr = $_POST['propAddr'];
$agent_name = $_POST['agent_name'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$price = $_POST['price'];
$listtime = $_POST['listtime'];
$builtdate = $_POST['builddate'];
$house_type = $_POST['house_type'];
$propertytype = $_POST['propertytype']; 
$rooms = $_POST['rooms'];
$sqft = $_POST['sqft'];
$heating = $_POST['heating'];
$aircon = $_POST['aircon'];
$bathroom_qty = $_POST['bathroom_qty'];
$garagespace = $_POST['garagespace'];
$parkingspace = $_POST['parkingspace'];


$kit_rm = $_POST['kit_rm'];
$liv_rm = $_POST['liv_rm'];
$fam_rm = $_POST['fam_rm'];
$din_rm = $_POST['din_rm'];


$bd_rm1 = $_POST['bd_rm1'];  //bd_rm1 and 2 are from the name attribute below
$bd_rm2 = $_POST['bd_rm2'];
$bd_rm3 = $_POST['bd_rm3'];
$bd_rm4 = $_POST['bd_rm4'];

$kit_rmNew = implode(', ', $kit_rm);
$liv_rmNew = implode(', ', $liv_rm);
$fam_rmNew = implode(', ', $fam_rm);
$din_rmNew = implode(', ', $din_rm);

$bd_rm1New = implode(', ', $bd_rm1);
$bd_rm2New = implode(', ', $bd_rm2); 
$bd_rm3New = implode(', ', $bd_rm3); 
$bd_rm4New = implode(', ', $bd_rm4); 


// print_r($liv_rm);
//  Setting up the update query to execute
$sql = "UPDATE `house2` SET `agent_name`='$agent_name', `propAddr`='$propAddr',`city`='$city',`propAddr`='$propAddr',`zipCode`='$zipcode', `price`='$price', `listDate`='$listtime', `builtDate`='$builtdate',`propCategory`='$house_type',`propType`='$propertytype',`rooms`='$rooms',`sqftAge`='$sqft',`heating`='$heating',`aircon`='$aircon',`bathroomQty`='$bathroom_qty',`garagespace`='$garagespace',`parkingspace`='$parkingspace',`kitRm`='$kit_rmNew',`livRm`='$liv_rmNew',`famRm`='$fam_rmNew',`dinRm`='$din_rmNew',`dbRm1`='$bd_rm1New',`dbRm2`='$bd_rm2New', `dbRm3`='$bd_rm3New',`dbRm4`='$bd_rm4New' WHERE propId = $id";


 $stmt = $conn->prepare($sql);
 $stmtexec = $stmt->execute();


if($stmtexec) {
  $_SESSION['status'] = "Data updated successfully";
//  echo "Data updated successfully";
header("Location: ../index.php");
} else {
  echo "ERROR: Data Not Updated";
}

}

?>
