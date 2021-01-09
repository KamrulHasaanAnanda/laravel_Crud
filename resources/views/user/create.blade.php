<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <h1>Create User </h1>
	<a href="home.php">Home</a> |
	<a href="create.php">Create New User</a> |
	<a href="userlist.php">User List</a> |
	<a href="../php/logout.php">logout</a>

	<h3>User list</h3>
    <div class="container">
        <br>
        <br>
        <form method="post" action="">
        @csrf
        <tr>
            <td>
                Name :
            </td>
            <td>
                <input type="text" name="username" id="">
                @error('username')	
                <span style="color: red">*{{ $message }}</span><br><br>
                @enderror
            </td>
        </tr>    
        <br> <br>  
        <tr>
            <td>
                 Email :
            </td>
            <td>
                <input type="email" name="email" id="">
                @error('email')	
                <span style="color: red">*{{ $message }}</span><br><br>
                @enderror
            </td>
        </tr>
        <br><br>
        <tr>
            <td>
                Contact :
            </td>
            <td>
                <input type="text" name="contact" id="">
                @error('contact')	
                <span style="color: red">*{{ $message }}</span><br><br>
                @enderror
            </td>
        </tr>
        <br><br>
        <tr>
            <td>
                Gender :
            </td>
            <br>
            <td>
                 <input type="radio" id="male" name="gender" value="male">
                 <label for="male">Male</label><br>
                 <input type="radio" id="female" name="gender" value="female">
                 <label for="female">Female</label><br>
                 <input type="radio" id="other" name="gender" value="other">
                 <label for="other">Other</label>
            </td>
        </tr>
        <br><br>
        <tr>
            <td>
                Hobbies :
            </td>
            <td>
                <input type="checkbox"  name="hobby[]" value="pg">
                <label for="vehicle1"> Playing Games</label><br>
                <input type="checkbox" id="ci" name="hobby[]" value="ci">
                <label for="vehicle2"> Collecting items</label><br>
                <input type="checkbox"  name="hobby[]" value="others">
                <label for="vehicle3"> Others</label>
            </td>
        </tr>
        <br><br>
         <tr>
            <td>
                City :
            </td>
            <td>
              <select name="city" id="City">
              <option value="Dhaka">Dhaka</option>
              <option value="Chittagong">Chittagong</option>
              <option value="Rajshahi">Rajshahi</option>
             <option value="Barishal">Barishal</option>
            </select>
            </td>
        </tr>
        <br><br>
         <tr>
            <td>
                Address :
            </td>
            <td>
               <textarea id="w3review" name="address" rows="3" cols="30"></textarea>
               @error('address')	
                <span style="color: red">*{{ $message }}</span><br><br>
                @enderror
            </td>
        </tr>
        <br><br>
        <tr>
            <td>
                Password :
            </td>
            <td>
                <input type="text" name="password" id="">
                @error('password')	
                <span style="color: red">*{{ $message }}</span><br><br>
                @enderror
            </td>
        </tr>
        <br><br>
        <tr>
            <td>
            <input type="submit" name='submit' value="Add Employee">
            </td>

        </tr>
            @if (Session::has('re-msg'))
                    <br><br>
                    <div>
                        <span class="alert alert-danger" style="margin-left: 9%">{{ session('re-msg') }}</span>
                    </div>
            @endif
          </form>
    </div>
</body>
</html>