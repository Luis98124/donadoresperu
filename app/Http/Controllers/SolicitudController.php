<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Closure;
use Illuminate\Http\Request;
<<<<<<< HEAD
<<<<<<< HEAD

/**
 * Class SolicitudController
 * @package App\Http\Controllers
 */
class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicituds = Solicitud::paginate();

        return view('solicitud.index', compact('solicituds'))
            ->with('i', (request()->input('page', 1) - 1) * $solicituds->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $solicitud = new Solicitud();
        return view('solicitud.create', compact('solicitud'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Solicitud::$rules);

        $solicitud = Solicitud::create($request->all());

        return redirect()->route('banner.index')
            ->with('success', 'Solicitud created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitud = Solicitud::find($id);

        return view('solicitud.show', compact('solicitud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitud = Solicitud::find($id);

        return view('solicitud.edit', compact('solicitud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Solicitud $solicitud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitud $solicitud)
    {
        request()->validate(Solicitud::$rules);

        $solicitud->update($request->all());

        return redirect()->route('solicituds.index')
            ->with('success', 'Solicitud updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $solicitud = Solicitud::find($id)->delete();

        return redirect()->route('solicituds.index')
            ->with('success', 'Solicitud deleted successfully');
=======
=======
use Illuminate\Support\Facades\Gate;
>>>>>>> gula
use Spatie\Ignition\Contracts\Solution;


class SolicitudController extends Controller
{
 

    public function __construct() {
        $this->middleware('can:donador')->only('create','store');
        $this->middleware('can:admin')->only('edit','destroy','show','update','index');
        
        
    }
    public function auth()
    {
        if (auth()->check()) {
            return view('solicitud.index');
        } else {
            return view('principal.index');
        }

    }
    public function index(Request $request)
    {
        $busqueda = $request ->busqueda;
        $solicituds=Solicitud::where('nombre_apellidos','LIKE','%'.$busqueda.'%')
        ->orWhere('solicitante','LIKE','%'.$busqueda.'%')
        ->orWhere('DNI','LIKE','%'.$busqueda.'%')
        ->orWhere('tipo_sangre','LIKE','%'.$busqueda.'%')
        ->latest('id')->PAGINATE();
        $data =[
            'solicitud'=>$solicituds
        ];
        return view('solicitud.index',$data);
        
    }

    public function create()
    {
        
        return view('solicitud.create');
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'solicitante' => 'required',
            'nombre_apellidos' => 'required',
            'DNI' => ['required', 'size:8'],
            'tipo_sangre' => ['required'], 
            'terminos' => ['required'], 


        ]);
        $solicituds =new Solicitud();
        $solicituds->solicitante=$request->get('solicitante');
        $solicituds->nombre_apellidos=$request->get('nombre_apellidos');
        $solicituds->DNI=$request->get('DNI');
        $solicituds->tipo_sangre=$request->get('tipo_sangre');
        $solicituds->terminos=("Aceptado");
        $solicituds->save();
        session()->flash('success', 'SE MUESTRA LOS DATOS COINCIDENTES ');
        return redirect("/donadore?busqueda={$solicituds->tipo_sangre}");
    }

    public function edit($id)
    {
        $solicitud = Solicitud::find($id);
        return view('solicitud.edit')->with('solicitud',$solicitud);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'solicitante' => 'required',
            'nombre_apellidos' => 'required',
            'DNI' => ['required', 'size:8'],
            'tipo_sangre' => ['required'],

        ]);
        $solicituds =Solicitud::find($id);
        $solicituds->solicitante=$request->get('solicitante');
        $solicituds->nombre_apellidos=$request->get('nombre_apellidos');
        $solicituds->DNI=$request->get('DNI');
        $solicituds->tipo_sangre=$request->get('tipo_sangre');
        $solicituds->save();
        return redirect('/solicitud');
    }


    public function destroy($id)
    {
        $solicitud = Solicitud::find($id)->delete();
    
        return redirect()->route('solicitud.index');
>>>>>>> gula
    }
}
