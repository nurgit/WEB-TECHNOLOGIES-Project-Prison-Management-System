<?php include 'PrisonerStaff_Header_Manu.php'; ?>
<?php include '../contollers/PrisonerContoller.php'; ?>




<form class="needs-validation" method="post" action="../contollers/PrisonerContoller.php" novalidate>

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Prisoner Id</label>
      <input type="text" class="form-control" id="validationCustom01" value="" name="id" required>
      <div class="invalid-feedback">
          Please provide a valid Id
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Name</label>
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
      <label for="validationCustom05">Occupation</label>
      <input type="text" class="form-control" id="validationCustom05" name="occupation" required>
      <div class="invalid-feedback">
        Please provide occupation.
      </div>
    </div>
  </div>

    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="validationCustom01">Crime</label>
        <input type="text" class="form-control" id="validationCustom01" value=""  name="crime"required>
        <div class="invalid-feedback">
            Please provide crime.
        </div>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustom02">day</label>
        <input type="text" class="form-control" id="validationCustom02" value="" name="day" required>
        <div class="invalid-feedback">
          Please provide a valid Name
        </div>
      </div>

      <div class="col-md-2 mb-3">
        <label for="validationCustomUsername">Start Date</label>
        <div class="input-group">
          <input type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="startDate"required>
          <div class="invalid-feedback">
            Select Start Date ..
          </div>
        </div>
      </div>
      <div class="col-md-2 mb-3">
        <label for="validationCustomUsername">End Date</label>
        <div class="input-group">
          <input type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="endDate" required>
          <div class="invalid-feedback">
            Select End Date .
          </div>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <label for="validationCustomUsername">Notes</label>
        <div class="input-group">
          <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="endDate" name="notes" required>
          <div class="invalid-feedback">
            Write note .
          </div>
        </div>
      </div>

    </div>
    <div class="form-row">
      <div class="col-md-3 mb-3">
        <label for="validationCustomUsername">Select Image</label>
        <div class="input-group">
          <input type="file" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="endDate" name="image" required>
          <div class="invalid-feedback">
            Write note .
          </div>
        </div>
  </div>

    </div>



  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary mb-3" type="submit" name="add_Prisoner">Add Prisoner"</button>
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


<?php include 'PrisonerStaff_Footer.php'; ?>
