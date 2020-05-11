<style>
#img1{

  height: 200px;
width: 250;

margin-left: 30;
margin-top: 0;
margin-right: 30px;
margin-bottom: 0px;
}

h2{

  color: red;
  align:center;
}
.h4s{


  margin-left: 34px;
  color: green;
  list-style:none;

}
ul{
  list-style-type:none;
}

#updateFrom{
  margin-top: 50px;

}
#updateFrom{
  margin-bottom: 5px;
}

</style>


<?php
include 'StaffManager_Header_Manu.php';
 ?>



 <?php


 require_once ('../contollers/StaffManagerContoller.php');

 $sid = $_GET["id"];

 $staff=getStaff($sid);



echo $staff["id"];






  ?>

  <div class="content">
    <h2>Update Information:  <?php echo " ".$staff["name"]; ?> </h2>
     <!--editproduct starts -->
   <div class="center">
   <table>
   	<td>
   		<img class="item-image" id="img1" src="<?php echo $staff["image"];?>"></img>
       <br>
       <form >
       <ul>
           <li><h4 class="h4s">Name: <?php echo $staff["name"]; ?></h4></li>
           <li><h4 class="h4s">Id:  <?php echo $staff["id"];?></h4></li>
         </ul>

       </form>


   	</td>


       </div>
   	<td>

   		<form id="updateFrom"method="post"  enctype="multipart/form-data" class="form-horizontal form-material">


   			<div class="form-group">
   				<h4 class="text">holiday:</h4>
   				<select class="form-control" name="holiday">

   					<option><?php echo $staff["holiday"] ?></option>
   				</select>
   			</div>

   			<div class="form-group">
   				<h4 class="text">Work Joining Time:</h4>
   				<input type="time" name="w_joining_time" value="<?php echo $staff["w_joining_time"]?>" class="form-control">
   			</div>
         <div class="form-group">
   				<h4 class="text">Work End Time:</h4>
   				<input type="time" name="w_end_time" value="<?php echo $staff["w_end_time"]?>" class="form-control">
   			</div>

   			<div class="form-group">
   				<h4 class="text">Place:</h4>
   				<input type="text" name="working_site" value="<?php echo $staff["working_site"]?>" class="form-control">
   			</div>


   				<input type="submit" class="btn btn-success" name="updateStaff" value="Update" class="form-control">
   			</div>
   		</form>
   	</td>
   </table>
   </div>

  </div>









  <?php include 'StaffManager_Footer.php'  ?>
