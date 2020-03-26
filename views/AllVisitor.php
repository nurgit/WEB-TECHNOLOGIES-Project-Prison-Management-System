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

      <div class="content_wrapper">

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

      <?php include 'VisitorStaff_footer.php';// for footer ?>


      </div>



  </body>
</html>
