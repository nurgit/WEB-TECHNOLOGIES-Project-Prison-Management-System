<?php include "CellStaff_Header_Manu.php" ?>

<div class="upc" >

  <h2 class="AddVisitor_heading">Update Prisoner:</h2>

  <form class="AddVisitor_from" action="" method="">
    <table class="upct">

      <tr>
        <td>Prisoner Id</td>
        <td>Old Cell Id</td>
        <td>New Cell Id</td>

      </tr>

      <tr>
        <td>
          <input  id="pd"type="text" name="PrisonerId" value="<?php  ?>">

        </td>
        <td>
          <input id="pd" type="text" name="OldCellId" value="<?php  ?>">

        </td><td>
          <input id="pd" type="text" name="NewCellId" value="<?php  ?>">

        </td>
        <td >
        <input class="s"  type="submit" name="submit" value="Submit">

      </td>
    </tr>

    </table>

  </form>

</div>

  <?php  include "CellStaffFooter.php";?>
