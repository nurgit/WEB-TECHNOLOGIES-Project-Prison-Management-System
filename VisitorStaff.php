<?php //php for Add Prisoner

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


  	$has_error=false;

  //

  if (isset($_post['submit'])) {
    // Prisoner Submit start
    //----visitor Name
    if (empty(['visitorName'])) {
      $err_visitorName="Name Required";
      $has_error=true;
    }
    else {
      $visitorName=($_post['visitorName']);
    }
//--visitor Address

    if (empty(['visitorAddress'])) {
      $err_visitorAddress="Address Required";
      $has_error=true;

    }
    else {
      $visitorAddress=($_post['visitorAddress']);
    }

    //

    if (empty(['visitorPhone'])) {
      $err_visitorPhone="Phone Number Required";
      $has_error=true;

    }
    else {
      $visitorPhone=($_post['visitorPhone']);
    }


    if (empty(['visitorGender'])) {
      $err_visitorGender="Gender Required";
      $has_error=true;

    }
    else {
      $visitorGender=($_post['visitorGender']);
    }


    if (empty(['relation'])) {
      $err_relation="relation Required";
      $has_error=true;
      }
    else {
      $relation=($_post['relation']);
    }

    if (empty(['prisonerName'])) {
      $err_prisonerName="prisoner Name Required";
      $has_error=true;
      }
    else {
      $prisonerName=($_post['prisonerName']);
    }

    if (empty(['prisonerId'])) {
      $err_prisonerId="prisoner Id Required";
      $has_error=true;
      }
    else {
      $prisonerId=($_post['prisonerId']);
    }
//-----------------------SESSION Start----
  /*  if (!$has_error) {
      section_start();
      $_SESSION['visitorName']=$visitorName;


    }*/

  }
  ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prison Management System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="VisitorStaff.css">
  </head>
  <body>
    <div id="wrapper">
      <header >
        <div id="header">
          <h2>Prison Management System</h2>
          <h3>Staff Manager : <?php echo $_COOKIE['loggedinuser'];?> </h3>

        </div>
      </header>

      <nav><!--Start  Manu -->
        <div id="nav">
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="#">My Info</a></li>
            <li><a href="#">All Visitor</a></li>
            <li><a href="#">Add Visitor</a></li>

            <li><a href="index.php">Log Out</a></li>
          </ul>
        </div>
      </nav>




    <div class="content_wrapper">

      <div class="myInfo">

        <h2>My Information</h2>

        <h3>Name : <?php echo $_COOKIE['loggedinuser'];?> </h3>
        <h3>Id:</h3>
        <h3>Working Time:</h3>



      </div>

      <div class="AllVisitor"><!--ALL Visitor-->

          <form class="AllVisitorForm" action="" method="">
            <h2>All Visitor</h2>
          <table class="AllVisitorTable">
            <tr>
              <th> Name </th>
              <th>Address</th>
              <th>Phone No</th>
              <th>Prisoner Id</th>
              <th>time</th>
            </tr>
            <tr>
              <td> Akash </td>
              <td>Kumarkhali </td>
              <td>1234567891</td>
              <td>M1</td>
              <td>1.10.20</td>
            </tr>
            <tr>
              <td> Borsha</td>
              <td>Rajsahi</td>
              <td>741789963</td>
              <td>T1</td>
              <td>10.10.2019</td>
            </tr>
          </table>

          </form>

      </div>


      <div class="AddVisitor">

        <h2 class="AddVisitor_heading">Add  Visitor:</h2>

        <form class="AddVisitor_from" action="" method="">
          <table class="AddVisitortable">

            <tr>
              <td>Visitor Name:</td>
              <td>
                <input id="np" type="text" name="visitorName" value="<?php  ?>">
                <br><span><?php echo $err_visitorName; ?></span>
              </td>
            </tr>

            <tr>
              <td>Visitor Address:</td>
              <td>
                <input id="np"type="text" name="visitorAddress" value="<?php  ?>">
                <br><span><?php echo $err_visitorAddress; ?></span>
              </td>
            </tr>

            <tr>
              <td>Visitor Phone No:</td>
              <td>
                <input  id="np" type="text" name="visitorPhone" value="<?php  ?>" >
                <br><span> <?php echo $err_visitorPhone; ?></span>
              </td>
            </tr>

            <tr>
              <td>visitor Gender:</td>
              <td>
                <input id="np" type="text" name="visitorGender" value="<?php  ?>">
                <br><span><?php echo $err_visitorGender; ?></span>
              </td>
            </tr>
            </tr>

            <tr>
              <td>Relation:</td>
              <td>
                <input id="np" type="text" name="Relation" value="<?php  ?>" >
                <br> <span> <?php echo $err_relation; ?>  </span>
              </td>
            </tr>

            <tr>
            <td>Time:</td>
            <td>
              <input id="np" type="time" name="" value="<?php  ?>" > <input id="np" type="date" name="" value="">
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
                <input id="np" type="text" name="prisonerName" value="<?php  ?>">
                <br><span><?php echo $err_prisonerName; ?></span>
              </td>
            </tr>

            <tr>
              <td>Prisoner Id:</td>
              <td>
                <input id="np" type="text" name="prisonerId" value="<?php  ?>">
                <br><span><?php echo $err_prisonerId; ?></span>
              </td>
            </tr>

            <tr>

              <td>
                <td colspan="2" align="center">
          <input id="np" type="submit" name="submit" value="Submit">

              </td>
            </tr>

          </table>

        </form>

      </div>

    </div>





      <footer>
        <div class="footer">
          <p>&copy; All Right Reserved By-Nur Mogammad</p>
        </div>
      </footer>

    </div>

  </body>
</html>
