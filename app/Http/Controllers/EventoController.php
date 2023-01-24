<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Evento;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\EventoFormRequest;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){
        if ($request) {
            $query=trim($request->get('searchText'));
            $eventos=DB::table('evento')->where('titulo','LIKE','%'.$query.'%')
                ->where('estado','=','1')
                ->orderBy('cod_evento','desc')
                ->paginate(9);

            return view('admin.evento.index',["eventos"=>$eventos,"searchText"=>$query]);
        }
    }

    public function create(){
        return view('admin.evento.create');
    }

    public function store(EventoFormRequest $request){
        $evento=new Evento;
        if ($request->hasFile('img')) {
            $file=$request->file('img');
            $file->move(public_path().'/img/evento/',$file->getClientOriginalName());
            $evento->img=$file->getClientOriginalName();
        }
        $evento->titulo=$request->get('titulo');
        $evento->fecha=$request->get('fecha');
        $evento->hora_inicio=$request->get('hora_inicio');
        $evento->hora_fin=$request->get('hora_fin');
        $evento->direccion=$request->get('direccion');
        $evento->estado='1';
        $evento->save();
        return Redirect::to('admin/evento');
    }

    public function show($cod){
        return view("admin.evento.show",["evento"=>Evento::findOrFail($cod)]);
    }

    public function edit($cod){
        return view("admin.evento.edit",["evento"=>Evento::findOrFail($cod)]);
    }

    public function update(EventoFormRequest $request, $cod){
        $evento=Evento::findOrFail($cod);
        if ($request->hasFile('img')) {
            $file=$request->file('img');
            $file->move(public_path().'/img/evento/',$file->getClientOriginalName());
            $evento->img=$file->getClientOriginalName();
        }
        $evento->titulo=$request->get('titulo');
        $evento->fecha=$request->get('fecha');
        $evento->hora_inicio=$request->get('hora_inicio');
        $evento->hora_fin=$request->get('hora_fin');
        $evento->direccion=$request->get('direccion');
        $evento->update();
        return Redirect::to('admin/evento');
    }

    public function destroy($cod){
        Evento::destroy($cod);
        return Redirect::to('admin/evento');
    }
}
