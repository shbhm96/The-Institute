<?php
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$name=$fn." ".$ln;
$father=$_POST['fthr'];
$mother=$_POST['mthr'];
$dob=$_POST['dob'];
$cate=$_POST['dropdown'];
$hand=$_POST['handy'];
$mobile=$_POST['mobile'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'clg_db');
$q="INSERT INTO `student`( `Name`, `Mother's Name`, `Father's Name`, `DOB`, `Mobile No`, `Category`, `Physically Handicapped`) 
VALUES ('$name','$father','$mother','$dob','$mobile','$cate','$hand');";
$status=mysqli_query($con,$q);
	mysqli_close($con);	
if($con)
	echo "Connection Successful!";
 if($status==1)
{
	?>
	<script>	
		window.alert("Record Inserted Successfully");
	</script>	
	<?php
	echo 
	header('location:prsonl_info.php');
 }
	else{
		echo "<br>".$q."<br>";
		echo "Not inserted";	
	}
?>