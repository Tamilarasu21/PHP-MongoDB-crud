<?php 
#database connectivity
include "config.php";

$id=$_GET['id'];
$name=$_GET['name'];
$empid=$_GET['empid'];
$gender=$_GET['gender'];
$email=$_GET['email'];
$address=$_GET['address'];
$qualification=$_GET['qualification'];
$shift=explode(",",$_GET['shift']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<style type="text/css">
		*
{
  margin:0;
  padding:0;
}
body {
  background:white;
  font: 13px/1.9 Geneva, 'Lucida Sans',sans-serif;
}
table
{
  width:400px;
  border-collapse: collapse;

}
[type="date"]
{
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
  background-color: rgba(255,255,255,0.1);
}
[type="date"]::-webkit-inner-spin-button 
{
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator 
{
  opacity:0;
} 
select
{
  width:180px;
  border:1px solid black;
  border-radius: 5px;
  height:25px;
}
select option
{
  background-color:rgba(255,255,255,.1); 
  color:black;
  border-radius:10px;
}
input
 {
  border: 1px solid black;
  border-radius: 5px;
  background-color: #fff;
  margin-right: 10px;
  padding:3px 5px;
}
th
{
  font-size: 30px;
  color:blue;
}
td
{
  padding-top:20px;
}
td:nth-child(odd)
{
  width:100px;
}
textarea
{
  padding:3px 5px;
  width:180px;
  border-radius: 5px;
  border:1px solid black;
  height:50px;
}
a
{
  text-decoration: none;
}
.main
{
  margin-left:20px;
  margin-top: 20px;
}
.menu
{
  list-style: none;
}

	</style>
	<title>edit_data</title>
</head>
<body>
	<center>
	<form method="post" action="update.php">
		<input type="hidden" name="id" value= "<?php echo $id; ?>" >
	<!-- name -->
	   <table>
	<tr><td><label for="name">Name : </label></td><td><input type="text" name="name" value="<?php echo $name; ?>"></td></tr>
	<!-- employee id -->
	<tr><td><label for="empid">Employee ID : </label></td><td><input type="number" name="empid" value="<?php echo $empid; ?>"></td></tr>
	<!-- gender -->
	<tr><td><label>Gender : </label></td>
		<td>
	<input type="radio" name="gender" value="male" <?php if($gender=='male'){echo 'checked';} else {'';}?>><label for="male">Male</label><br>
	<input type="radio" name="gender" value="female" <?php echo ($gender=='female')? 'checked':'';?>><label for="female" >Female</label><br>
	<input type="radio" name="gender" value="others" <?php echo ($gender=='others')? 'checked':'';?>><label for="others">Others</label></td></tr>
	<!-- email -->
	<tr><td><label for="email">Email : </label></td><td><input type="email" name="email" value="<?php echo $email; ?>"></td></tr>
	<!-- address -->
	<tr><td><label for="address">Address : </label></td>
	<td><textarea name="address" rows="4"><?php echo $address; ?></textarea></td></tr>
	<!-- Qualification -->
	<tr><td><label for="qualification">Qualification</label></td>
	<td><select name="qualification">
		<option selected="" hidden="" disabled=""></option>
		<option value="BE" <?php if($qualification=='BE'){echo 'selected'; }?>>BE</option>
		<option value="Btech" <?php if($qualification=='Btech'){echo 'selected'; }?>>Btech</option>
		<option value="BCA" <?php if($qualification=='BCA'){echo 'selected'; }?>>BCA</option>
		<option value="Bcom" <?php if($qualification=='Bcom'){echo 'selected'; }?>>Bcom</option>
		<option value="BBA" <?php if($qualification=='BBA'){echo 'selected'; }?>>BBA</option>
	</select></td></tr>
	<!-- shift preference -->
	<tr><td><label>Shift preferred : </label></td>
	<td><input type="checkbox" name="shift[]" value="morning"
		<?php
			if(in_array("morning", $shift))
			{
				echo "checked";
			}
		?>
		><label for="morning">Morning</label><br>
	<input type="checkbox" name="shift[]" value="afternoon"
		<?php
			if(in_array("afternoon", $shift))
			{
				echo "checked";
			}
		?>
	><label for="afternoon">Afternoon</label><br>
	<input type="checkbox" name="shift[]" value="night"
		<?php
			if(in_array("night", $shift))
			{
				echo "checked";
			}
		?>
	><label for="night">Night</label><br>
	<input type="checkbox" name="shift[]" value="general"
		<?php
			if(in_array("general", $shift))
			{
				echo "checked";
			}
		?>
	><label for="general">General</label></td></tr>
	</table>
       <input type="submit" name="update">
       </center>
</form>
</body>
</html>
