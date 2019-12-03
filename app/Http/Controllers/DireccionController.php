<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Direccion;
use App\Http\Requests\DireccionRequest;
class DireccionController extends Controller
{
	public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
    	$direcciones = Direccion::all();
      //  echo Auth;
    	//configuaración
        $config = array();
        $config['center'] = 'concepcion chile';
        $config['map_width'] = 950;
        $config['map_height'] = 480;
        $config['zoom'] = '10';

        \Gmaps::initialize($config);

        $marker = array();
        $marker['infowindow_content'] = 'Usted esta aqui';
        \Gmaps::add_marker($marker);

       foreach ($direcciones as $direccion) {
       	$marker = array();
                $marker ['animation'] = 'DROP';
                $marker['position'] = $direccion->direccion . " " . $direccion->comuna . " " . "chile";
           //     $marker['infowindow_content'] = $alumno->nombre . " " . $alumno->apellido_paterno;
                $marker['onmouseover'] = $marker['infowindow_content'] = $direccion->nombre;
                \Gmaps::add_marker($marker);
       }
       $map = \Gmaps::create_map();
       //return view('direccion.index', compact('map'));
    	return view('direccion.index', compact('map'), ['direcciones' => $direcciones]);

    }

    public function create(){
        return view('direccion.create');
    }

    public function store(DireccionRequest $request){
        $direccion = new Direccion($request->all());
        $direccion->user_id = Auth::user()->id;
        $direccion->save();
        return redirect('direcciones');
    }
}
