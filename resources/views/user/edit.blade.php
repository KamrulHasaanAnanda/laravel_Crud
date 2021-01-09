<!DOCTYPE html>
<html>
<head>
    <title> Home Page</title>
    <link href="../assets/css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../assets/css/home.css">
</head>
<body>

<center>
    <h1>Give Your Data Below</h1>
<br>
<br>
<br>
<form method="POST" >
    @csrf
    <fieldset style="width:30%">
        <legend> Edit Your Data</legend>
    
        <table>
            <tr>
                <td>
                    Employee Name :
                </td>
                <td>
                    <input type="text" name="username" id="", value="{{ $user->username }}">
                </td>
            </tr>           
            
            
            <tr>
                <td>
                     Email :
                </td>
                <td>
                    <input type="email" name="email" id="", value="{{ $user->email }}">
                </td>
            </tr>


            <tr>
                <td>
                    Contact No :
                </td>
                <td>
                    <input type="text" name="contact" id="", value="{{ $user->contact }}">
                </td>
            </tr>

            <tr>
                <td>
                    Gender :
                </td>
                <td>
                     <input type="radio" name="gender" @if($user->gender=="male") checked @endif value="male">
                     <label for="male">Male</label><br>
                     <input type="radio" @if($user->gender=="Female") checked @endif value="female"id="female" name="gender" value="female">
                     <label for="female">Female</label><br>
                     <input type="radio" @if($user['gender'])=="Other" checked @endif value="other" id="other" name="gender" value="other">
                     <label for="other">Other</label>
                </td>
            </tr>


            <tr>
                <td>
                    Hobbies :
                </td>
                <td>
                    <input type="checkbox"  name="hobby[]" value="pg" @if(in_array('pg', $hobbies))checked @endif>
                    <label  for="vehicle1"> Playing Games</label><br>
                    <input type="checkbox" id="ci" name="hobby[]" value="ci" @if(in_array('ci', $hobbies))checked @endif>
                    <label for="vehicle2"> Collecting items</label><br>
                    <input type="checkbox"  name="hobby[]" value="others" @if(in_array('others', $hobbies))checked @endif>
                    <label for="vehicle3"> Others</label>
                </td>
            </tr>

             <tr>
                <td>
                    City :
                </td>
                <td>
                  <select name="city" >
                  <option @if($user->city=="Dhaka") selected @endif value="Dhaka">Dhaka</option>
                  <option @if($user->city=="Chittagong") selected @endif value="Chittagong">Chittagong</option>
                  <option @if($user->city=="Rajshahi") selected @endif value="Rajshahi">Rajshahi</option>
                 <option @if($user->city=="Barishal") selected @endif value="Barishal">Barishal</option>
                </select>
                </td>
            </tr>

             <tr>
                <td>
                    Address :
                </td>
                <td>
                   <textarea id="w3review" value="{{ $user->address}}" name="address" rows="3" cols="30"></textarea>
                </td>
            </tr>

            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="text" name="password" id=""value="{{ $user->password }}">
                </td>
            </tr>


            <tr>
                <td>
                    <button type="submit" class="btn btn-default" name="submit",value="save">Save</button>
                </td>
            </tr>
            
        
        </table>
    </fieldset>
    
</form>

</center>
</body>
</html>