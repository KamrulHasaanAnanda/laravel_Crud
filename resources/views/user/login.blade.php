
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
</head>
<body>
	<form method="post" action="">
		@csrf
		<fieldset>
			<legend>LOGIN</legend>
			<div class="form-group">
  					<label for="usr">Name:</label>
					  <input type="text" class="form-control" id="usr" name="username">
					  @error('username')	
                		<span style="color: red">*{{ $message }}</span><br><br>
                	  @enderror
				</div>
				<div class="form-group">
  					<label for="pwd">Password:</label>
					  <input type="password" class="form-control" id="pwd" name="password">
					  @error('password')	
                		<span style="color: red">*{{ $message }}</span><br><br>
                	  @enderror
				</div>
				<span style="color: red">{{session('msg')}}</span>
				<button type="submit" class="btn btn-default" name="submit">Submit</button>
		</fieldset>
	</form>
</body>
</html>