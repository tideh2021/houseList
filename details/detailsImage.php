<?php
include '../db.conn.php';
include './headerNoLogo.php';
?>


<?php

if (isset($_GET['detailsId'])) {
  $id = $_GET['detailsId'];

  $imgrow =  "SELECT * FROM house2 WHERE propId=$id";
  $stmt = $conn->prepare($imgrow);
  $stmt->execute();
  $row = $stmt->fetchAll();

  foreach ($row as $item) {
    $pathimg = '.' . $item['img_name'];
    $imgs = scandir($pathimg);
  }
}
?>

<div class=" m-2 d-flex flex-column" style="width: 300px; height:300px;">
  <div id="bg_imgholder" class=" overflow-hidden" style="width: 300px; height:300px; border: 6px solid grey ">
    <?php
    echo '<img class="imgholder w-100 h-100" src="' . $pathimg . '/' . $imgs[2] . '" alt="" id="bigImage" />';
    ?>
  </div>
  <div id="image_preview" class="bg-light w-100 h-25 d-flex flex-wrap overflow-auto mb-2" style="border: 6px solid grey">
    <?php
      foreach (array_splice($imgs, 2) as $pic) {
        echo '<img src ="' . $pathimg . '/' . $pic . '" width="90px" height="90px" style="border:2px solid white" />';
      }
    ?>
  </div>
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
include '../include/footer.php';
?>