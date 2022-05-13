<!--addToList/index.php displays the fields for each property to staff (user).
 Then it includes ../include/header.php, ../include/footer.php and svae.php to save the input in database.
The .css file is not working with the php so, i have to use bootstrap.
 -->
<?php
$title ="AddToList/index";
include "../include/header.php";


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
  <h1>Save Property Info</h1>
  <h3 class="text-success">Authorized Staff Only (house2 addToList/index.php )</h3>
  </div>
<!-- POST method , action is save.php -->
  <form action="save.php" method="POST" >
  <div class="page1-wrapper d-flex flew-row">
  <section id="property-details" class="container flex-wrap d-flex bg-primary w-100">
   <div class= " col-4 d-flex flex-column" >
   <label class="my-1 mt-2" for="prop-id">Property ID: 
   <input class="mx-1 num" type="text" id="prop-id" name="prop_id"></label>
   <label class="mb-1" for="agent_name">Agent Name:
   <input class="my-1 clas-md"  id="name" type="text" name="agent_name"></label>
   <label class="my-1" for="Sqft">Square Footage:
    <input class="my-1 room-size" type="text" id="sqft" name="sqft"></label> 
    <label class="my-1" for="">House Type:
    <input class="my-1" type="text" id="house_type" name="house_type"></label> 
    <label class="my-1" for="garagespace">Garage Space:
    <input class="my-1 num" class="sm-input box1" type="text" id="garagespace" name="garagespace" ></label>
    <label class="my-1" for="parkingspace">Parking Space:
    <input class="my-1 num" class="sm-input box1" type="text" id="parkingspace" name="parkingspace" ></label>
    </div>
   <div class="col-4 d-flex flex-column">
   <label class="my-1" for="address">Address:
   <input  class="my-1 big-w" id="address" type="text" name="address"></label> 
   <label class="my-1" for="city">City
   <input  class="my-1" id="city" type="text" name="city"></label> 
    <label class="my-1 col-xs-2" for="zipcode">Zip Code:
    <input class="my-1 room-size" type="text" pattern="\d{5}(?:-\d{4})?|[a-zA-Z]\d[a-zA-Z] ?\d[a-zA-Z]\d" id="zipcode"  name="zipcode" /></label>
    <label class="my-1" for="price">Price:
    <input class="my-1" type="text" id="price" name="price"> </label>  
    <label class="my-1" for="bathroom-qty">Bathrooms:
    <input class="my-1 num"
     class="sm-input box1" type="text" id="bathroom-qty" name="bathroom_qty"></label>   
    </div>
    <div class="col-4 d-flex flex-column">
    <label class="my-1" for="listtime">List Date: 
    <input class="my-1" id="listtime" name="listtime" value="" ></label> 
    <label class="my-1" for="builddate">Build Date(YYYY-MM-DD): 
    <input class="my-1 room-size" id="bulddate" name="builddate" ></label> 
    <label class="my-1" for="propertytype">Property Detach/Semi/etc:
    <input class="my-1 room-size" type="text" id="propertytype" name="propertytype"></label>
    <label class="my-1" for="rooms">Rooms:
    <input class="my-1 num" type="text" id="rooms" name="rooms"></label>
    <label class="my-1" class="label-bold box1" for="heating">Heating:
    <input class="my-1 num" type="text" id="heating" name="heating"></label>
    <label class="mx-1" class="label-bold" for="aircon"> Air Conditioning(YES/NO):
    <input class="my-1 num" type="text" id="aircon" name="aircon"></label>
    </div>
    </div>
  
  </section>
  </div>  
<!-- livingroom -->
<section class="bedrooms container bg-secondary py-3">
  <div class="d-flex flew-row flex-wrap">
