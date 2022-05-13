<?php
include_once '../db.conn.php';
// include 'herokuDb.php';
$title = "update/";
include_once '../include/header.php';
include './updateApp.php';

?>



<style>
  .num {
    width: 40px;
  }
  .room-size {
    width: 100px;
  }
  .big-w {
    width: 250px;
  }
 
</style>

<div class="title-div text-center my-5">
  <h1>Update Property</h1>
  <h3 class="text-success">Authorized Staff Only (house2 update/index.php)</h3>
  </div>



  <form  action="" method="POST">
  <div class="page1-wrapper d-flex flew-row">
  <section id="property-details" class="container flex-wrap d-flex bg-primary w-100">

   <div class= " col-sm-4 d-flex flex-column" >
   <label class="my-1 mt-2" for="prop-id">Property ID: 
          <input class="mx-1 num"  value="<?= $id ?>" type="text" id="prop-id" name="prop_id"></label>
   <label class="mb-1" for="agent_name">Agent Name:
   <input class="my-1 clas-md"  value="<?= $oneRow->agent_name; ?>" id="name" type="text" name="agent_name"></label>
   <label class="my-1" for="Sqft">Square Footage:
    <input class="my-1 room-size" value="<?= $oneRow->sqftAge; ?>" type="text" id="sqft" name="sqft"></label> 
    <label class="my-1" for="">House Type:
    <input class="my-1"  value="<?= $oneRow->propType; ?>" type="text" id="house_type" name="house_type"></label> 
    <label class="my-1" for="garagespace">Garage Space:
    <input class="my-1 num" value="<?= $oneRow->garagespace; ?>" class="sm-input box1" type="text" id="garagespace" name="garagespace" ></label>
    <label class="my-1" for="parkingspace">Parking Space:
    <input class="my-1 num" value="<?= $oneRow->parkingspace; ?>" class="sm-input box1" type="text" id="parkingspace" name="parkingspace" ></label>
    </div>
     
   <div class="col-sm-4 d-flex flex-column">
   <label class="my-1" for="address">Address:
   <input  class="my-1 big-w"  value="<?= $oneRow->propAddr; ?>" id="propAddr" type="text" name="propAddr"></label> 
   <label class="my-1" for="city">City
   <input  class="my-1" value="<?= $oneRow->city; ?>" id="city" type="text" name="city"></label> 


    <label class="my-1 col-xs-2" for="zipcode">Zip Code:
    <input class="my-1 room-size"  value="<?= $oneRow->zipCode; ?>" type="text" pattern="\d{5}(?:-\d{4})?|[a-zA-Z]\d[a-zA-Z] ?\d[a-zA-Z]\d" id="zipcode"
            name="zipcode" /></label>
    <label class="my-1" for="price">Price:
    <input class="my-1" value="<?= $oneRow->price; ?>" type="text" id="price" name="price"> </label>  
    <label class="my-1" for="bathroom-qty">Bathrooms:
    <input class="my-1 num"
    value="<?= $oneRow->bathroomQty; ?>" class="sm-input box1" type="text" id="bathroom-qty" name="bathroom_qty"></label>   
    </div>

    <div class="col-sm-4 d-flex flex-column">
    <label class="my-1" for="listtime">List Date: 
    <input class="my-1" value="<?= $oneRow->listDate; ?>"  id="listtime" name="listtime" value="" ></label> 
    <label class="my-1" for="builddate">Build Date(YYYY-MM-DD): 
    <input class="my-1 room-size" value="<?= $oneRow->builtDate; ?>" id="bulddate" name="builddate" ></label> 
    <label class="my-1" for="propertytype">Property Detach/Semi/etc:
    <input class="my-1 room-size"  value="<?= $oneRow->propCategory; ?>" type="text" id="propertytype" name="propertytype"></label>
    
    
      
    <label class="my-1" for="rooms">Rooms:
    <input class="my-1 num" value="<?= $oneRow->rooms; ?>" type="text" id="rooms" name="rooms"></label>
    <label class="my-1" class="label-bold box1" for="heating">Heating:
    <input class="my-1 num" value="<?= $oneRow->heating; ?>" type="text" id="heating" name="heating"></label>
    <label class="mx-1" class="label-bold" for="aircon"> Air Conditioning(YES/NO):
    <input class="my-1 num" value="<?= $oneRow->aircon; ?>" type="text" id="aircon" name="aircon"></label>
    </div>

    </div>
  
  </section>
  </div>  
<!-- livingroom -->
<section class="bedrooms container bg-secondary py-3">
  <div class="d-flex flew-row flex-wrap">
