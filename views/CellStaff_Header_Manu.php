<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prison Management System</title>
    <!--<link rel="stylesheet" href="styles/cellStaff.css">-->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/StaffManager.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
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
            <li><a href="http://localhost/bdprison.org/views/CellStaff.php">Home</a></li>
            <li><a href="#">My Info</a></li>
            <li><a href="http://localhost/bdprison.org/views/CellStaff_AllScell.php">All Cell</a></li>
            <li><a href="http://localhost/bdprison.org/views/CellStaff_Update_Cell_All.php">Update Cell</a></li>
            <li><a href="http://localhost/bdprison.org">Log Out</a></li>
          </ul>
        </div>
      </nav>
