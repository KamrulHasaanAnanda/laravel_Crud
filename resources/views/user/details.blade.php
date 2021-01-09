<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
</head>
<body>
	
	<a href="{{route('user.home')}}">Back</a> |
	<a href="/logout">Logout</a>
	<br> <br><br>
	<table border="2" align="center">
		<tr>
			<td>Username : </td>
			<td>{{$user['username']}}</td>
		</tr>
		<tr>
			<td>Gender : </td>
			<td>{{$user['gender']}}</td>
		</tr>
		<tr>
			<td>Address :</td>
			<td>{{$user['address']}}</td>
        </tr>
        <tr>
			<td>Contact :</td>
			<td>{{$user['contact']}}</td>
		</tr>
	</table>
	
</body>
</html>