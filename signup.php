<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>login</title>
</head>
<body class="text-center">
	<main class="form-signin">
  	<form action="process-register.php" method="POST">
    	<img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    	<h1 class="h3 mb-3 fw-normal">Sign up</h1>

    	<div class="form-floating mb-1 mx-auto" style="width:300px;">
      		<input name="username_acc" type="username" class="form-control" id="floatingInput" placeholder="username" required>
      		<label for="floatingInput">Username</label>
    	</div>
    	<div class="form-floating mb-1 mx-auto" style="width:300px;">
      		<input name="password_acc" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      		<label for="floatingPassword">Password</label>
		</div>
		<button class=" btn btn-lg btn-primary " type="submit">Sign up</button>
		<a href="login.php"class="btn btn-lg btn-secondary" type="submit">Login</a>
  	</form>
</main>
</body>
</html>
