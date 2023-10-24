<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Console\View\Components\Choice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use function Laravel\Prompts\alert;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $busqueda = $request ->busqueda;
        $banners=Banner::where('nombre','LIKE','%'.$busqueda.'%')->orWhere('apellido','LIKE','%'.$busqueda.'%')->orWhere('tipo','LIKE','%'.$busqueda.'%')->latest('id')->PAGINATE();
        $data =[
            'banners'=>$banners
        ];
        return view('banner.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => ['required','integer','min:18','max:50'],
            'telefono' => ['required','size:9'],
            'email' => ['required','email:rfc,dns'],
            'tipo' => ['required'],

        ]);
        $banners =new Banner();
        $banners->nombre=$request->get('nombre');
        $banners->apellido=$request->get('apellido');
        $banners->edad=$request->get('edad');
        $banners->tipo=$request->get('tipo');
        $banners->telefono=$request->get('telefono');
        $banners->email=$request->get('email');
        $banners->comentario=("");
        $banners->verificacion=("Proceso");
        $banners->save();
        return redirect('/banner');
    }
    public function edit( $id)
    {
        $banner = Banner::find($id);

        return view('banner.edit')->with('banner',$banner);
    }

    /**
     * Update the specified resource in storage.    
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'comentario' => 'required',
            'apellido' => 'required',
            'edad' => ['required','integer','min:18','max:50'],
            'telefono' => ['required','size:9'],
            'email' => ['required','email:rfc,dns'],
            'tipo' => ['required'],

        ]);
        $banners=Banner::find($id);
        $banners->nombre=$request->get('nombre');
        $banners->apellido=$request->get('apellido');
        $banners->edad=$request->get('edad');
        $banners->tipo=$request->get('tipo');
        $banners->telefono=$request->get('telefono');
        $banners->email=$request->get('email');
        $banners->comentario=$request->get('comentario');
        $banners->verificacion=$request->get('verificacion');
        $banners->save();
        return redirect('/banner');
    }
    public function destroy(string $id)
        {
            $banner = Banner::find($id)->delete();
    
            return redirect()->route('banner.index');
        }
    public function nuevo()
    {
        return view('banner.nosotros');
    }
    public function mapa()
    {
        return view('banner.hospital');
    }
    public function VerBannerDatos(Request $request)
    {
            
    }
} 
