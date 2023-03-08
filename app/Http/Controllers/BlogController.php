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
            $query = trim($request->get('searchText'));
            $blogs = DB::table('blog as b')
                ->join('usuario as u', 'b.cod_user', "u.cod_user")
                ->select('b.cod_blog', 'b.img_portada', 'b.img_blog', 'b.titular', 'u.nom_user as nombre', 'b.fecha', 'b.descripcion')
                ->where('b.titular', 'LIKE', '%' . $query . '%')
                ->orderBy('cod_blog', 'desc')
                ->paginate(9);

            return view('admin.blog.index', ["blogs" => $blogs, "searchText" => $query]);
        }
    }

    public function create(){
            $usuarios=DB::table('usuario')->where('estado','=','1')->get();
            return view('admin.blog.create',["usuarios"=>$usuarios]);
    }

    public function store(BlogFormRequest $request){
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
