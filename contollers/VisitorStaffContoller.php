<?


require_once '../models/database.php';


function getAllVisitors()
{
	$query ="SELECT * FROM visitors";
	$visitors = get($query);
	return $visitors;
}

function getVisotor($id)
{
	$query="SELECT * FROM  visotors WHERE id=$id";
	$visitor =get($query);
	return $visitor[0];

}


	if(isset($_POST["add_Visitor"]))
	{
		insertVisitor()

	}

	else if(isset($_POST["edit_Visotor"]))
	{
		editVisitor();
	}






	function insertVisitor()
	{
		$visitorId=$_POST["id"];
		$visitorName=$_POST["name"];
		$visitorGender=$_POST["gender"];
		$visitorAddress=$_POST["address"];
		$visitorPhone=$_POST["phoneNumber"];
		$relation=$_POST["relation"];
		$date=$_POST["date"];
		$date=$_POST["time"];
		$prisonerName=$_POST["prisonerName"];
		$prisonerId=$_POST["prisonerId"];

			$query="INSERT INTO visitors VALUES('$visitorId','$visitorName','$visitorAddress','$visitorPhone','$visitorGender','$relation,'$date','$time','$prisonerName','$prisonerId')";
			execute($query);
			header("Location:../views/AllVisitor.php");



	}

	function deleteVisotor($id)
	{

	}
*/

	/*
	function editProduct()
	{
		$target_file=$_POST["prev_image"];
		$id=$_POST["id"];
		$name=$_POST["name"];
		$cid=$_POST["c_id"];
		$price=$_POST["unit_price"];
		$qty=$_POST["unit_qty"];
		$desc=$_POST["description"];
		if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name']))
		{
			$target_dir="../storage/product_image/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
			//echo 'No upload';
		}
		$query="UPDATE products SET name='$name',category_id=$cid,unit_price=$price,unit_qty=$qty,description='$desc',image='$target_file' WHERE id=$id";
		echo $query;
		execute($query);
		header("Location:../views/allproducts.php");*/

?>
