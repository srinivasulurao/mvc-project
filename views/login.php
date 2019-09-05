<html !Doctype>
<head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
<title><?php echo $data['message']; ?></title>
</head>
<body>
<div class='container'>
<?php
global $root_url;
?>

<div class='col-md-12'>
<div class='jumbotron' style='width:450px;margin:auto;margin-top:150px;'>
<form method='post' action='<?php echo $root_url."/authentication/doLogin"; ?>'>
<label>Username</label>
<input type='text' required='required' name='username' id='username' class='form-control'>
<label>Password</label>
<input type='password' required='required' name='password' name='password' class='form-control' >
<button style='float:right;top:10px;position:relative' type='submit' name='sub' id='sub' class='btn btn-info'> Login </button>
</form>
</div>

</div>
</div>

</body>
</html>