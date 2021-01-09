<!DOCTYPE html>
<html>
<head>
	<title> Home Page</title>
</head>
<body>
	<h1>Welcome home, </h1>
<a href="{{route('user.home')}}">Home</a> |
	<a href="create.php">Create New User</a> |
	<a href="userlist.php">User List</a> |
	<a href="../php/logout.php">logout</a>

	<h3>User list</h3>
    <div id="table">
        <table border="1" width="100%" align="center">
            <thead>
                <tr>
                    <th style="color:red">User name</th>
                    <th style="color:red">User Phone</th>
                    <th style="color:red">E-mail</th >
                    <th style="color:red">Address</th> 
                    <th style="color:red">City</th> 
                    <th style="color:red">Hobby</th> 
                    <th style="color:red">Action</th>
                </tr>
            </thead>
            <tbody>
                
@for($i=0; $i < count($users); $i++)
<tr>
    <td>{{$users[$i]['username']}}</td>
    <td>{{$users[$i]['contact']}}</td>
    <td>{{$users[$i]['email']}}</td>
    <td>{{$users[$i]['address']}}</td>
    <td>{{$users[$i]['city']}}</td>
    <td>{{$users[$i]['hobbies']}}</td>
    <td>
        <a href="{{route('user.delete', $users[$i]['uid'])}}">Delete</a> 
        <a href="{{route('user.edit', $users[$i]['uid'])}}">Edit</a> 
        <a href="{{route('user.details', $users[$i]['uid'])}}">Read</a> 
    </td>
</tr>
@endfor
        </table>
        
	 <div>
		{{ $users->links() }}
     </div>
     <style>
        .w-5{
            display: none;
        }
    </style>
</body>
</html>