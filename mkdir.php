<!-- mkdir.php makes a connection to the database when the add Image is clicked in the list table.
Gets the address and property Id.
Opens the upload dialog, uploads the images, the images are displayed in the carousel box.
saves the images to ./uploads/ in the present directory.
Back to list button take user to list table.
Image is previewed on the div with #image_preview.
When the small image is clicked it displays on the big image window div #bg_imgholder.
Javascript imgFunc() is used to listen for the click event, when small image is clicked; displays the image in the bigger window 

-->

<?php
 include 'db.conn.php';

include './include/header.php';
?>


<?php

if (isset($_GET['addImgId'])) {

  $id = $_GET['addImgId'];
  // Test to find out what... will be removed
  $imgrow =  "SELECT * FROM house2 WHERE propId=$id";
  // $stmt = $conn->query($imgrow);
  $stmt = $conn->prepare($imgrow);
  $stmt->execute();
  while ($row = $stmt->fetch()) {
    $address = $row['propAddr'];
  }
}
?>

<style>
  .wrapper {
    width: 700px;
    height: 400px;
  }

  .d_none {
    display: none;
  }
</style>

<div class="wrapper d-flex flex-column mt-5 mx-auto py-3">
  <div class="bg-warning text-center">
    <h1>Add Image</h1>
    <p>Employee Only</p>
  </div>

  <div class="main-div w-100 h-100 d-flex flex-row">
    <div class="card-body my-2 w-50 h-75 px-2">
      <form class="d-block p-2" method="post" enctype="multipart/form-data">

        Address<input class="mb-2 mx-2" type="text" name="img_addr1" value="<?php echo $address; ?>">
        Property Number<input class="w-25 mb-4 mx-2" type="text" name="prop_Id" value="<?php echo $id; ?>">
        <input class="img-input mb-2" type="file" name="images[]" id="images" onchange="preview_image();" multiple>
        <button class="btn-upload btn-success mt-2 btnsave btn-lg" type="submit" name="upload">Upload Image</button>

        <a class="btn bg-primary btn-lg mx-4 text-white mt-5" href="./index.php">Back To List</a>

      </form>
    </div>

    <?php
    if (isset($_POST['upload'])) {
      $address = $_POST['img_addr1'];
      $id = $_POST['prop_Id'];
      $images = $_FILES['images'];
      $countfiles = count($_FILES['images']['name']);

      $path = './uploads/' . $address;
      $path = mkdir($path, 0777);
      if (!isset($path)) {
        mkdir($path, 0777);
      }

      if (isset($path)) {
        // Looping through all files
        for ($i = 0; $i < $countfiles; $i++) {
          $filename = $_FILES['images']['name'][$i];
          // Upload file $filename
          move_uploaded_file($_FILES['images']['tmp_name'][$i], './uploads/' . $address . '/' . $filename);
        }

        $path1 = "./uploads/" . $address;
        $total_img = scandir($path1);
         print_r($total_img);
        print_r($path1);
        // count the images in the directory
        $count = count($total_img);
        // Insert into database
        $sql = "UPDATE `house2` SET `img_name`='$path1' WHERE propId=$id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
      }
    }
    ?>

    <!-- added -->
    <div class="w-50 h-75 m-2 d-flex flex-column bg-secondary">
      <div id="bg_imgholder" class="w-100 bg-warning h-75 overflow-hidden">
        <img class="imgholder w-100 h-100" src="./images/imgPholderlight.png" alt="Image placeholder" id="bigImage">
          </div>
            <div id="image_preview" class="bg-light w-100 h-25 d-flex flex-wrap overflow-auto mb-2">
              <?php
              if (isset($total_img)) {
                // start the loop from the 3rd fie in the directory, because every dir created starts with . and .. files.                  
                  foreach (array_splice($total_img, 2) as $img) {
                echo '<img src="' . $path1 . '/' . $img . '" width="80" height="80" style="border:2px solid white" />';
                }
              }
              ?>
            </div>
          </div>
      </div> <!-- main-div -->
    </div>
<!-- Javscript for the thumbnails  -->
<script type="text/javascript">
  function imgFunc() {
    var bigImage = document.getElementById("bigImage");
    var thumbnails = document.getElementById("image_preview");
    thumbnails.addEventListener("click", function(event) {
      if (event.target.tagName == "IMG") {
        bigImage.src = event.target.src;
      }
    }, false);
  }
  window.addEventListener("load", imgFunc(), false);
</script>

<?php
include './include/footer.php';
?>