

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Registration form</h2>
  <form action="reg.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control"  placeholder="Enter Name" name="name" required>
    </div>    
    <div class="form-group">
      <label for="mobile number">Mobile Number:</label>
      <input type="mobile number" class="form-control"  placeholder="Enter mobile number" name="mobile" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control"  placeholder="Enter email" name="email" required>
    </div>
	<div class="form-group">
      <label for="pss">Password:</label>
      <input type="password" class="form-control" placeholder="Enter password" name="pass" required>
    </div>


    
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" name=submit class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>

