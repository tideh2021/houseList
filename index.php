<!-- Property listings displayed list. 
Designed using html, php, bootstrap and very little css(Yes css on this same file; not best practice but it's just few lines of code). It displays the properties in the database. You can delete, update, check details and upload images.
The Action buttons on the left and tltle are are sticky position. The php uses PDO connection to select * from table. 
-->

<?php
$title = "hlist_index";
include_once './include/header.php';
include_once 'db.conn.php';
?>

<style>
  tr th:last-child,
  tr td:last-child {
    position: sticky;
    right: 0;
    background-color: lightblue;
  }
</style>

<div style="padding-top: 70px; padding-left: 20px;">

  <div class="d-flex fixed-top bg-light w-100 mb-5">
    <div class=" text-center py-3 bg-light w-75">
      <h1>House2 List Table</h1>
      <p>Add Image/Update/Details/Delete</p>
    </div>


    <div class="d-flex h-25 py-4 w-25 justify-content-sm-around">
      <a class="btn btn-primary btn-lg" name="addNew_house" href="addToList/index.php">Add To List</a>
      <a class="btn-danger btn-sm" name="close" href="./closebutton.php">Close</a>
    </div>

  </div>


  <div class="table-responsive-xl mt-5">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>ID</th>
          <th>Image</th>
          <th>Address</th>
          <th>City</th>
          <th>Zip Code</th>
          <th>Price</th>
          <th>Agent Name</th>
          <th>List Date</th>
          <th>Built Date </th>
          <th>Property Category</th>
          <th>Property Type</th>
          <th>Heating</th>
          <th>Air Con</th>
          <th>Rooms</th>
          <th>Bathrooms</th>
          <th>Familyroom</th>
          <th>Livingroom</th>
          <th>Dinning Room</th>
          <th>Bedroom1</th>
          <th>Bebroom2</th>
          <th>BedrooRm3</th>
          <th>Bedroom4</th>
          <th>kitchen</th>
          <th>Garage</th>
          <th>Parking</th>
          <th>Add Image/Update/Details/Delete</th>
        </tr>
      </thead>

      <tbody>


        <?php
        # server name
        // include 'db.conn.php';


        // msql query to select * from table
        $query = "SELECT * FROM house2";
        // Establish connection

        $stmt = $conn->query($query);

        // Use the statement to fetch all data in the table
        $data = $stmt->fetchAll();

        ?>

        <!-- php loop/iteration to render table heading -->
        <?php foreach ($data as $row) {
        ?>
          <tr>
            <td><?php echo $row['propId']; ?></td>
            <td><?php echo $row['img_name']; ?></td>
            <td><?php echo $row['propAddr']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['zipCode']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['agent_name']; ?></td>
            <td><?php echo $row['listDate']; ?></td>
            <td><?php echo $row['builtDate']; ?></td>
            <td><?php echo $row['propCategory']; ?></td>
            <td><?php echo $row['propType']; ?></td>
            <td><?php echo $row['heating']; ?></td>
            <td><?php echo $row['aircon']; ?></td>
            <td><?php echo $row['rooms']; ?></td>
            <td><?php echo $row['bathroomQty']; ?></td>
            <td><?php echo $row['famRm']; ?></td>
            <td><?php echo $row['livRm']; ?></td>
            <td><?php echo $row['dinRm']; ?></td>
            <td><?php echo $row['dbRm1']; ?></td>
            <td><?php echo $row['dbRm2']; ?></td>
            <td><?php echo $row['dbRm3']; ?></td>
            <td><?php echo $row['dbRm4']; ?></td>
            <td><?php echo $row['kitRm']; ?></td>
            <td><?php echo $row['garagespace']; ?></td>
            <td><?php echo $row['parkingspace']; ?></td>
            <!-- Buttons for user action Add Image, Delete, Update, Details and Delete -->
            <td>
              <div class="d-flex">
                <div class="d-block w-50">
                  <a class="btn btn-success bt-sm btn-sm" href="./mkdir.php?addImgId=<?= $row['propId'] ?>">Add Image</a>
                  <a class="btn btn-warning btn-sm mt-2 btn-sm" href="./detailsForWeb/index.php?detailsWebId=<?= $row['propId'] ?>">Web Details</a>

                </div>
                <div class="d-block w-50">
                  <a class="btn btn-secondary btn-sm btn-sm" href="./details/index.php?detailsId=<?= $row['propId'] ?>">Details</a>
                  <a class="btn btn-primary bt-sm btn-sm mt-2" href="./update/index.php?uploadId=<?= $row['propId'] ?>">Update</a>
                  <a onclick="return confirm('Are you sure you want to delete this entry?')" class="btn btn-danger btn-sm mt-2 btn-sm" href="delete.php?deleteId=<?= $row['propId'] ?>">Delete</a>
                </div>
              </div>
            </td>
          </tr>
        <?php

        }
        ?>
      </tbody>
    </table>
  </div>


  <?php
  include_once './include/footer.php';
  ?>