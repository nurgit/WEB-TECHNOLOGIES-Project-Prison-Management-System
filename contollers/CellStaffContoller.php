<?php

require_once '../models/database.php';

function getAllCell()
{
  $query ="SELECT * FROM cell";
  $AllCell = get($query);
  return $AllCell;
}


function getCell($cId)
{
  $query="SELECT * FROM cell WHERE cellId=$cId";
  $cell=get($query);
  return $cell[0];

}



if(isset($_POST["updateCell"]))
{


   $allPrisoner=$_POST["allPrisoner"];
   $allPrisonerId=$_POST["allPrisonerId"];


   $query="UPDATE cell  SET allPrisoner='$allPrisoner',allPrisonerId='$allPrisonerId'";
   echo $query;
   execute($query);

   header("Location:../views/CellStaff_Update_Cell_All.php");
 }
  ?>
