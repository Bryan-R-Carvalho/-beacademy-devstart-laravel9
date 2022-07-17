<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function show($id){
        $user = User::find($id);

        if($user){
            return view('users.show', compact('user'));
        } else {
            echo('Usuário não encontrado');
        }
    }
    
    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        /*$user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();*/
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $this->model->create($data);
        
        return redirect()->route('users.index');
    }

}