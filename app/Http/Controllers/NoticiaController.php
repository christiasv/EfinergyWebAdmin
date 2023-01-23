<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Noticia;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\NoticiaFormRequest;
use DB;

class NoticiaController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){
        if ($request) {
            $query=trim($request->get('searchText'));
            $noticias=DB::table('index-noticias')->where('descripcion','LIKE','%'.$query.'%')
                ->where('estado','=','1')
                ->orderBy('cod_noticias','desc')
                ->paginate(9);

            return view('admin.noticia.index',["noticias"=>$noticias,"searchText"=>$query]);
        }
    }

    public function create(){
        return view('admin.noticia.create');
    }

    public function store(NoticiaFormRequest $request){
        $noticia=new Noticia;
        $noticia->fecha=$request->get('fecha');
        $noticia->descripcion=$request->get('descripcion');
        $noticia->link=$request->get('link');
        $noticia->estado='1';
        $noticia->save();
        return Redirect::to('admin/noticia');
    }

    public function show($cod){
        return view("admin.noticia.show",["noticia"=>Noticia::findOrFail($cod)]);
    }

    public function edit($cod){
        return view("admin.noticia.edit",["noticia"=>Noticia::findOrFail($cod)]);
    }

    public function update(NoticiaFormRequest $request, $cod){
        $noticia=Noticia::findOrFail($cod);
        $noticia->fecha=$request->get('fecha');
        $noticia->descripcion=$request->get('descripcion');
        $noticia->link=$request->get('link');
        $noticia->update();
        return Redirect::to('admin/noticia');
    }

    public function destroy($cod){
        Noticia::destroy($cod);
        return Redirect::to('admin/noticia');
    }
}