<div class="livingroom rooms d-flex flex-column col-4 form-switch-lg" id="liv_rm">
              <label class="fw-bold"> Living Room:</label> 
              <label for="livingsize">Livingroom Size:       
              <input class="room-size" type="text" id="livingsize" name="liv_rm[0]" value="<?php echo $liv_rm[0]; ?>"> </label> 

              <label for="fireplace-lrm"> <input value="fire Place" <?php if(in_array("fire Place",$liv_rm)) echo "checked";?> type="checkbox" id="fireplace_lrm" name="liv_rm[]" value="Fire Place">
               Fire Place</label>

               <label for="hardwood-lrm"><input type="checkbox" id="hardwood-lrm" name="liv_rm[]" value="Hardwood" <?php if(in_array("Hardwood",$liv_rm)) echo "checked";?>>
              Hardwood Floor</label>
              <label for="carpet-lrm"><input type="checkbox" id="carpet-lrm" name="liv_rm[]" value="Carpet" <?php if(in_array("Carpet",$liv_rm)) echo "checked";?>>
             Carpet Floor</label>
             <label for="laminate-lrm"><input type="checkbox" id="laminate-lrm" name="liv_rm[]" value="Laminate" <?php if(in_array("Laminate",$liv_rm)) echo "checked";?>>
             Laminate Floor</label>
             <label for="vinyl-lrm"><input type="checkbox" id="vinyl-lrm" name="liv_rm[]" value="Vinyl" <?php if(in_array("Vinyl",$liv_rm)) echo "checked";?>>
             Vinyl Floor</label>
                     
            </div> 

            <!-- Family Room -->
<div class="familyroom rooms d-flex flex-column col-4" id="fam-rm">
            <label class="fw-bold">Family Room:</label>
            <label for="familysize">Familyroom Size:
            <input class="room-size" type="text" id="familysize" name="fam_rm[0]" value="<?php echo $fam_rm[0]; ?>"></label>
            <label for="fireplace-lrm"><input value="fire Place"  <?php if(in_array("fire Place",$fam_rm)) echo "checked";?> type="checkbox" id="fireplace_lrm" name="fam_rm[]" value="Fire Place">
              Fire Place</label>
              <label for="hardwood-lrm"><input type="checkbox" id="hardwood-lrm" name="fam_rm[]" value="Hardwood" <?php if(in_array("Hardwood",$fam_rm)) echo "checked";?>>
              Hardwood Floor</label>
              <label for="carpet-lrm"><input type="checkbox" id="carpet-lrm" name="fam_rm[]" value="Carpet" <?php if(in_array("Carpet",$fam_rm)) echo "checked";?>>
               Carpet Floor</label>
              <label for="laminate-lrm"><input type="checkbox" id="laminate-lrm" name="fam_rm[]" value="Laminate" <?php if(in_array("Laminate",$fam_rm)) echo "checked";?>>
              Laminate Floor</label>
              <label for="vinyl-lrm"><input type="checkbox" name="fam_rm[]" value="Vinyl" <?php if(in_array("Vinyl",$fam_rm)) echo "checked";?>>
              Vinyl Floor</label>

          </div>

<!-- Dining room -->
<div class="diningroom rooms d-flex flex-column col-4" id="din-rm">
            <label class="fw-bold">Dining Room: </label>
            <label for="diningsize">Dining Room Size:
            <input class="room-size" type="text" name="din_rm[0]" value="<?php echo $din_rm[0]; ?>" ></label>
            <label for="fireplace-lrm"><input value="fire Place"  <?php if(in_array("fire Place",$din_rm)) echo "checked";?> type="checkbox" name="din_rm[]" value="Fire Place">
              Fire Place</label>
              <label for="hardwood-lrm"><input type="checkbox" name="din_rm[]" value="Hardwood" <?php if(in_array("Hardwood",$din_rm)) echo "checked";?>>
             Hardwood Floor</label>
             <label for="carpet-lrm"><input type="checkbox"  name="din_rm[]" value="Carpet" <?php if(in_array("Carpet",$din_rm)) echo "checked";?>>
              Carpet Floor</label>
              <label for="laminate-lrm"><input type="checkbox" name="din_rm[]" value="Laminate" <?php if(in_array("Laminate",$din_rm)) echo "checked";?>>
              Laminate Floor</label>
              <label for="vinyl-lrm"><input type="checkbox" name="din_rm[]" value="Vinyl" <?php if(in_array("Vinyl",$din_rm)) echo "checked";?>>
              Vinyl Floor</label>
            </div>


