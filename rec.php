<?php
session_start();

if(isset($_SESSION["uemail"])){
    // add condition  no needed
  }else{
    echo "Check Your Credentials";
    header('location:index.php');
  
  }
?>
<html>
	<head>
		<title>Record Keeper</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		
<!-- menu -->
<?php
	include_once('functions.php');
		menu("Home","Profile","Storage","Inventory","About us");
?>		
		<div class="container-fluid text-center">
			<h2 align="center"><a href="#" title="Create Your Own Invenotry">User Inventory </a> </h2>
			<div class="form-group">
				<form name="add_name" id="add_name">
					<div class="table-responsive">
						<table class="table table-bordered" id="dynamic_field" style="background-color:black;">
							<tr>
								<td><input type="text" name="name[]" placeholder="Enter Label Name" class="form-control name_list"/></td>
								<td><input type="text" name="details[]" placeholder="Enter Label Details" class="form-control name_list"/></td>							
							</tr>
						</table>
						<button type="button" name="add" id="add" class="btn btn-success">Add More</button>
						<input type="button" name="submit" id="submit" class="btn btn-info" value="Submit"/>	
					</div>
				</form>
			</div>
				<div>
			</div>
		</div>

		<!-- php  -->
		<?php
			include("sqlcon.php");
			$sql = "SELECT  `name`,`details`  FROM `users`.`inventory` where email ='".$_SESSION['uemail']."'";
				$result = mysqli_query($con, $sql);
				$c = 0;
					while($row = mysqli_fetch_assoc($result)){
					
						echo "<center> <table class='table' id='' style='background-color:black; color:white; font-weight:bold; font-size:18px; '>
						<tr>
						<th class='text-center'> Sno:  </th>
						<td class='text-center' style='width:10%;'><input type='text' name='ndisp' class='form-control text-center' value='".$c."' disabled /></td>
					
						<th class='text-center'> Name:  </th>
						<td style='width:30%;'><input type='text' name='ndisp' class='form-control text-center' value='".$row['name']."' disabled /></td>
					
						<th class='text-center'> Details:  </th>
						<td style='width:50%;'><input type='text' name='ddisp' class='form-control text-center' value='".$row['details']."' disabled/></td>	
						</tr>
					</table> </center>";
						$c++;
					}
	?>
	

	
	</body>
</html>

<!-- js -->
<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter Label Name" class="form-control name_list" /></td> <td><input type="text" name="details[]" placeholder="Enter Label Details" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="width:100%;">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"recsupport.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				window.location.href ='rec.php'
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
	
});
</script>



