<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jailor </title>

    <link rel="stylesheet" href="jailor.css">

  </head>
  <body>

   <div id="wrapper">
      <header >
        <div id="header">
          <h2>Prison Management System</h2>
          <h3>Jailor</h3>

        </div>
      </header>

      <nav><!--Start  Manu -->
        <div id="nav">
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="#">My Info</a></li>
            <li><a href="#">Cell Staff </a></li>
            <li><a href="#">Prisoner Staff</a></li>
            <li><a href="#">Visitor Staff</a></li>
            <li><a href="#">Staff Manager</a></li>

            <li><a href="http://localhost/bdprison.org">Log Out</a></li>
          </ul>
        </div>
      </nav>


<div class="background">


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


    <div class="AllStaff">

      <h2>All Staff</h2>


      <table class="AllVisitorTable">
        <tr>
          <th> Name </th>
          <th>Address</th>
          <th>Phone No</th>

          <th>Shift </th>
        </tr>
        <tr>
          <td> Akash </td>
          <td>Kumarkhali </td>
          <td>1234567891</td>

          <td>1.10.20</td>
        </tr>
        <tr>
          <td> Borsha</td>
          <td>Rajsahi</td>
          <td>741789963</td>

          <td>10.10.2019</td>
        </tr>
      </table>

      </form>




    </div>


</div>



      <footer>
        <div class="footer">
          <p>&copy; All Right Reserved By-piash</p>
        </div>
      </footer>

    </div>

  </body>
</html>
