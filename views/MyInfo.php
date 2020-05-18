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
      <div class="myInfo">
        <h2>My Information</h2>
        <h3>User Type :Visitor Staff</h3>
        <h3>Name Name : <?php echo $_COOKIE['loggedinuser'];?> </h3>


    </div>
      <?php include 'VisitorStaff_footer.php';// for footer ?>
      </div>



  </body>
</html>
