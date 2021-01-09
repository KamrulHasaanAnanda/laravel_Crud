<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class MdeleteController extends Controller
{
    //
    public function delete(){
        $users  = User::all();
        return view('delete')->with('users',$users);

    }
    public function mdelete(Request $req){
        $uid = $req->get('id');
		foreach ($uid as $user) 
		{
			User::where('uid', $user)->delete();
		}
		return redirect()->route('mdelete');
    }
}
