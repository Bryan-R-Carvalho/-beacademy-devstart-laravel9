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


    public function edit($id){
        if(!$user = $this->model->find($id)){
            return redirect()->route('users.index');
        }
        return view('users.edit', compact('user'));
    }


    public function update(Request $request, $id){
        if(!$user = $this->model->find($id)){
            return redirect()->route('users.index');
        }

        $data = $request->only(['name', 'email']);

        if($request->password){
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return redirect()->route('users.index');
    }

    public function destroy($id){
        if(!$user = $this->model->find($id)){
            return redirect()->route('users.index');
        }
        $user->delete();
        return redirect()->route('users.index');
    }
}