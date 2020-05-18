<?php

	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$err_invalid="";
	$has_error=false;

  $user_type="";
  $err_user_type="";


	if(isset($_POST['submit']))
	{
		if(empty($_POST['uname']))
		{
			$err_uname="*Username Required";
			$has_error=true;

		}
		else
		{
			$uname=$_POST['uname'];
		}

		if(empty($_POST['pass']))
		{
			$err_pass="*Password Required";
			$has_error=true;

		}
		else
		{
			$pass=$_POST['pass'];

		}


    if(empty($_POST['user_type']))
    {
      $err_user_type="*Password Required";
      $has_error=true;

    }
    else
    {
      $user_type=$_POST['user_type'];
    }

//

		if(!$has_error)
		{
			if($uname=="abcs" && $pass=="1234" && $user_type=="StaffManager")
			{

				setcookie("loggedinuser",$uname,time()+180);

				header("Location:views/StaffManager.php");
			}
			elseif ($uname=="abcv" && $pass=="1234" && $user_type=="VisitorStaff") {
				setcookie("loggedinuser",$uname,time()+180);

				header("Location: views/VisitorStaff.php");

			}
			elseif ($uname=="abcc" && $pass=="1234" && $user_type=="CellStaff") {
				// workin by oni
				setcookie("loggedinuser",$uname,time()+180);

				header("Location:views/CellStaff.php");

			}
			elseif ($uname=="abcj" && $pass=="1234" && $user_type=="Jailor") {
				// working By piash...
				setcookie("loggedinuser",$uname,time()+180);

				header("Location:views/Jailor.php");

			}
			elseif ($uname=="abcp" && $pass=="1234" && $user_type=="prisonerStaff") {
				// working By piash...
				setcookie("loggedinuser",$uname,time()+180);

				header("Location:views/PrisonerStaff.php");

			}
			else
			{
				$err_invalid="*Invalid Username or Password";

			}
		}

	}
?>


<?php //--------------------------start html--------------------------------- ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" href="views/styles/style.css">
    <link rel="stylesheet" href="views/styles/Login.css">
  </head>

    <body>
      <div id="wrapper">
        <header >
          <div id="header">
            <h2>Prison Management System</h2>

          </div>
        </header>





      <?php //     using php -------------------------------- ?>
     <div class="loin_content">


      <h1>Login</h1>

      <form method="post" action="" id="from">
        <span id="erorline" class="err_invalid"><?php echo $err_invalid;?> </span><br>

        <table id="table" >

          <label class="usertype" > User Type: </label>
           <select id="section" name="user_type">

              <option value="Jailor"  >Jailor</option>  <!--pIASH-->
							<option value="prisonerStaff">Prisoner Staff</option> <!--pIASH-->
							  <option value="CellStaff">Cell Staff</option> <!--Oni-->
              <option value="StaffManager" >Staff Manager</option> <!--Nur-->
              <option value="VisitorStaff">Visitor Staff</option> <!--Nur-->



          </select>

          <tr>
            <td >Username: </td>
            <td><input type="text" value="<?php echo $uname;?>" name="uname" id="np">
              <br><span id="erorline" ><?php echo $err_uname;?></span></td>
          </tr>
          <tr>
            <td>Password: </td>
            <td> <input type="password" value="<?php echo $pass;?>" name="pass"  id="np">
            <br> <span id="erorline"><?php echo $err_pass;?></span>
          </tr>


          <tr><td colspan="2" align="center"><input type="submit" value="Login" name="submit" class="login"></td></tr>
        </table>
      </form>
    </div>



    <footer>
      <div class="footer">
        <p>&copy; All Right Reserved By-Nur Mohammad </p>
      </div>
    </footer>
    </div>
    </body>


</html>
