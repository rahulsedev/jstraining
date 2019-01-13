<!DOCTYPE html>
<html lang="en-US">
<head>
<title>First form validation</title>
<link href="lib/bootstrap.min.css" rel="stylesheet">
<style>
    .errorMsg {
        color: red;
        font-size: 12px;
        
    }
</style>
</head>
<body>
	<div class="container">
<form method="post" class="form-group" id="myForm" name="myForm" enctype="multipart/form-data" onsubmit="return myFormvalid()">

<div class="form-group">
	<label for="emailid">Email ID:</label>
	<input class="form-control" type="email" id="emailid" name="emailid" maxlength="100">
	<span id="error-emailid" class="errorMsg"></span>
	</div>

<div class="form-group">
	<label for="myname">Enter Your Name:</label>
	<input class="form-control" type="text" id="myname" name="myname" maxlength="100">
	<span id="error-myname" class="errorMsg"></span>
	</div>	

<div class="form-group">
	<label for="sex">Select Your Sex:</label>
	<select class="form-control" name="sex" id="sex" required>
		<option value="Select Your Sex" selected>Select Your Sex</option>
		<option value="Male">Male</option>
		<option value="Female">Female</option>
	</select>
	<span id="error-sex" class="errorMsg"></span>
	</div>		


<div class="form-group">
	<label for="address">Enter Address:</label>
	<textarea id="address" name="address" class="form-control"></textarea>
	<span id="error-address" class="errorMsg"></span>
	</div>	

	<div class="form-group row">
                <div class="col-sm-10">
                    <button name="submit" type="submit" class="btn btn-success">Sign In</button>
                </div>
            </div>



</form>
</div>
<script src="myjs/validate.js"></script>
<script type="text/javascript">
	function myFormvalid(e)
	{
		event.preventDefault(); 
		
		return myvalidator.validator();
	}


</script>
</body>