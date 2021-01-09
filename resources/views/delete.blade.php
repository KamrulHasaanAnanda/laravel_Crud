<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#checkAll").click(function(){
            if($(this).is(":checked")){
                $(".checkItem").prop('checked',true);
            }else
            {
                $(".checkItem").prop('checked',false);
            }
        });
    });

    </script>
</head>
<body class="bg-info">
    <form action="" method="post">
        @csrf
        <div class="container">
            <div class="row justify-content-center mt-2">
                <div class="col-md-6 bg-light rounded p-3">
                    <h2 class="text-center">
                        Delete multiple 
                    </h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <td colspan="5">
                                    <input type="submit" name="submit" value="Delete" onclick="return confirm('Are you sure ?')" class="btn btn-danger">
                                </td>
                            </tr>
                          <tr>
                            <th><input type="checkbox" id="checkAll"></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Action</th>

                          </tr>
                        </thead>
                        <tbody>
                         @for($i=0; $i < count($users); $i++)
                         <tr><td><input type="checkbox" class="checkItem" value="{{$users[$i]['uid']}}" name="id[]"></td>   
                                <td>{{$users[$i]['username']}}</td>
                                <td>{{$users[$i]['email']}}</td>
                                <td>{{$users[$i]['city']}}</td>
                                <td>
                                    <a href="{{route('user.delete', $users[$i]['uid'])}}">Delete</a> 
                                    <a href="{{route('user.edit', $users[$i]['uid'])}}">Edit</a> 
                                </td>
                            </tr>`
@endfor
                          </tr>

                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    
    </form>
</body>
</html>