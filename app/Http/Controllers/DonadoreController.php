<?php

namespace App\Http\Controllers;

use App\Models\Donadore;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth;

/**
 * Class DonadoreController
 * @package App\Http\Controllers
 */
class DonadoreController extends Controller
{ 

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donadore.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donadore.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'talla' => ['required','integer','min:150','max:180'],
            'peso' => ['required','integer','min:55','max:90'],
            'edad' => ['required','integer','min:18','max:50'],
            'fecha' => ['required'],
            'tipo' => ['required', 'in:a-,A-,b-,B-,ab-,AB-,o-,O-,rh-,RH-,a+,A+,b+,B+,ab+,AB+,o+,O+,rh+,RH+'],

        ]);
        $donadore = Donadore::create($request->all());
        $donadores =new Donadore();
        $donadores->usuario=$request->get('usuario');
        $donadores->talla=$request->get('talla');
        $donadores->edad=$request->get('edad');
        $donadores->peso=$request->get('peso');
        $donadores->sexo=$request->get('sexo');
        $donadores->fecha=$request->get('fecha');
        $donadores->tipo=$request->get('tipo');
        $donadores->save();
        return redirect('/donadore');
        
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {

    }


    public function update(Request $request, Donadore $donadore)
    {

    }


    public function destroy($id)
    {

    }
 
}
