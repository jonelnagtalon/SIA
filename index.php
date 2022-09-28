<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<title>1st Activity</title>
</head>
<body>
<?php 
$name="Jonel G. Nagtalon";
$YearSec="BSIT-4A";
$subject="SIA";
?>
<div class="row justify-content-center">
<div class="col-md-7 bg-white p-5">
	<br><br><br><br>
	<div class="container alert alert-success">
		<br><br>
			 <div>
		    <center>   
		      <form>
		      <h4>My Info</h4>
		      <br><br>
		      <label>Name</label>
		  		<input type="text" value="<?php echo $name;?>" size="50" readonly>
		  	<br><br>
		  	<label>Section</label>
		  		<input type="text" value="<?php echo $YearSec;?>" size="50" readonly>
		  	 <br><br>
		      <label>Subject</label>
		  		<input type="text" value="<?php echo $subject;?>" size="50" readonly>
		  		<br><br><br><br><br><br>		      
		  </div>
		</div>
	</div>
	</div>
</div>
</body>
</html>