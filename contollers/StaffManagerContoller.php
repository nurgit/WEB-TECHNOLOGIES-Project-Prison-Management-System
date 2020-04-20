<?php

require_once '../models/database.php';

function getAllStaff()
{
  $query ="SELECT * FROM allstaff";
  $AllStaff = get($query);
  return $AllStaff;
}


function getStaff($id)
{
  $query="SELECT * FROM allstaff WHERE id=$id";
  $staff=get($query);
  return $staff[0];

}



//update
 if(isset($_POST["updateStaff"]))
{


		$holiday=$_POST["holiday"];
		$sTime=$_POST["w_joining_time"];
		$eTime=$_POST["w_end_time"];
		$wSite=$_POST["working_site"];

		$query="UPDATE allstaff SET holiday='$holiday',w_joining_time='$sTime',w_end_time='$eTime', working_site='$wSite'";
		echo $query;
		execute($query);
		header("Location:../views/StaffManager_All_Staff.php");
	} ?>
