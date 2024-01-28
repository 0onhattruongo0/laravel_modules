<?php

namespace Modules\User\src\Http\Controllers;

use App\Http\Controllers\Controller;
use Modules\User\src\Models\User;

class UserController extends Controller{

    public function index(){
        return view('user::list');
    }
    public function detail($id){
        return view('user::detail',compact('id'));
    }
    public function create(){
        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->save();
    }

}