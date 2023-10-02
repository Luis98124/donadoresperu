<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Console\View\Components\Choice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('banner.index');
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
            'tipo' => ['required', 'in:a-,A-,b-,B-,ab-,AB-,o-,O-,rh-,RH-,a+,A+,b+,B+,ab+,AB+,o+,O+,rh+,RH+'],

        ]);
        $banners =new Banner();
        $banners->nombre=$request->get('nombre');
        $banners->apellido=$request->get('apellido');
        $banners->edad=$request->get('edad');
        $banners->tipo=$request->get('tipo');
        $banners->telefono=$request->get('telefono');
        $banners->email=$request->get('email');
        $banners->comentario=$request->get('comentario');
        $banners->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
    }
    public function nuevo()
    {
        return view('banner.nosotros');
    }
    public function mapa()
    {
        return view('banner.hospital');
    }

} 
