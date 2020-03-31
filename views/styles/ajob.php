<?php

$a="";
$err_a="";
$b="";
$err_b="";


if (isset($_POST['t'])) {
  // code...

  if (empty($_POST['a'])) {

    	$err_a="*Username Required";

  }
}



 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
    <form class="" action="" method="post">

      <input type="text" name="a" value="">
      <span><?php echo $err_a; ?></span>
      <input type="submit" name="t" value="ajob">

    </form>
   </body>
 </html>
