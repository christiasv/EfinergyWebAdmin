<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UsersFormRequest;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        if ($request) {
            $query=trim($request->get('searchText'));
            $user=DB::table('users')->where('name','LIKE','%'.$query.'%')
                ->orderBy('id','desc')
                ->paginate(7);

            return view('seguridad.usuario.index',["usuarios"=>$user,"searchText"=>$query]);
        }
    }

    public function create(){
        return view("seguridad.usuario.create");
    }

    public function store(UsersFormRequest $request){
        $user=new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();
        return Redirect::to('seguridad/usuario');
    }

    public function show($id){
        return view("seguridad.usuario.show",["usuario"=>User::findOrFail($id)]);
    }

    public function edit($id){
        return view("seguridad.usuario.edit",["usuario"=>User::findOrFail($id)]);
    }

    public function update(UsersFormRequest $request, $id){
        $user=User::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->update();
        return Redirect::to('seguridad/usuario');
    }

    public function destroy($id){
        $user=DB::table('users')->where('id','=',$id)->delete();
        return Redirect::to('seguridad/usuario');
    }
}