<div class="livingroom rooms d-flex flex-column col-4" id="liv_rm">
              <label class="fw-bold"> Living Room:</label> 
              <label for="livingsize">Livingroom Size:       
              <input class="room-size" type="text" id="livingsize" name="liv_rm[0]"> </label> 
              <label for="fireplace-lrm"> <input value="fire Place" type="checkbox" id="fireplace_lrm" name="liv_rm[]" value="Fire Place">
               Fire Place</label>
               <label for="hardwood-lrm"><input type="checkbox"  name="liv_rm[]" value="Hardwood">
              Hardwood Floor</label>
              <label for="carpet-lrm"><input type="checkbox"  name="liv_rm[]" value="Carpet">
             Carpet Floor</label>
             <label for="laminate-lrm"><input type="checkbox" name="liv_rm[]" value="Laminate">
             Laminate Floor</label>
             <label for="vinyl-lrm"><input type="checkbox" name="liv_rm[]" value="Vinyl">
             Vinyl Floor</label>
          </div> 

            <!-- Family Room -->
<div class="familyroom rooms d-flex flex-column col-4" id="fam-rm">
            <label class="fw-bold"> Family Room:</label>
            <label for="familysize"> Familyroom Size:
            <input class="room-size" type="text" id="familysize" name="fam_rm[0]"></label>
            <label for="fireplace-fam"><input value="fire Place" type="checkbox" id="fireplace_lrm" name="fam_rm[]" value="Fire Place"> Fire Place</label>
              <label for="hardwood-fam"><input type="checkbox" id="hardwood-fam" name="fam_rm[]" value="Hardwood"> Hardwood Floor</label>
              <label for="carpet-fam"><input type="checkbox" id="carpet-fam" name="fam_rm[]" value="Carpet">
               Carpet Floor</label>
              <label for="laminate-fam"><input type="checkbox" name="fam_rm[]" value="Laminate">
              Laminate Floor</label>
              <label for="vinyl-fam"><input type="checkbox" name="fam_rm[]" value="Vinyl">
              Vinyl Floor</label>

          </div>

<!-- Dining room -->
<div class="diningroom rooms d-flex flex-column col-4" id="din-rm">
            <label class="fw-bold"> Dining Room: </label>
            <label for="diningsize"> Dining Room Size:
            <input class="room-size" type="text" name="din_rm[0]"></label>
            <label for="hardwood-lrm"><input type="checkbox" name="din_rm[]" value="Hardwood"> Hardwood Floor</label>
             <label for="carpet-lrm"><input type="checkbox"  name="din_rm[]" value="Carpet"> Carpet Floor</label>
              <label for="laminate-lrm"><input type="checkbox" name="din_rm[]" value="Laminate"> Laminate Floor</label>
              <label for="vinyl-lrm"><input type="checkbox" name="din_rm[]" value="Vinyl">
               Vinyl Floor</label>
            </div>


<!-- Bedrooms -->
    <div class="bedrm1 d-flex flex-column col-4 mt-3">
   <label class="fw-bold">Bedroom1:</label>
   <label for="roomsize-rm1">Room Size:
    <input class="room-size" type="text" id="roomsize-rm1" name="bd_rm1[0]"> </label>
    <label for=""><input type="checkbox" name="bd_rm1[]" value="Walk in Closet"> Walk  Closet</label>
    <label for=""><input type="checkbox" name= "bd_rm1[]" value="Closet"> Closet</label> 
    <label for=""><input  type="checkbox" name="bd_rm1[]" value="Hardwood"> Hardwood</label>
    <label for=""><input type="checkbox"  name="bd_rm1[]" value="Carpet"> Carpet</label>
   <label for="laminate-lrm"><input type="checkbox" name="bd_rm1[]" value="Laminate"> Laminate Floor</label>
   <label for=""><input type="checkbox"  name="bd_rm1[]" value="Vinyl"> Vinyl</label> 
   </div>
