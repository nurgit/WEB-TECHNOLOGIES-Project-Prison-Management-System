<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
      <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/VisitorStaff.css">
    <link rel="stylesheet" href="styles/StaffManager.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">





  </head>


  <body class="ml-4 mr-4 mt-1 mb-1"  style="background-color:F0F0F0;" >

    <div id="header">
      <h2>Prison Management System</h2>
      <h3> Visitor Staff  : <?php echo $_COOKIE['loggedinuser'];?> </h3>

    </div>
  </header>

  <nav><!--Start  Manu -->
    <div id="nav">
      <ul>
        <li><a href="http://localhost/bdprison.org/views/VisitorStaff.php">Home</a></li>
        <li><a href="AllVisitor.php">All Visitor</a></li>
        <li><a href="VisitorStaff_AddVisitor_update.php">Add Visitor</a></li>
        <li><a href="http://localhost/bdprison.org">Log Out</a></li>
      </ul>
    </div>
    </nav>
