<body>
  <?php include 'jailor_Header_Manu.php';
  ?>
  <div>
    <h1>gv</h1>

  </div>

  <div class="table table-bordered" class="table-responsive-xl">
    <table class="table">
       <thead class="thead-light">
      <tr>
        <th scope="col" >Id</th>
        <th scope="col">Name</th>
        <th>Phone No</th>
        <th >Job Titale</th>
        <th>Gender</th>
        <th >Work Joining Time</th>
        <th >Work End Time</th>
        <th>Holy Day</th>

      </tr>

      <?php
      require_once '../contollers/StaffManagerContoller.php';
      $AllStaff=getAllStaff();


        foreach ($AllStaff as $allStaff) {
            echo "<tr>";

              echo "<td>".$allStaff["id"]."</td>";
              echo "<td>".$allStaff["name"]."</td>";
              echo "<td>".$allStaff["phoneNo"]."</td>";
              echo "<td>".$allStaff["job_ title"]."</td>";
              echo "<td>".$allStaff["gender"]."</td>";
              echo "<td>".$allStaff["w_joining_time"]."</td>";
              echo "<td>".$allStaff["w_end_time"]."</td>";
              echo "<td>".$allStaff["holiday"]."</td>";

            echo "<tr>";
        }

       ?>

    </table>
  </div>



    <?php include 'jailor_footer.php'  ?>
