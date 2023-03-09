<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contacto;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Noticia;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ContactoFormRequest;
use DB;

class ContactoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index($request){

        return view('admin.contacto.index',["contactos"=>$contactos,"searchText"=>$query]);
    }

    public function create(){

    }

    public function store(){

    }

    public function show(){

    }

    public function edit($cod){
        return view("admin.contacto.edit",["contacto"=>Noticia::findOrFail($cod)]);
    }

    public function update(ContactoFormRequest $request, $cod){
        $contacto=Contacto::findOrFail($cod);
        $contacto->direccion=$request->get('direccion');
        $contacto->telefono=$request->get('telefono');
        $contacto->correo_contacto=$request->get('correo_contacto');
        $contacto->correo_frm=$request->get('correo_frm');
        $contacto->update();
        return Redirect::to('admin/contacto');
    }

    public function destroy(){

    }
}
