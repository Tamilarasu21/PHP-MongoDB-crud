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
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>register_form</title>
</head>
<body>
<center>
	<!-- search -->
<div align="right"><br>
	<form action="find.php" method="get">
	<input type="search" name="keyword" placeholder="search here">
	<button name="submit"><i class="fa fa-search"></i>search</button>
	</form>
</div>
		<!-- search -->
<form method="post" action="insert.php" autocomplete="">
	<table>
		<tr><th colspan="2"><center>Register</center></th></tr>
	<!-- name -->
	<tr><td><label for="name">Name : </label></td><td><input type="text" name="name"></td></tr>
	<!-- employee id -->
	<tr><td><label for="empid">Employee ID : </label></td><td><input type="number" name="empid"></td></tr>
	<!-- Date Of Birth -->
	<tr><td><label for="dob">DOB : </label></td><td><input type="date" name="dob" min="1990-01-01" max="1999-12-31"></td></tr>
	<!-- gender -->
	<tr><td><label>Gender : </label></td>
		<td>
	<input type="radio" name="gender" value="male"><label for="male">Male</label><br>
	<input type="radio" name="gender" value="female"><label for="female">Female</label><br>
	<input type="radio" name="gender" value="others"><label for="others">Others</label></td></tr>
	<!-- email -->
	<tr><td><label for="email">Email : </label></td><td><input type="email" name="email"></td></tr>
	<!-- address -->
	<tr><td><label for="address">Address : </label></td>
	<td><textarea name="address" rows="4"></textarea></td></tr>
	<!-- Qualification -->
	<tr><td><label for="qualification">Qualification</label></td>
	<td><select name="qualification">
		<option selected="" hidden="" disabled=""></option>
		<option value="BE">BE</option>
		<option value="Btech">Btech</option>
		<option value="BCA">BCA</option>
		<option value="Bcom">Bcom</option>
		<option value="BBA">BBA</option>
	</select></td></tr>
	<!-- shift preference -->
	<tr><td><label>Shift preferred : </label></td>
	<td><input type="checkbox" name="shift[]" value="morning"><label for="morning">Morning</label><br>
	<input type="checkbox" name="shift[]" value="afternoon"><label for="afternoon">Afternoon</label><br>
	<input type="checkbox" name="shift[]" value="night"><label for="night">Night</label><br>
	<input type="checkbox" name="shift[]" value="general"><label for="general">General</label></td></tr>
	<!-- password -->
	<tr><td><label for="password">Password : </label></td><td><input type="password" name="password"></td></tr>
	<tr><td><label for="cpassword">Confirm Password : </label></td><td><input type="password" name="cpassword"></td></tr>
	</table>
	<!-- terms -->
	<input type="checkbox" name="terms" required=""><label for="terms">I accept the terms and conditions</label><br>
	<input type="submit" name="submit">
</form><br>
</center>
</body>
</html>


