<!DOCTYPE html>
<html>
<head>
	<title>form db</title>
</head>
<body>
<form method="POST" id="form" action="<?php echo base_url('installer/dbGenerator'); ?>">
	host:
	<input type="text" name="host"><br/>
	username:
	<input type="text" name="username"><br/>
	password:
	<input type="text" name="password"><br/>
	dbname:
	<input type="text" name="dbname"><br/>
	<input type="submit" name="submit" value="lanjut>>">
</form>
</body>
</html>
