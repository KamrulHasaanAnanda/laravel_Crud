

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
    <a href="{{route('user.logout')}}">logout</a>
    

    <form method="post" action="{{route('user.mdelete')}}">
		{{ csrf_field() }}
		<br>
		<input class="btn btn-success" type="submit" name="submit" value="Delete All Users"/>
		<br><br>
		<table class="table-bordered table-striped" width="50%">
			<thead>
				<tr>
					<th class="text-center">Sl no</th>
                    <th class="text-center">User Name</th>
                    <th class="text-center">Gender</th>
					<th class="text-center"> <input type="checkbox" id="checkAll"> Select All</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i=1;
				foreach ($list as $key => $value) {
                    $username = $list[$key]->username;
                    $gender = $list[$key]->gender;
					?>
					<tr>
						<td>{{$i}}</td>
                        <td>{{$username}}</td>
                        <td>{{$gender}}</td>
						<td><input name='uid[]' type="checkbox" id="checkItem" 
                         value="<?php echo $list[$key]->uid; ?>">
						</tr>
						<?php $i++; }?>
					</tbody>
				</table>
				<br>
			</form>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script language="javascript">
			$("#checkAll").click(function () {
				$('input:checkbox').not(this).prop('checked', this.checked);
			});
		</script>




<hr>
</body>
</html>
