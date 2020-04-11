<?php

require_once '../models/database.php';

function getAllStaff()
{
  $query ="SELECT * FROM allstaff";
  $AllStaff = get($query);
  return $AllStaff;
}

 ?>
