
    <?php

    include 'StaffManager_Header_Manu.php';


    ?>



      <!---->
      <?php
//include 'admin_header.php';
//require '../controllers/ProductController.php';
//$products = getAllProducts();
//echo "<pre>";
//print_r($products);
//echo "</pre>";

?>

<!--All Products starts -->

<div class="center">
<h3 class="text">Update Staff Schedule</h3>
<table class="table table-striped">
  <thead>
    <th>Id</th>
    <th> Name</th>
    <th>job Title</th>
    <th>Work Join Time </th>
    <th>Work End Time</th>
    <th> Holiday </th>
    <th>Notish</th>


  </thead>
  <tbody>
    <?php
    require_once '../contollers/StaffManagerContoller.php';
    $AllStaff=getAllStaff();


      foreach ($AllStaff as $allStaff) {
          echo "<tr>";

            echo "<td>".$allStaff["id"]."</td>";
            echo "<td>".$allStaff["name"]."</td>";
            echo "<td>".$allStaff["job_ title"]."</td>";

            echo "<td>".$allStaff["w_joining_time"]."</td>";
            echo "<td>".$allStaff["w_end_time"]."</td>";
            echo "<td>".$allStaff["holiday"]."</td>";
            echo "<td>".$allStaff["notice"]."</td>";



          echo '<td><a href="SataffManager_Update.php?id='.$allStaff["id"].'" class="btn btn-success">UPDATE</a></td>';

        echo "</tr>";
      }
    ?>

  </tbody>
</table>
</div>
<!--Products ends -->




      <?php include 'StaffManager_Footer.php'  ?>
  </body>
</html>
