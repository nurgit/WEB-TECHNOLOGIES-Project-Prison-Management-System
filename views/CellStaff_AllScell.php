
<?php include "CellStaff_Header_Manu.php"?>

    <form class="AllCellForm" action="" method="">
      <h2 class="mx-auto mt-3" style="width:200px"> All Cell </h2>

    <div class="table table-bordered" class="table-responsive-xl">
    <?php // i can't find  ?>
      <table class="table">
         <thead class="thead-light">
        <tr>
          <th scope="col" >Cell Id</th>
          <th scope="col">Guilt Cell</th>
          <th >Prisoner Limit</th>
          <th>All Prisoner</th>
          <th>All Prisoner Id</th>
        </tr>
         </thead>


        <?php
        require_once '../contollers/CellStaffContoller.php';

        $AllCell=getAllCell();
          foreach ($AllCell as $cell) {
              echo "<tr>";

                echo "<td>".$cell["cellId"]."</td>";
                echo "<td>".$cell["guiltCell"]."</td>";
                echo "<td>".$cell["prisonerLimit"]."</td>";
                echo "<td>".$cell["allPrisoner"]."</td>";
                echo "<td>".$cell["allPrisonerId"]."</td>";
              echo "<tr>";
          }

         ?>

      </table>
    </div>
</form>
<?php  include "CellStaffFooter.php";?>
