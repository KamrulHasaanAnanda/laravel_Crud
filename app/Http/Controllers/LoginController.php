<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    //
    public function login(){
        return view('user.login');
    }
    
    public function verify(Request $req){

    	$validation = Validator::make($req->all(), [
    	 	'email' => 'required',
    		'password' => 'required|min:4'
		]);

    	if ($validation->fails())
    	{
    		return redirect()->route('login')->withErrors($validation)->withInput();
    	}
    	else{

        	 $user = User::where(['username'=>$req->username,'password'=>$req->password])->first();
			 //$user = DB::table('user')
			//  ->where('username', $req->username)
			//  ->where('password', $req->password)
			//  ->first();
            if (count((array)$user) > 0) 
            {	
					$req->session()->put('username', $user->username);
					$req->session()->put('email', $user->email);
					$req->session()->put('uid',$user->uid);
            		return redirect()->route('user.index');
            }
        	else{
    			$req->session()->flash('msg', 'Invalid Username/Password');
    			return redirect()->route('login');
    		}
    	}	
    }
    public function logout(Request $req){
        $req->session()->flush();
    	return redirect()->route('login');
    }}
