<!DOCTYPE html>
<html>
<head>
<title>User Login and Registration</title>
<link rel="stylesheet" type="text/css" href="LoginStyle.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="login-box">
 <div class="row">
   <div class="col-md-6 login-left">
    <h2>Login Here</h2>
<form action="validation.php" method="post">
<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control" required>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>
<div class="button01">
<button>LogIn</button>
</div>
</form>
</div>

<div class="col-md-6 login-right">
    <h2>SignUp Here</h2>
<form action="registration.php" method="post">
<div class="form-group">
<label>First Name</label>
<input type="text" name="fname" class="form-control" required>
</div>

<div class="form-group">
<label>Last Name</label>
<input type="text" name="lname" class="form-control" required>
</div>

<div class="form-group">
<label>Email Address</label>
<input type="text" name="email" placeholder="abc@gmail.com" class="form-control" required>
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<div class="form-group">
<label>Confirm Password</label>
<input type="password" name="pass" class="form-control" required>
</div>
<div class="buttons">
<button class="button02">SignUp</button>
</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>