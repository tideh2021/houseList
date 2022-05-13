<!-- This is addImage/index.php. It takes images from user then uploads to a file in the local drive
Creates a directory mkdir to store images with the property address as the file name.
Gets the address and the property Id from the list.
It can store maximum of 16 images. Also stores the filename in mysql(phpAdmin) data base.
-->

<?php 
# server name
$sName = "localhost";
# user name
$uName = "root";
# password
$pass = "";
# database name
// $db_name = "image_db";
$db_name = "ritewood";

#creating database connection
try {
    $dsn = "mysql:host=" .$sName . ";dbname=".$db_name;
    $conn = new PDO($dsn, $uName, $pass);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <link rel="stylesheet" href="rwoodFormImage.css?v=<?php echo time(); ?>">

		<script>
			// loading the images
        $(document).ready(function()
        {
        $('form').ajaxForm(function()
        {
        alert("Uploaded SuccessFully");
        });
        });
        function preview_image()
        {
        var total_file=document.getElementById("images").files.length;
        for(var i=0;i<total_file;i++)
        {
        var img = $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' height='80px' width='80px'><br><br>");
        $(".btnsave").click(function(){
            $("img").addClass('d_none');
						$('.imgholder').show();
        });
        }
        }
		</script>


		<style>
			  .wrapper {
					width: 700px;
					height: 400px;
				}
            .d_none{
                display: none;
            }

         </style>
  </head>
  <body>
<?php
 if(isset($_GET['addImgId'])) {

$id = $_GET['addImgId'];

// Test to find out what... will be removed
$imgrow =  "SELECT * FROM house2 WHERE propId=$id";
 // prepare the connection
 $stmt = $conn->prepare($imgrow);
 $stmt->execute();
//  while loop to get the address
while($row = $stmt->fetch() ){ 		
   $address = $row['propAddr'];
 }
 }
?>

<div class="wrapper d-flex flex-column mt-5 mx-auto py-3">
	<div class="bg-warning text-center">
  <h1>Add Image</h1> 
  <p>Employee Only</p>
  </div>

<div class="main-div w-100 h-100 d-flex flex-row">
<div class="card-body my-2 w-50 h-75 px-2">
	<form class="d-block p-2" method="post" 
	      action="uploadImage2.php"
	      enctype="multipart/form-data">
         
				Address<input class="mb-2" type="text" name ="img_addr1"  value="<?php echo $address; ?>">
				Property Number<input class="w-25 mb-4" type="text" name ="prop_Id"  value="<?php echo $id; ?>">
          <input class="img-input mb-2" type="file"
                  name="images[]"
									id="images"
									onchange="preview_image();"
                  multiple>
		<button class="btn-upload btn-success mt-2 btnsave btn-lg" type="submit" name="upload">Upload Image</button>

<a class="btn bg-primary btn-lg mx-4 text-white mt-5" href="../house2Listindex.php">Back To List</a>
 	
	</form>	
</div>

	<!-- added -->
	<div class="w-50 h-75 m-2 d-flex flex-column bg-secondary" >
	<div id="bg_imgholder" class="w-100 bg-warning h-75 overflow-hidden">
  <img class="imgholder w-100 h-100" src="../images/imgPholderlight.png" alt="Image placeholder" id="bigImage">
</div>
<div id="image_preview" class="bg-light w-100 h-25 d-flex flex-wrap overflow-auto mb-2"></div>
 
	</div>

</div>   <!-- main-div --> 
</div>
<!-- added -->
    
    <script type="text/javascript">
      function imgFunc() {
        var bigImage = document.getElementById("bigImage");
        var thumbnails = document.getElementById("image_preview");
        thumbnails.addEventListener("click", function(event) {
         if(event.target.tagName == "IMG") {
            bigImage.src = event.target.src;
         }
        }, false);
      }
    window.addEventListener("load", imgFunc(), false);

    </script>


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
										// header("Location: index.php?error=$em");
							}
						}else {
    		//  error message
    		$em = "Unknown Error Occurred while uploading";   		
	    	// redirect to 'index.php' and 
	    	// passing the error message	        
	      header("Location: houselist_index.php?error=$em");
    	
		}

    }	
    $sql = "UPDATE `house2` SET `img_name`='$madeDir' WHERE propId=$id";
   $stmt = $conn->prepare($sql);
   $stmt->execute();
	

   //  redirect to 'house_index.php'
     header("Location: houselist_index.php");	
	}

?>

  </body>
    </html>