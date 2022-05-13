<?php
include_once '../db.conn.php';
// include 'herokuDb.php';
$title = "details/index";
include_once "../include/header.php";


?>
<div class="main-div w-100 px-auto">
  <div class="container-fluid d-md-nowrap d-sm-wrap">
    <div class="row" style="display: flex; gap: 20px">
      <div class="col-sm-8 mx-auto pt-3">
        <div class="w-100 row">
          <div class="col-sm-6">
            <?php
            include './detailsApp.php';
            ?>
          </div>

          <div class="col-sm-4 col-sm-offset-3" style="height:350px;">
            <?php
            include_once './detailsImage.php';
            ?>
          </div>
          <div class="col-sm-6 mx-auto" style=" width: 500px;">
            <!-- table-sm caption-top text-nowrap table-bordered padding: 20px; margin: 30px 200px;-->
            <table class="table table-sm caption-top table-bordered">
              <caption class="text-capitalize fs-3 fw-bold">Rooms Details</caption>
              <thead class="th-sm">
                <tr>
                  <th scope="col">Room</th>
                  <th scope="col">Size</th>
                  <th scope="col">Description</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Livingroom</td>
                  <td><?php echo $liv_rm[0]; ?></td>
                  <td><?php printArray($liv_rm); ?></td>
                </tr>
                <tr>
                  <td>Family Room </td>
                  <td><?php echo $fam_rm[0]; ?></td>
                  <td><?php printArray($fam_rm); ?></td>
                </tr>
                <tr>
                  <td>Dining Room </td>
                  <td><?php echo $din_rm[0]; ?></td>
                  <td><?php printArray($din_rm); ?></td>
                </tr>
                <tr>
                  <td>Bedroom 1</td>
                  <td><?php echo $bd_rm1[0]; ?></td>
                  <td><?php printArray($bd_rm1); ?></td>
                </tr>

                <tr>
                  <td>Bedroom 2</td>
                  <td><?php echo $bd_rm2[0]; ?></td>
                  <td><?php printArray($bd_rm2); ?></td>
                </tr>

                <tr>
                  <td>Bedroom 3</td>
                  <td><?php echo $bd_rm3[0]; ?></td>
                  <td><?php printArray($bd_rm3); ?></td>
                </tr>

                <tr>
                  <td>Bedroom 4 </td>
                  <td><?php echo $bd_rm4[0]; ?></td>
                  <td><?php printArray($bd_rm4); ?></td>
                </tr>
                <tr>
                  <td>Kitchen </td>
                  <td><?php echo $kit_rm[0]; ?></td>
                  <td><?php printArray($kit_rm); ?></td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>

      </div>
      <!-- here -->
    </div>
  </div>
  <!-- link to the list table button, printer button -->
  <div class="d-flex justify-content-evenly gap-5 my-5">
    <a class="btn btn-primary bt-sm btn-sm" href="../index.php">Back to List</a>
    <button onclick="window.print();" id="print-btn" class="btn btn-dark text-center "> Print</button>
  </div>
  <!-- main-div -->
</div>

<!-- Adding the footer -->
<?php

include '../include/footer.php';
?>