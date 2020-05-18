<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prison Management System </title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/StaffManager.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
  </head>



<div id="wrapper">
  <header >
    <div id="header">
      <h2>Prison Management System</h2>
      <h3 class="mb-5">Staff Manager : <?php echo $_COOKIE['loggedinuser'];?> </h3>

    </div>
  </header>

  <nav><!--Start  Manu -->
    <div id="nav">
      <ul>
        <li><a href="http://localhost/bdprison.org/views/StaffManager.php">Home</a></li>

        <li><a href="http://localhost/bdprison.org/views/StaffManager_All_Staff.php">All Staff </a></li>

        <li> <a href="http://localhost/bdprison.org/views/SataffManager_Update_Staff_Schedule.php"> Update Staff Schedule</a></li>

        <li><a href="http://localhost/bdprison.org">Log Out</a></li>
      </ul>
    </div>
  </nav>