<!-- Bedrooms -->
    <div class="bedrm1 d-flex flex-column col-4 mt-3">

   <label class="fw-bold">Bedroom1:</label>
   <label for="roomsize-rm1">Room Size:
    <input class="room-size" type="text" id="roomsize-rm1" name="bd_rm1[0]" value="<?php echo $bd_rm1[0]; ?>"> </label>
    <label for=""><input type="checkbox" name="bd_rm1[]" value="fire Place"  <?php if(in_array("fire Place",$bd_rm1)) echo "checked";?> > Fire Place</label>
  
   
    <label for=""><input type="checkbox" name="bd_rm1[]" value="Walk in Closet" <?php if(in_array("Walk in Closet",$bd_rm1)) echo "checked";?>>Walk in Closet</label>

    <label for=""><input type="checkbox" name= "bd_rm1[]" value="Closet" <?php if(in_array("Closet",$bd_rm1)) echo "checked";?>> Closet</label>
  
    <label for=""><input  type="checkbox" name="bd_rm1[]" value="Hardwood" <?php if(in_array("Hardwood",$bd_rm1)) echo "checked";?>> Hardwood</label>
   
    <label for=""><input type="checkbox"  name="bd_rm1[]" value="Carpet" <?php if(in_array("Carpet",$bd_rm1)) echo "checked";?>>Carpet</label>

    <label for="laminate-lrm"><input type="checkbox" name="bd_rm1[]" value="Laminate" <?php if(in_array("Laminate",$bd_rm1)) echo "checked";?>> Laminate Floor</label>
 
    <label for=""><input type="checkbox"  name="bd_rm1[]" value="Vinyl" <?php if(in_array("Vinyl",$bd_rm1)) echo "checked";?>>Vinyl</label> 
   </div>
<!-- Bedroom 2 -->
<div class="bedrm2 d-flex flex-column col-4 mt-3">
   <label class="fw-bold">Bedroom2:</label> 
   <label for="roomsize-rm2">Room Size:
    <input class="room-size" type="text" id="roomsize-rm2" name="bd_rm2[0]" value="<?php echo $bd_rm2[0]; ?>"></label>
    <label for=""><input type="checkbox" name="bd_rm2[]" value="fire Place" <?php if(in_array("fire Place",$bd_rm2)) echo "checked";?>> Fire Place</label>
   
    <label for=""><input type="checkbox" name="bd_rm2[]" value="Walk in Closet" <?php if(in_array("Walk in Closet",$bd_rm2)) echo "checked";?>>Walk in Closet</label>

    <label for=""><input type="checkbox" name="bd_rm2[]" value="Closet" <?php if(in_array("Closet",$bd_rm2)) echo "checked";?>> Closet</label>
    <label for=""><input type="checkbox" name="bd_rm2[]" value="Hardwood" <?php if(in_array("Hardwood",$bd_rm2)) echo "checked";?>> Hardwood</label>
   
    <label for=""><input type="checkbox"  name="bd_rm2[]" value="Carpet" <?php if(in_array("Carpet",$bd_rm2)) echo "checked";?>>Carpet</label>
 
    <label for="laminate-lrm"> <input type="checkbox" id="laminate-lrm" name="bd_rm2[]" value="Laminate" <?php if(in_array("Laminate",$bd_rm2)) echo "checked";?>> Laminate Floor</label>

    <label for=""><input type="checkbox"  name="bd_rm2[]" value="Vinyl" <?php if(in_array("Vinyl",$bd_rm2)) echo "checked";?>>Vinyl Floor</label>
   </div>

