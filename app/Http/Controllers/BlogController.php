<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\BlogFormRequest;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function __construct(){

    }

    public function index(Request $request){
        if ($request) {
            $query=trim($request->get('searchText'));
            $blogs=DB::table('blog')->where('titular','LIKE','%'.$query.'%')
                ->where('estado','=','1')
                ->orderBy('cod_blog','desc')
                ->paginate(9);

            return view('admin.blog.index',["blogs"=>$blogs,"searchText"=>$query]);
        }
        /*if ($request) {
            $query=trim($request->get('searchText'));
            $blogs=DB::table('blog as b')
                ->join('usuario as a', 'b.cod_user','=','a.cod_user')
                ->select('b.img_portada','b.img_blog','b.titular','a.nom_user','b.fecha','b.descripcion')
                ->where('titular','LIKE','%'.$query.'%')
                ->orderBy('b.cod_blog','desc')
                ->paginate(9);

            return view('admin.blog.index',["blogs"=>$blogs,"searchText"=>$query]);
        }*/
    }


    /*public function username(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $username=DB::table('blog')
            ->select('cod_user')
            ->join('usuario', 'usuario.cod_user', '=', 'blog.cod_user')
            ->get();

        return view('query-builder.query-builder')
            ->with('username',$username);
    }*/

    public function create(){
        return view('admin.blog.create');
    }

    public function store(BlogFormRequest $request, $username){
        $blog=new Blog;
        if ($request->hasFile('img_portada')) {
            $file=$request->file('img_portada');
            $file->move(public_path().'/img/blog/',$file->getClientOriginalName());
            $blog->img_portada=$file->getClientOriginalName();
        }
        if ($request->hasFile('img_blog')) {
            $file2=$request->file('img_blog');
            $file2->move(public_path().'/img/blog/',$file2->getClientOriginalName());
            $blog->img_blog=$file2->getClientOriginalName();
        }
        $blog->titular=$request->get('titular');
        $blog->cod_user=$request->get('cod_user');
        $blog->fecha=$request->get('fecha');
        $blog->descripcion=$request->get('descripcion');
        $blog->estado='1';
        $blog->save();
        return Redirect::to('admin/blog');
    }

    public function show($cod){
        return view("admin.blog.show",["blog"=>Blog::findOrFail($cod)]);
    }

    public function edit($cod){
        return view("admin.blog.edit",["blog"=>Blog::findOrFail($cod)]);
    }

    public function update(BlogFormRequest $request, $cod){
        $blog=Blog::findOrFail($cod);
        if ($request->hasFile('img_portada')) {
            $file=$request->file('img_portada');
            $file->move(public_path().'/img/blog/',$file->getClientOriginalName());
            $blog->img_portada=$file->getClientOriginalName();
        }
        if ($request->hasFile('img_blog')) {
            $file2=$request->file('img_blog');
            $file2->move(public_path().'/img/blog/',$file2->getClientOriginalName());
            $blog->img_blog=$file2->getClientOriginalName();
        }
        $blog->titular=$request->get('titular');
        $blog->cod_user=$request->get('cod_user');
        $blog->fecha=$request->get('fecha');
        $blog->descripcion=$request->get('descripcion');
        $blog->update();
        return Redirect::to('admin/blog');
    }

    public function destroy($cod){
        Blog::destroy($cod);
        return Redirect::to('admin/blog');
    }
}
