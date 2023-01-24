<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Proyecto;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProyectoFormRequest;
use DB;

class ProyectoController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){
        if ($request) {
            $query=trim($request->get('searchText'));
            $proyectos=DB::table('proyecto')->where('nombre_proyecto','LIKE','%'.$query.'%')
                ->where('estado','=','1')
                ->orderBy('cod_proyecto','desc')
                ->paginate(9);

            return view('admin.proyecto.index',["proyectos"=>$proyectos,"searchText"=>$query]);
        }
    }

    public function create(){
        return view('admin.proyecto.create');
    }

    public function store(ProyectoFormRequest $request){
        $proyecto=new Proyecto;
        if ($request->hasFile('img_portada')) {
            $file=$request->file('img_portada');
            $file->move(public_path().'/img/proyecto/',$file->getClientOriginalName());
            $proyecto->img_portada=$file->getClientOriginalName();
        }
        if ($request->hasFile('img_curso')) {
            $file1=$request->file('img_curso');
            $file1->move(public_path().'/img/proyecto/',$file1->getClientOriginalName());
            $proyecto->img_curso=$file1->getClientOriginalName();
        }
        $proyecto->nombre_proyecto=$request->get('nombre_proyecto');
        $proyecto->descripcion=$request->get('descripcion');
        $proyecto->objetivo=$request->get('objetivo');
        $proyecto->dirigido_a=$request->get('dirigido_a');
        $proyecto->certificado=$request->get('certificado');
        $proyecto->fecha_inicio=$request->get('fecha_inicio');
        $proyecto->duracion=$request->get('duracion');
        $proyecto->duracion_clase=$request->get('duracion_clase');
        $proyecto->cupos=$request->get('cupos');
        $proyecto->costo=$request->get('costo');
        $proyecto->promocion=$request->get('promocion');
        $proyecto->descr_docente=$request->get('descr_docente');
        if ($request->hasFile('fotografia')) {
            $file2=$request->file('fotografia');
            $file2->move(public_path().'/img/proyecto/',$file2->getClientOriginalName());
            $proyecto->fotografia=$file2->getClientOriginalName();
        }
        $proyecto->nom_docente=$request->get('nom_docente');
        $proyecto->estado='1';
        $proyecto->save();
        return Redirect::to('admin/proyecto');
    }

    public function show($cod){
        return view("admin.proyecto.show",["proyecto"=>Proyecto::findOrFail($cod)]);
    }

    public function edit($cod){
        return view("admin.proyecto.edit",["proyecto"=>Proyecto::findOrFail($cod)]);
    }

    public function update(ProyectoFormRequest $request, $cod){
        $proyecto=Proyecto::findOrFail($cod);
        if ($request->hasFile('img_portada')) {
            $file=$request->file('img_portada');
            $file->move(public_path().'/img/proyecto/',$file->getClientOriginalName());
            $proyecto->img_portada=$file->getClientOriginalName();
        }
        if ($request->hasFile('img_curso')) {
            $file1=$request->file('img_curso');
            $file1->move(public_path().'/img/proyecto/',$file1->getClientOriginalName());
            $proyecto->img_curso=$file1->getClientOriginalName();
        }
        $proyecto->nombre_proyecto=$request->get('nombre_proyecto');
        $proyecto->descripcion=$request->get('descripcion');
        $proyecto->objetivo=$request->get('objetivo');
        $proyecto->dirigido_a=$request->get('dirigido_a');
        $proyecto->certificado=$request->get('certificado');
        $proyecto->fecha_inicio=$request->get('fecha_inicio');
        $proyecto->duracion=$request->get('duracion');
        $proyecto->duracion_clase=$request->get('duracion_clase');
        $proyecto->cupos=$request->get('cupos');
        $proyecto->costo=$request->get('costo');
        $proyecto->promocion=$request->get('promocion');
        $proyecto->descr_docente=$request->get('descr_docente');
        if ($request->hasFile('fotografia')) {
            $file2=$request->file('fotografia');
            $file2->move(public_path().'/img/proyecto/',$file2->getClientOriginalName());
            $proyecto->img_portada=$file2->getClientOriginalName();
        }
        $proyecto->nom_docente=$request->get('nom_docente');
        $proyecto->update();
        return Redirect::to('admin/proyecto');
    }

    public function destroy($cod){
        Proyecto::destroy($cod);
        return Redirect::to('admin/proyecto');
    }
}
