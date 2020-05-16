
<?php include "PrisonerStaff_Header_Manu.php"?>


    <form class="AllCellForm" action="" method="">
      <h2 class="mx-auto mt-3" style="width:200px"> All Prisoner </h2>

    <div class="table table-bordered" class="table-responsive-xl">
    <?php // i can't find  ?>
      <table class="table">
         <thead class="thead-light">
        <tr>
          <th scope="col" >Prisoner Id</th>
          <th scope="col">Prisoner Name</th>
          <th>Gender</th>
          <th >Address</th>
          <th>Phone Number</th>
          <th>Occupation</th>
          <th>Crime</th>
          <th>Day</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Notes</th>
        </tr>
         </thead>


        <?php
        require_once '../contollers/PrisonerContoller.php';

        $AllPrisoner=getAllPrisoner();
          foreach ($AllPrisoner as $Prisoner) {
              echo "<tr>";

                echo "<td>".$Prisoner["id"]."</td>";
                echo "<td>".$Prisoner["name"]."</td>";
                echo "<td>".$Prisoner["gender"]."</td>";
                echo "<td>".$Prisoner["address"]."</td>";
                echo "<td>".$Prisoner["phoneNo"]."</td>";
                echo "<td>".$Prisoner["occupation"]."</td>";
                echo "<td>".$Prisoner["crime"]."</td>";
                echo "<td>".$Prisoner["day"]."</td>";
                echo "<td>".$Prisoner["startDate"]."</td>";
                echo "<td>".$Prisoner["endDate"]."</td>";
                echo "<td>".$Prisoner["notes"]."</td>";
              echo "<tr>";
          }

         ?>

      </table>
    </div>
</form>
<?php  include "CellStaffFooter.php";?>
