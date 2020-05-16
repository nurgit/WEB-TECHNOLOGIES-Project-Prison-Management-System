<?php //php for Add Prisoner
require '../contollers/VisitorStaffContoller.php';//for database
//include '../contollers/VisitorStaffContoller.php';




 $visitorName="";
 $err_visitorName="";

 $visitorAddress="";
 $err_visitorAddress="";

 $visitorPhone="";
 $err_visitorPhone="";

 $visitorGender="";
 $err_visitorGender="";

 $relation="";
 $err_relation="";

 $prisonerName="";
 $err_prisonerName="";

 $prisonerId="";
 $err_prisonerId="";

 $visitorId="";
 $err_visitorId="";

 	$has_error=false;


  if(isset($_POST['submit'])) {
    // Prisoner Submit start



    if(empty($_POST['visitorId'])) {

      $err_visitorId="Visitor Id Required";
      $has_error=true;
    }
    else {
      $visitorId=$_POST['visitorId'];

    }

    if(empty($_POST['visitorName'])) {
      $err_visitorName="Name Required";
      $has_error=true;
    }
    else {
      $visitorName=$_POST['visitorName'];
    }
//--visitor Address

    if(empty($_POST['visitorAddress'])) {
      $err_visitorAddress="Address Required";
      $has_error=true;

    }
    else {
      $visitorAddress=$_POST['visitorAddress'];
    }



    if(empty($_POST['visitorPhone'])) {
      $err_visitorPhone="Phone Number Required";
      $has_error=true;

    }
    else {
      $visitorPhone=$_POST['visitorPhone'];
    }


    if(empty($_POST['visitorGender'])) {
      $err_visitorGender="Gender Required";
      $has_error=true;

    }
    else {
      $visitorGender=$_POST['visitorGender'];
    }


    if(empty($_POST['relation'])) {
      $err_relation="relation Required";
      $has_error=true;
      }
    else {
      $relation=$_POST['relation'];
    }

    if(empty($_POST['prisonerName'])) {
      $err_prisonerName="prisoner Name Required";
      $has_error=true;
      }
    else {
      $prisonerName=$_POST['prisonerName'];
    }

    if(empty($_POST['prisonerId'])) {
      $err_prisonerId="prisoner Id Required";
      $has_error=true;
      }
    else {
      $prisonerId=$_POST['prisonerId'];

    }

}

//-----------------------SESSION Start----
  //  if (!$has_error) {
  //    section_start();
    //  $_SESSION['visitorName']=$visitorName;


  //  }





  ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prison Management System</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/VisitorStaff.css">
  </head>
  <body>
    <div id="wrapper">

    <?php include 'VisitorStaff_Header_Manu.php';// add header & manu ?>

    <div id="content_wrapper">
      <div class="AddVisitor">

        <h2 class="AddVisitor_heading">Add  Visitor:</h2>





        <!--<form class="AddVisitor_from" action="" method="">-->

          	<form class="AddVisitor_from"   method="post" action="../contollers/VisitorStaffContoller.php"  >
          <table class="AddVisitortable">

            <tr>
              <td>Visitor Id:</td>
              <td>
                <input type="text" name="visitorId"  id="np" >
                <br><span><?php echo $err_visitorId; ?></span>
              </td>
            </tr>

            <tr>
              <td>Visitor Name:</td>
              <td>
                <input id="np" type="text" name="visitorName" >
                <br><span><?php echo $err_visitorName; ?></span>

              </td>
            </tr>

            <tr>
              <td>Visitor Address:</td>
              <td>
                <input id="np"type="text" name="visitorAddress" >
                <br><span><?php echo $err_visitorAddress; ?></span>
              </td>
            </tr>

            <tr>
              <td>Visitor Phone No:</td>
              <td>
                <input  id="np" type="text" name="visitorPhone" >
                <br><span> <?php echo $err_visitorPhone; ?></span>
              </td>
            </tr>

            <tr>
              <td>visitor Gender:</td>
              <td>
                <input id="np" type="text" name="visitorGender">
                <br><span><?php echo $err_visitorGender; ?></span>
              </td>
            </tr>
            </tr>

            <tr>
              <td>Relation:</td>
              <td>
                <input id="np" type="text" name="relation" >
                <br> <span> <?php echo $err_relation; ?>  </span>
              </td>
            </tr>

            <tr>
            <td>Time:</td>
            <td>
              <input id="np" type="time" name="time" > <input id="np" type="date" name="date" value="">
              <br> <span> <?php echo $err_relation; ?>  </span>
            </td>
          </tr>
          </tr>

            <tr>
              <td><h3>prisoner Information</h3>
              </td>

            </tr>

            <tr>
              <td>Prisoner Name:</td>
              <td>
                <input id="np" type="text" name="prisonerName" >
                <br><span><?php echo $err_prisonerName; ?></span>
              </td>
            </tr>

            <tr>
              <td>Prisoner Id:</td>
              <td>
                <input id="np" type="text" name="prisonerId" >
                <br><span><?php echo $err_prisonerId; ?></span>
              </td>
            </tr>

            <tr>

              <td>
                <td colspan="2" align="center">
          <input type="submit" value="Add Visitor" name="submit" id="np">

              </td>
            </tr>

          </table>

        </form>
      </div>

    </div>

      <?php include 'VisitorStaff_footer.php'//add footer  ?>

    </div>

  </body>
</html>
