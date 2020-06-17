<?php
session_start();
include_once('sqlcon.php');
$number = count( $_POST["name"] );
echo $number." ";
if($number >= 1)
{
	for($i=0; $i<$number; $i++)
	{
		if( $_POST['name'] != "" && $_POST['details'] != "")
		{
			$timestamp = date('Y-m-d H:i:s');
		$sql = "INSERT INTO `users`.`inventory`(name,details , dat,email) VALUES('".$_POST['name'][$i]."','".$_POST['details'][$i]."','".$timestamp."','".$_SESSION['uemail']."')";
			mysqli_query($con, $sql);
		}
	}
	echo "Data Inserted";

}
else
{
	echo "Please Enter Name";
}



?>