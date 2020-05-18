<?php
	require_once '../models/database.php';


	if(isset($_POST["add_Prisoner"]))
	{
		insertPrisoner();
	}
	else if(isset($_POST["edit_"]))
	{
		editProduct();
	}



function insertPrisoner()
  {

      $id=$_POST["id"];
      $name=$_POST["name"];
      $gender=$_POST["gender"];
      $address=$_POST["address"];
      $phoneNumber=$_POST["phoneNumber"];
      $occupation=$_POST["occupation"];
      $crime=$_POST["crime"];
      $day=$_POST["day"];
      $startDate=$_startDate["startDate"];
      $endDate=$_POST["endDate"];
      $notes=$_POST["notes"];



      //file upload
        $target_dir="../storage/prisoner_image/";
        $target_file = $target_dir.basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);



        $query="INSERT INTO allprisoner VALUES('$id','$name','$gender','$target_file','$phoneNumber','$address','$occupation','$crime','$day','$startDate','$endDate','$notes')";
        execute($query);
        header("Location:../views/PrisonerStaff_All_Prisoner.php");
      }


			function getAllPrisoner(){
				$query ="SELECT * FROM allprisoner";
			  $AllPrisoner = get($query);
			  return $AllPrisoner;



			}









?>
