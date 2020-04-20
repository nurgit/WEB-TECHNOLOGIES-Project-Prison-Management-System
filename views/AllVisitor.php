<?php
//require '../contollers/VisitorStaffContoller.php';
//include '../contollers/VisitorStaffContoller.php';



 //have problem
  require_once '../models/database.php';


  function getAllVisitors()
  {
  	$query ="SELECT * FROM visitors";
  	$visitors = get($query);
  	return $visitors;
  }
  	$visitors = getAllVisitors();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/VisitorStaff.css">
  </head>
  <body>
    <div id="wrapper">
        <?php include 'VisitorStaff_Header_Manu.php'; //for header & manu ?>

      <div id="content_wrapper">

        <div class="AllVisitor"><!--ALL Visitor-->

            <form class="AllVisitorForm" action="../contollers/VisitorStaffContoller.php" enctype="multipart/form-data" class="form-horizontal form-material">
              <h2>All Visitor</h2>
            <table class="AllVisitorTable">
              <tr>
                <th> Visitor Id </th>
                <th> Visitor Name </th>
                <th> visitor Address</th>
                <th> Visitor Phone No</th>
                <th>Gender</th>
                <th>Date</th>
                <th>time</th>
                <th>Prisoner Name</th>
                <th>Prisoner Id</th>

              </tr>
              <?php
              require '../contollers/VisitorStaffContoller.php';

                $visitor=getAllVisitors();
                foreach ($visitors as $visitor) {
                    echo "<tr>";

                      echo "<td>".$visitor["VisitorId"]."</td>";
                      echo "<td>".$visitor["VisitorName"]."</td>";
                      echo "<td>".$visitor["VisitorAddres"]."</td>";
                      echo "<td>".$visitor["VisitorPhoneNo"]."</td>";
                      echo "<td>".$visitor["VisitorGender"]."</td>";
                      echo "<td>".$visitor["Date"]."</td>";
                      echo "<td>".$visitor["Time"]."</td>";
                      echo "<td>".$visitor["PrisonerName"]."</td>";
                      echo "<td>".$visitor["PrisonerId"]."</td>";


                    echo "<tr>";
                }

               ?>
            </table>

            </form>

        </div>

      <?php include 'VisitorStaff_footer.php';// for footer ?>


      </div>



  </body>
</html>
