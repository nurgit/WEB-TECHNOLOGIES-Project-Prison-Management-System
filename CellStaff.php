





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prison Management System</title>
    <link rel="stylesheet" href="cellStaff.css">
    <link rel="stylesheet" href="style.css">

  </head>



  <body>
    <div id="wrapper" class="picture">

      <header >
        <div id="header">
          <h2>Prison Management System</h2>
          <h3>Cell Staff : <?php echo $_COOKIE['loggedinuser'];?> </h3>

        </div>
      </header>

      <nav><!--Start  Manu -->
        <div id="nav">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">My Info</a></li>
            <li><a href="#">All Cell</a></li>
            <li><a href="#">Update Cell</a></li>
            <li><a href="http://localhost/bdprison.org">Log Out</a></li>
          </ul>
        </div>
      </nav>



          <div id="content_wrapper">

            <div id="MyInfo">

              <h2>My Information</h2>

              <h3>Name : <?php echo $_COOKIE['loggedinuser'];?> </h3>
              <h3>Id:</h3>
              <h3>Working Time:</h3>



            </div>

            <div class="AllCell"> <!--ALL Visitor-->

                <form class="AllCellForm" action="" method="">
                  <h2>All Scell</h2>
                <table class="AllCellTable">
                  <tr>
                    <th> Cell Id </th>
                    <th>Guilt Cell</th>

                    <th>All Prisoner</th>
                    <th>Prisoner Limit</th>
                  </tr>
                  <tr>

                    <td> 1001 </td>
                    <td>Murderer </td>
                    <td>3</td>
                    <td>5</td>

                  </tr>
                  <tr>
                    <td> 1006</td>
                    <td>Thieve</td>
                    <td>5</td>
                    <td>5</td>

                  </tr>
                </table>

                </form>

            </div>



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

          </div>








      <footer>
        <div class="footer">
          <p>&copy; All Right Reserved By-S. M. Yeamin Oni</p>
        </div>
      </footer>

    </div>

  </body>
</html>
