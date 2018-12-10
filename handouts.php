<!DOCTYPE html>
<html>
<head>
	<title>Handouts</title>
<?php include_once("templates/links.php");?>
</head>
<body>

<?php include_once("templates/header.php");?>
<?php include_once("templates/main_menu.php");?>

<div class=" maincontainer">
	<center><h1>View and Download handouts</h1></center>
	<div class="handouts-filter-bar">
		<center>
					<form>
			<label>Unit Code</label>
			<select>
				<option>Comp 225</option>
				<option>Comp 362</option>
				<option>Comp 150</option>
				<option>Comp 563</option>
				<option>Comp 360</option>
			</select>
			<label style="margin-left: 20px;">Year</label>
				<select >
				<option>2005</option>
				<option>2018</option>
				<option>2013</option>
				<option>2000</option>
				<option>2001</option>
			</select>

		</form>
		</center>
	</div>
	<center><label>All handouts</label></center>
	<div class="display-handouts">
		
		<div class="handout">
			<label>Handout tittle</label><br>
			<label>Unit tittle</label><br>
			<label>Unit code</label><br>
			<label>Unit tittle</label><br>
			<a href="#" class="fas fa-eye">View</a>
			<button class="btn-download fas fa-download">Download</button>
		</div>
		
	</div>
</div>
</body>
<?php include_once("templates/footer.php");?>
</html>