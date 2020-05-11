<?php  include 'CellStaff_Header_Manu.php' ?>






<div class="center">
  <h2  class="mx-auto mt-3" style="width: 200px ;">Upgrade Cell</h2>

  <table class="table table-striped">
     <thead >
    <tr>
      <th >Cell Id</th>
      <th >Guilt Cell</th>
      <th >Prisoner Limit</th>
        <th>All Prisoner</th>
      <th>All Prisoner Id</th>
      <th>Updae</th>
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

            //Update Cell Button

            echo '<td> <a href="CellStaff_Update_Cell.php?id='.$cell["cellId"].'" class="btn btn-success">UPDATE CELL</a> </td>';

          echo "<tr>";
      }
     ?>

  </table>
</div>
</form>



<?php include 'CellStaffFooter.php' ?>
