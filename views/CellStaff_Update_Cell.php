
<?php include "CellStaff_Header_Manu.php" ?>

<?php


require_once ('../contollers/CellStaffContoller.php');

$cId = $_GET["id"];

$cell=getCell($cId);





 ?>
  <h2  class="mx-auto mt-3" style="width: 200px ;">Upgrade Cell</h2>
 <form class="needs-validation"enctype="multipart/form-data" method="post"  novalidate>
   <div class="form-row" >

     <div class="col-md-4 mb-3">
       <label for="validationCustom01">Cell Id</label>
       <input type="text" class="form-control" id="validationCustom01" value="<?php echo $cell["cellId"] ?>" disabled>
       <div class="valid-feedback">
         Looks good!
       </div>


     </div>
     <div class="col-md-4 mb-3">
       <label for="validationCustom02">Guilt Cell</label>
       <input type="text" class="form-control" id="validationCustom02" value="<?php echo $cell["guiltCell"] ?>" disabled>

       <div class="valid-feedback">
         Looks good!
       </div>
     </div>
     <div class="col-md-4 mb-3">
       <label for="validationCustomUsername">Prisoner Limit</label>
       <div class="input-group">
         <div class="input-group-prepend">
         </div>
         <input type="text" class="form-control" id="validationCustomUsername" value="<?php echo $cell["prisonerLimit"] ?>" disabled>
         <div class="invalid-feedback">
           Please choose a username.
         </div>
       </div>
     </div>
   </div>
   <div class="form-row">
     <div class="col-md-6 mb-3">
       <label for="validationCustom03">Add "," then  Add New Prisoner ID</label>
       <input type="text" class="form-control" id="validationCustom03" value="<?php echo $cell["allPrisonerId"] ?>" name="allPrisonerId" required>
       <div class="invalid-feedback">
         Please provide a valid ID .
       </div>
     </div>

     <div class="col-md-3 mb-3">
       <label for="validationCustom05">	Total Prisoner</label>
       <input type="text" class="form-control" id="validationCustom05"  value="<?php echo $cell["allPrisoner"] ?>" name="allPrisoner" required>
       <div class="invalid-feedback" >
         Please Add Total Prisoner.
       </div>
     </div>
   </div>
   <div class="form-group">
     <div class="form-check">
       <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
       <label class="form-check-label" for="invalidCheck">
         Are you sure , you want to update cell  information
       </label>
       <div class="invalid-feedback">
         You must agree before submitting.
       </div>
     </div>
   </div>
   <input type="submit" name="updateCell" value="Update Cell Information" class="btn btn-primary mx-auto mb-3">


 </form>

 <script>
 // Example starter JavaScript for disabling form submissions if there are invalid fields
 (function() {
   'use strict';
   window.addEventListener('load', function() {
     // Fetch all the forms we want to apply custom Bootstrap validation styles to
     var forms = document.getElementsByClassName('needs-validation');
     // Loop over them and prevent submission
     var validation = Array.prototype.filter.call(forms, function(form) {
       form.addEventListener('submit', function(event) {
         if (form.checkValidity() === false) {
           event.preventDefault();
           event.stopPropagation();
         }
         form.classList.add('was-validated');
       }, false);
     });
   }, false);
 })();
 </script>
  <?php  include "CellStaffFooter.php";?>
