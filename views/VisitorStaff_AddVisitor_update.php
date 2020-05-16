


<?php include 'VisitorStaff_Header_Manu.php'; ?>
<?php include '../contollers/VisitorStaffContoller.php'; ?>







<form class="needs-validation ml-4 mr-4 " method="post" action="../contollers/VisitorStaffContoller.php" enctype="multipart/form-data" novalidate>
  <h2 class="mx-auto mt-3 mb-5 "  style="width:400px "> Add Visitor Information </h2>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Visitor Id</label>
      <input type="text" class="form-control" id="validationCustom01" value="" name="id" required>
      <div class="invalid-feedback">
          Please provide a valid Id
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Visitor Name</label>
      <input type="text" class="form-control" id="validationCustom02" value="" name="name" required>
      <div class="invalid-feedback">
        Please provide a valid Name
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Gender</label>
      <div class="input-group">
        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="gender" required>
        <div class="invalid-feedback">
          Please choose Gender.
        </div>
      </div>
    </div>
  </div>


  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">Address</label>
      <input type="text" class="form-control" id="validationCustom03" name="address" required>
      <div class="invalid-feedback">
        Please provide Address.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Phone Number</label>
      <input type="text" class="form-control" id="validationCustom05" name="phoneNumber"  required>
      <div class="invalid-feedback">
        Please provide Phone Number
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Relation with Prisoner</label>
      <input type="text" class="form-control" id="validationCustom05" name="relation" required>
      <div class="invalid-feedback">
        Please provide Relation.
      </div>
    </div>
  </div>





<div class="form-row">
  <div class="col-md-3 mb-3">
    <label for="validationCustom05">Viaiting Date</label>
    <input type="date" class="form-control" id="validationCustom05" name="date"  required>
    <div class="invalid-feedback">
      Please provide Visiting Date
    </div>
  </div>
  <div class="col-md-3 mb-3">
    <label for="validationCustom05">Visiting Time </label>
    <input type="time" class="form-control" id="validationCustom05" name="time" required>
    <div class="invalid-feedback">
      Please provide Visiting Time.
    </div>
  </div>
</div>

<h4>Prisoner Information: </h4>

    <div class="form-row">

      <div class="col-md-3 mb-3">
        <label for="validationCustom01">Prisoner Name</label>
        <input type="text" class="form-control" id="validationCustom01" value=""  name="prisonerName"required>
        <div class="invalid-feedback">
            Please provide Prisoner Name.
        </div>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustom02">Prisoner Id</label>
        <input type="text" class="form-control" id="validationCustom02" value="" name="prisonerId" required>
        <div class="invalid-feedback">
          Please provide a valid Prisoner Id
        </div>
      </div>
    </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Check All Information
      </label>
      <div class="invalid-feedback">
        You must Check All Information before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary mb-3" type="submit" name="add_Visitor">Add Visitor"</button>

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


<?php include 'VisitorStaff_Footer.php'; ?>
