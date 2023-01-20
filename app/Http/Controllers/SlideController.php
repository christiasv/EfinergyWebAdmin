<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Slide;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\SlideFormRequest;
use DB;

class SlideController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){
        if ($request) {
            $query=trim($request->get('searchText'));
            $slider=DB::table('index-slider')->where('titulo','LIKE','%'.$query.'%')
                ->where('estado','=','1')
                ->orderBy('cod_slider','desc')
                ->paginate(3);

            return view('admin.slide.index',["slider"=>$slider,"searchText"=>$query]);
        }
    }

    public function create(){
        return view('admin.slide.create');
    }

    public function store(SlideFormRequest $request){
        $slide=new Slide;
        if ($request->hasFile('slider')) {
            $file=$request->file('slider');
            $file->move(public_path().'/img/slide/',$file->getClientOriginalName());
            $slide->slider=$file->getClientOriginalName();
        }
        $slide->titulo=$request->get('titulo');
        $slide->subtitulo=$request->get('subtitulo');
        $slide->descripcion=$request->get('descripcion');
        $slide->redireccion=$request->get('redireccion');
        $slide->estado='1';
        $slide->save();
        return Redirect::to('admin/slide');
    }

    public function show($cod){
        return view("admin.slide.show",["slide"=>Slide::findOrFail($cod)]);
    }

    public function edit($cod){
        return view("admin.slide.edit",["slide"=>Slide::findOrFail($cod)]);
    }

    public function update(SlideFormRequest $request, $cod){
        $slide=Slide::findOrFail($cod);
        if ($request->hasFile('slider')) {
            $file=$request->file('slider');
            $file->move(public_path().'/img/slide/',$file->getClientOriginalName());
            $slide->imagen=$file->getClientOriginalName();
        }
        $slide->titulo=$request->get('titulo');
        $slide->subtitulo=$request->get('subtitulo');
        $slide->descripcion=$request->get('descripcion');
        $slide->redireccion=$request->get('redireccion');
        $slide->update();
        return Redirect::to('admin/slide');
    }

    public function destroy($cod){
        Slide::destroy($cod);
        return Redirect::to('admin/slide');
    }
}