<!-- Bedroom 3 -->
<div class="bedrm3 d-flex flex-column col-4 mt-3">
   <label class="fw-bold">Bedroom3:</label> 
   <label for="roomsize-rm3">Room Size:
    <input class="room-size" type="text" id="roomsize-rm3" name="bd_rm3[0]" value="<?php echo $bd_rm3[0]; ?>"></label>
    <label for=""><input type="checkbox" name="bd_rm3[]" value="fire Place" <?php if(in_array("fire Place",$bd_rm3)) echo "checked";?>> Fire Place</label>
   
    <label for=""><input type="checkbox" name="bd_rm3[]" value="Walk in Closet" <?php if(in_array("Walk in Closet",$bd_rm3)) echo "checked";?>>Walk in Closet</label>

    <label for=""><input type="checkbox" name="bd_rm3[]" value="Closet" <?php if(in_array("Closet",$bd_rm3)) echo "checked";?>> Closet</label>
    <label for=""><input type="checkbox" name="bd_rm3[]" value="Hardwood" <?php if(in_array("Hardwood",$bd_rm3)) echo "checked";?>> Hardwood Floor</label>
   
   <label for=""><input type="checkbox"  name="bd_rm3[]" value="Carpet" <?php if(in_array("Carpet",$bd_rm3)) echo "checked";?>>Carpet Floor</label>
   <label for="laminate-lrm"><input type="checkbox" id="laminate-lrm" name="bd_rm3[]" value="Laminate" <?php if(in_array("Laminate",$bd_rm3)) echo "checked";?>>
   Laminate Floor</label>
   <label for=""><input type="checkbox"  name="bd_rm3[]" value="Vinyl" <?php if(in_array("Vinyl",$bd_rm3)) echo "checked";?>>Vinyl Floor</label> 
   </div>
   <!-- Bedroom 4 -->
   <div class="bedrm4 d-flex flex-column col-4 mt-3">
   <label class="fw-bold">Bedroom4:</label> 
   <label for="roomsize-rm4">Room Size:
    <input class="room-size" type="text" id="roomsize-rm4" name="bd_rm4[0]" value="<?php echo $bd_rm4[0]; ?>"></label>
    <label for=""><input type="checkbox" name="bd_rm4[]" value="fire Place" <?php if(in_array("fire Place",$bd_rm4)) echo "checked";?>> Fire Place</label>
   
    <label for=""><input type="checkbox" name="bd_rm4[]" value="Walk in Closet" <?php if(in_array("Walk in Closet",$bd_rm4)) echo "checked";?>>Walk in Closet</label>

    <label for=""><input type="checkbox" name="bd_rm4[]" value="Closet" <?php if(in_array("Closet",$bd_rm4)) echo "checked";?>> Closet Floor</label>
    <label for=""><input type="checkbox" name="bd_rm4[]" value="Hardwood" <?php if(in_array("Hardwood",$bd_rm4)) echo "checked";?>>Hardwood Floor</label>
    <label for="laminate-lrm"><input type="checkbox" id="laminate-lrm" name="bd_rm4[]" value="Laminate" <?php if(in_array("Laminate",$bd_rm4)) echo "checked";?>>Laminate Floor</label>
    <label for=""><input type="checkbox"  name="bd_rm4[]" value="Carpet" <?php if(in_array("Carpet",$bd_rm4)) echo "checked";?>>Carpet Floor</label>
 
    <label for=""><input type="checkbox"  name="bd_rm4[]" value="Vinyl" <?php if(in_array("Vinyl",$bd_rm4)) echo "checked";?>>Vinyl Floor</label>
   </div>

        <!-- kitchen -->
        <div class="kitchen rooms d-flex flex-column col-4 mt-3" id="kit-rm">
            <label class="fw-bold">Kitchen:</label>
            <label for="kitchensize">Kitchen Size:
            <input class="room-size" type="text" id="kitchensize" name="kit_rm[0]" value="<?php echo $kit_rm[0]; ?>" ></label>
            <label for="kitchen-appl">Comes With:
            <input type="text" id="kitchen-appl" name="kit_rm[]"></label>
            <label for="fireplace-lrm"><input value="fire Place"  <?php if(in_array("fire Place",$kit_rm)) echo "checked";?> type="checkbox" id="fireplace_lrm" name="kit_rm[]" value="Fire Place">
             Fire Place</label>
             <label for="hardwood-lrm"><input type="checkbox" id="hardwood-lrm" name="kit_rm[]" value="Hardwood" <?php if(in_array("Hardwood",$kit_rm)) echo "checked";?>>             Hardwood Floor</label>
             <label for="carpet-lrm"><input type="checkbox" id="carpet-lrm" name="kit_rm[]" value="Carpet" <?php if(in_array("Carpet",$kit_rm)) echo "checked";?>>Carpet Floor</label>
             <label for="laminate-lrm"><input type="checkbox" id="laminate-lrm" name="kit_rm[]" value="Laminate" <?php if(in_array("Laminate",$kit_rm)) echo "checked";?>>
            Laminate Floor</label>
            <label for="vinyl-lrm"><input type="checkbox" id="vinyl-lrm" name="kit_rm[]" value="Vinyl" <?php if(in_array("Vinyl",$kit_rm)) echo "checked";?>>
              Vinyl Floor</label>
          </div> 
 </section>
 </div>
 <div class="col text-center">
<button class="btn btn-lg btn-primary my-4" type="submit" name="update3">Update</button>
</div>
  </form> 
<?php
include '../include/footer.php';
?>