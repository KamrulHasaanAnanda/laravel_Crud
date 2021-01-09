<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class UserController extends Controller
{
    //
     public function index(){
       //$users = User::paginate(10);
        return view('user.index');
        //$users = User::paginate(15);
        //    <div class="container">
//     @foreach ($users as $user)
//         {{ $user->name }}
//     @endforeach
// </div>
// {{ $users->links() }}

    }
    public function create(){
    	return view('user.create');
    }
    //Validator::make($req->all(),
    public function store(Request $req){
		$validate = Validator::make($req->all(), [
			'username' => 'min:3|required|max:50|string',
			'password' => 'required|min:4',
            'contact' => 'required|min:11|max:11',
            'address' => 'string|min:3|required',
            
		]);
		
		if($validate->fails()){
			return redirect()->route('user.create')->withErrors($validate)->withInput();
		}
			else{

                $user = new User();
                $hobbies=implode(',',$req['hobby']);
                $user->username = $req->username;
                $user->email = $req->email;
                $user->gender = $req->gender;
                //$user->hobbies= $req->hobbies;
                $user->hobbies=implode(',',$req->hobby);
                $user->city = $req->city;
                $user->address = $req->address;
                $user->password = $req->password;
                $user->contact = $req->contact;
				$user->save();
				return redirect()->route('user.list');
			}
		}
    
    public function userlist(){
        $users  = User::all();
        $users = User::paginate(2);
        return view('user.userlist')->with('users', $users);
    }
    public function edit(User $users, $id,Request $req)
    {
        $users = User::find($id);
        $hobbies = explode(",", $users->hobbies);
        // dd($hobbies);
        return view('user.edit')->with('user', $users)->with('hobbies',$hobbies);
    }
    public function update(Request $req, User $users, $id)
    {
        $users = User::find($id);
        $users->username = $req->username;
        $users->email = $req->email;
        $users->gender = $req->gender;
        $users->hobbies=implode(',',$req->hobby);
        //$users->hobbies=$req->hobby;
        $users->city = $req->city;
        $users->contact = $req->contact;
        $users->address = $req->address;
        $users->password = $req->password;
        $users->save();
        return redirect()->route('user.list');
        //$req->session()->flash('success', 'Updated Successfully');
    }

    public function destroy(User $users, $id, Request $request)
    {
        $users = User::find($id);
        $users->delete();

        $request->session()->flash('success', "Deleted Succesfully!");
        return redirect()->back();
    }

    public function details(Request $req, $id){

        $u = User::find($id);
        return view('user.details', ['user'=> $u]);
    }
    // 
    
    /////////////search
    public function search()
    {
     return view('user.search');
    }

    public function usersearch(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('user')
         ->where('username', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('city', 'like', '%'.$query.'%')
         ->orWhere('gender', 'like', '%'.$query.'%')
         ->orderBy('uid', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('user')
         ->orderBy('uid', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->username.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->city.'</td>
         <td>'.$row->gender.'</td>
         <td> 
                <a href="user/delete{id}">Delete</a>
            </td>
                  
         
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
    //////////////multiple delete///////////////
    public function ulist(Request $request)
	{
		$list = User::orderby('uid', 'desc')->get();
		return view('user.multiple')->with('list', $list);
	}

	public function multipleusersdelete(Request $request)
	{
		$id = $request->id;
		foreach ($id as $user) 
		{
			User::where('uid', $user)->delete();
		}
		return redirect();
	}


}
