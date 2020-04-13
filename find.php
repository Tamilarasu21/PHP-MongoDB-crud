<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>find_user</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body
		{
			font-family:Verdana;
			font-size:15px;
		}
		table
		{
			width:1500px;
			text-align: center;
			border-collapse: collapse;
			margin-right: 10px;
		}
		th{
			background:#adb9ed;
		}
		th,td
		{
			height:25px;
			border:1px solid black;
		}
		.update
		{
			text-decoration: none;
			background:#fccd4c;
			color:#111111;
			border-radius:3px;	
		}
		.update:hover
		{
			background:#fc8403;
			color:#ffff;
		}
		.delete
		{
			text-decoration: none;
			background:#f58282;
			color:#111111;
			border-radius:3px;	
		}
		.delete:hover
		{
			background:red;
			color:#ffff;
		}
		.go-back
		{
			color:black;
			background:#ffd787;
			border-radius: 3px;
			border:#ffd787;
		}

	</style>
<body>
	<center>
	<table>
	<tr>
		<th>Name</th>
		<th>Employee ID</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Address</th>
		<th>Qualification</th>
		<th>Shift</th>
		<th>Task</th>
	</tr>
<?php 
#database connectivity
include "config.php";

if(isset($_GET['submit']))
{
	$keyword=$_GET['keyword'];
	$query=new MongoDB\Driver\Query(['name'=>$keyword]);
	$result=$client->executeQuery('sample.php_mongo_crud',$query);

 foreach ($result as $res) 
	 	{ 
		echo "<tr>".
		"<td>".$res->name."</td>".
		"<td>".$res->empid."</td>".
		"<td>".$res->gender."</td>".
		"<td>".$res->email."</td>".
		"<td>".$res->address."</td>".
		"<td>".$res->qualification."</td>".
		"<td>".$res->shift."</td>".
		"<td><a href='edit.php?id=".$res->_id.
		"&name=".$res->name.
		"&empid=".$res->empid.
		"&gender=".$res->gender.
		"&email=".$res->email.
		"&address=".$res->address.
		"&qualification=".$res->qualification.
		"&shift=".$res->shift."' class='update'>&nbsp;<i class='fa fa-pencil-square'></i> update</a>"."&nbsp;&nbsp;&nbsp;"."<a href='delete.php?id=".$res->_id."' class='delete'>&nbsp;<i class='fa fa-trash'></i> delete </a></td>".
		"</tr>";				
		}
}
 ?>
 </table>
 <button onclick="goBack()" class="go-back">Go Back</button>
<script>
function goBack() {
  window.history.back();
}
</script>
</center>
</body>
</html>