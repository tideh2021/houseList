<!-- addImgApp.php, gets the images files uploaded, creates a directory with the house address
Uses the id to add the image to the corresponding house, checks if the image is png, jpg or jpeg.
If allowed will update the database with the images, otherwise will echo error message.
After which will redirect to the house list page.

-->

<?php
  
// Check if upload is clicked 
if (isset($_POST['upload'])) {
	$id = $_POST['prop_Id'];
	$address = $_POST['img_addr1'];

	$images = $_FILES['images'];
  $derived_path = [];
  // implode the add "," to the array
	$img_names = implode(",", $_FILES['images']['full_path']);
  // Assigns the path to a variable 
	$madeDir = '../uploads/'.$address;
print_r($madeDir);
	// CreateDirectory($madeDir);
    mkdir($madeDir, 0777, true);
		// check to see if created
	if(!$madeDir) {
		echo "Directiry not created";
	} else {
		echo "directory created";
	};
	// Counts number of images assign it to a variable by the names
    $num_of_imgs = count($images['name']);

    // Using for loop to iterate through the images
    for ($i=0; $i < $num_of_imgs; $i++) { 
    	
						// get the image info and store them in variable
						$image_name = $images['name'][$i];
						$tmp_name   = $images['tmp_name'][$i];
						$error      = $images['error'][$i];

							// if there is not error occurred while uploading
							if ($error === 0) {
    		
								// get image extension store it in variable
								$img_ex = pathinfo($image_name, PATHINFO_EXTENSION);

										// convert the image extension into lower case 
										// and store it in variable 
										$img_ex_lc = strtolower($img_ex);

												// creating array of allowed extensions
												$allowed_exs = array('jpg', 'jpeg', 'png');
			
													// check if the the image extension 
													// is present in $allowed_exs array
																if (in_array($img_ex_lc, $allowed_exs)) {
				
																	//  renaming the image name with 
																	//  with random string
																	$new_img_name = uniqid('IMG-', true).'.'.$img_ex_lc;
												
															//  creating upload path on root directory using the address
															// my hard drive path is ../uploads/
															$img_upload_path =  $madeDir.'/'.$new_img_name;

											//  $madeDir = '../uploads/'.$address; Using the address as file name
												move_uploaded_file($tmp_name, $img_upload_path);

									}else {
										// error message
								$em = "You can't upload files of this type";
											// redirect to 'index.php' and 
											// passing the error message
										// header("Location: ../house2List/index.php?error=$em");
							}
						}else {
    		//  error message
    		$em = "Unknown Error Occurred while uploading";   		
	    	// redirect to 'index.php' and 
	    	// passing the error message	        
	      // header("Location: ../house2List/index.php?error=$em");
    	
		}

    }	
    $sql = "UPDATE `house2` SET `img_name`='$madeDir' WHERE propId=$id";
   $stmt = $conn->prepare($sql);
   $stmt->execute();
	

   //  redirect to 'house_index.php'
    // header("Location: ../house2List/index.php");	
	}

?>