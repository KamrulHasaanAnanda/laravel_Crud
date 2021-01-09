

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

<hr>
<input type="text" name="search" id="search" class="form-control" placeholder="Search User" />
</div>
<div class="table-responsive">
 <h3 align="center">Total User : <span id="total_records"></span></h3>
 <table class="table table-striped table-bordered" border="1" align="center">
	<thead>
	 <tr>
	  <th>Name</th>
	  <th>Email</th>
	  <th>City</th></th>
	  <th>Gender</th>
	  <th>Action</th>
	 </tr>
	</thead>
	<tbody>

	</tbody>
   </table>
</body>
</html>

<script>
	$(document).ready(function(){
	 fetch_data();
	 function fetch_data(query = '')
	 {
	  $.ajax({
	   url:"{{ route('admin.usersearch') }}",
	   method:'GET',
	   data:{query:query},
	   dataType:'json',
	   success:function(data)
	   {
		$('tbody').html(data.table_data);
		$('#total_records').text(data.total_data);
	   }
	  })
	 }
	 $(document).on('keyup', '#search', function(){
	  var query = $(this).val();
	  fetch_data(query);
	 });
	});
	</script>
