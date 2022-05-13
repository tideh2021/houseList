<!-- save.php to save proprty details in the database. 
Creates a directory with the house name.
After which it redirect the user to the list table (index.php)

-->


<?php 
		// database connection file

 include '../db.conn.php';

$address = "";

// House Details Data Starts here
if(isset($_POST['save']))  {     
 
	if(isset($_POST['liv_rm']) || isset($_POST['fam_rm']) ) {
	 // Reference to the name feild in html        
			 $propId = $_POST['prop_id'];
			 $agentName = $_POST['agent_name']; 
			 $address = $_POST['address'];
			//  $img_addr = $address;

			 $city = $_POST['city']; 
			 $zipCode = $_POST['zipcode'];             
			 $price = $_POST['price'];
			 $listtime = $_POST['listtime'];
			 $builddate = $_POST['builddate'];
			 $propertytype = $_POST['propertytype'];
			 $sqftAge = $_POST['sqft'];
			 $houseType = $_POST['house_type'];
			 $rooms = $_POST['rooms'];
			 $heating = $_POST['heating'];
			 $aircon = $_POST['aircon'];
			 $bathrooms = $_POST['bathroom_qty'];
			 $garageSpace = $_POST['garagespace'];
			 $parkingSpace = $_POST['parkingspace'];
 					 
	// Array entries
$kit_rm = $_POST['kit_rm'];
$liv_rm = $_POST['liv_rm'];
$fam_rm = $_POST['fam_rm'];
$din_rm = $_POST['din_rm'];
$bd_rm1 = $_POST['bd_rm1'];  //bd_rm1 and 2 are from the name attribute below
$bd_rm2 = $_POST['bd_rm2'];
$bd_rm3 = $_POST['bd_rm3'];
$bd_rm4 = $_POST['bd_rm4'];
//seperating the array content
$kit_rmNew = implode(', ', $kit_rm);
$liv_rmNew = implode(', ', $liv_rm);
$fam_rmNew = implode(', ', $fam_rm);
$din_rmNew = implode(', ', $din_rm);

$bd_rm1New = implode(', ', $bd_rm1);
$bd_rm2New = implode(', ', $bd_rm2); 
$bd_rm3New = implode(', ', $bd_rm3); 
$bd_rm4New = implode(', ', $bd_rm4); 

			
    // Insert form input values in a table house2
    $query = "INSERT INTO house2 ( agent_name, propAddr, city, zipCode, price, builtDate, propCategory, propType, rooms, heating, aircon, bathroomQty, garagespace, parkingspace, famRm, livRm, dinRm, dbRm1, dbRm2, dbRm3, dbRm4, kitRm) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";  
    $stmt = $conn->prepare($query);
    $stmt->execute([ $agentName , $address, $city, $zipCode, $price, $builddate ,$propertytype, $houseType, $rooms, $heating , $aircon, $bathrooms , $garageSpace, $parkingSpace, $fam_rmNew, $liv_rmNew, $din_rmNew, $bd_rm1New, $bd_rm2New, $bd_rm3New, $bd_rm4New, $kit_rmNew]);
    echo " New house2 record created successfully";
		// header("Location: uploadImage2.php");   
		// die();
} // End of 1st if
else {
       echo "Error";
     }     
}
header("Location: ../index.php");   

?>