<!-- Bedroom 2 -->
<div class="bedrm2 d-flex flex-column col-4 mt-3">
   <label class="fw-bold">Bedroom2:</label> 
   <label for="roomsize-rm2">Room Size:
    <input class="room-size" type="text" id="roomsize-rm2" name="bd_rm2[0]"></label>
       <label for=""><input type="checkbox" name="bd_rm2[]" value="Walk in Closet"> Walk in Closet</label>
    <label for=""><input type="checkbox" name="bd_rm2[]" value="Closet"> Closet</label>
    <label for=""><input type="checkbox" name="bd_rm2[]" value="Hardwood"> Hardwood</label>
    <label for=""><input type="checkbox"  name="bd_rm2[]" value="Carpet"> Carpet</label>
     <label for="laminate-rm2"> <input type="checkbox"  name="bd_rm2[]" value="Laminate"> Laminate Floor</label>
   <label for=""><input type="checkbox"  name="bd_rm2[]" value="Vinyl"> Vinyl Floor</label>
   </div>

<!-- Bedroom 3 -->
<div class="bedrm3 d-flex flex-column col-4 mt-3">
   <label class="fw-bold">Bedroom3:</label> 
   <label for="roomsize-rm3">Room Size:
    <input class="room-size" type="text" id="roomsize-rm3" name="bd_rm3[0]"></label>
       <label for=""><input type="checkbox" name="bd_rm3[]" value="Walk in Closet">Walk in Closet</label>
    <label for=""><input type="checkbox" name="bd_rm3[]" value="Closet"> Closet</label>
    <label for=""><input type="checkbox" name="bd_rm3[]" value="Hardwood"> Hardwood Floor</label>
    <label for=""><input type="checkbox"  name="bd_rm3[]" value="Carpet"> Carpet Floor</label>
   <label for="laminate-lrm"><input type="checkbox" id="laminate-lrm" name="bd_rm3[]" value="Laminate">
    Laminate Floor</label>
   <label for=""><input type="checkbox"  name="bd_rm3[]" value="Vinyl"> Vinyl Floor</label> 
   </div>
   <!-- Bedroom 4 -->
    <div class="bedrm4 d-flex flex-column col-4 mt-3">
    <label class="fw-bold">Bedroom4:</label> 
    <label for="roomsize-rm4">Room Size:
    <input class="room-size" type="text" id="roomsize-rm4" name="bd_rm4[0]"></label>
    <label for=""><input type="checkbox" name="bd_rm4[]" value="Walk in Closet"> Walk in Closet</label>
    <label for=""><input type="checkbox" name="bd_rm4[]" value="Closet"> Closet Floor</label>
    <label for=""><input type="checkbox" name="bd_rm4[]" value="Hardwood"> Hardwood Floor</label>
    <label ><input type="checkbox"  name="bd_rm4[]" value="Laminate"> Laminate Floor</label>
    <label for=""><input type="checkbox"  name="bd_rm4[]" value="Carpet"> Carpet Floor</label>
     <label for=""><input type="checkbox"  name="bd_rm4[]" value="Vinyl"> Vinyl Floor</label>
   </div>

        <!-- kitchen -->
        <div class="kitchen rooms d-flex flex-column col-4 mt-3" id="kit-rm">
            <label class="fw-bold">Kitchen:</label>
            <label for="kitchensize">Kitchen Size:
              <input class="room-size" type="text" name="kit_rm[0]"></label>
              <label for="kitchen-appl"> Comes With:
              <input class="room-size" type="text" name="kit_rm[]"></label>
             <label for="hardwood-lrm"><input type="checkbox"  name="kit_rm[]" value="Hardwood"> Hardwood Floor</label>
             <label for="carpet-lrm"><input type="checkbox"  name="kit_rm[]" value="Carpet" > Carpet Floor</label>
             <label for="laminate-kit"><input type="checkbox"  name="kit_rm[]" value="Laminate"> Laminate Floor</label>
            <label for="vinyl-kit"><input type="checkbox"  name="kit_rm[]" value="Vinyl"> Vinyl Floor</label>
          </div> 
 </section>
 </div>
 <?
 include './save.php';
 ?>
 <div class="col text-center">
  <button class="btn btn-lg btn-primary my-4"  type="submit" id="save-btn" name="save">SAVE PROPRETY DETAILS</button>      
</div>
  </form> 

<?php
include '../include/footer.php';
?>



