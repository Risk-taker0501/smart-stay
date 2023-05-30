<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserManagementController extends Controller
{
    //
    function index(){
        $members = User::all();
        return $members;
    }
    public function update(Request $request, $id){
    	$member = User::find($id);
    	$input = $request->all();
		$member->fill($input)->save();
    	return $member;
    }
    public function delete($id)
    {
        $members = User::find($id);
        $members->delete();        
        return $members;
    }   
    
}
