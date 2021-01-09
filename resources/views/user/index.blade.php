

<!DOCTYPE html>
<html>
<head>
	<title> Home Page</title>
	<link href="../assets/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../assets/css/home.css">
        <script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<h1>Welcome home</h1>
	<a href="{{route('user.home')}}">Home</a> |
	<a href="{{route('user.create')}}">Create New User</a> |
	<a href="{{route('user.list')}}">User List</a> |
	<a href="">Multiple delete</a>
	<a href="route{{'user.search'}}">User Search</a>
	<a href="{{route('user.logout')}}">logout</a>

<hr>
</body>
</html>
