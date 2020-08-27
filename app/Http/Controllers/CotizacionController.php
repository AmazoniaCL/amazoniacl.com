<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notification;
use App\Cotizacion;
use Carbon\Carbon;

class CotizacionController extends Controller
{
    public function create(Request $request) {
        
        $date = Carbon::now('America/Bogota');

        $num = 'COT'.$date->format('Y').$date->format('m').$date->format('d').$date->format('H').$date->format('i').'-'.$date->format('s');

        $cotizacion = Cotizacion::create([
            'num_cotizacion' => $num,
            'fecha' => $date->toDateTimeString(), 
            'nombre' => $request['nombre'],
            'correo' => $request['correo'],
            'telefono' => $request['telefono'],
            'departamento_origen' => $request['departamento_origen'],
            'ciudad_origen' => $request['ciudad_origen'],
            'departamento_destino' => $request['departamento_destino'],
            'ciudad_destino' => $request['ciudad_destino'],
            'fecha_ida' => $request['fecha_ida'],
            'fecha_regreso' => $request['fecha_regreso'],
            'tipo_servicio' => $request['tipo_servicio'],
            'tipo_vehiculo' => $request['tipo_vehiculo'],
            'recorrido' => $request['recorrido'],
        ]);

        if ($cotizacion->save()) {
            $notificacion = Notification::create([
                'tipo' => 'Cotizaciones',
                'permiso' => 'cotizaciones',
                'url' => '/cotizaciones/nuevas',
                'mensaje' => 'Tiene una cotización nueva',
            ]);

            $notificacion->save();
            return ['creado' => 1];
        } else {
            return ['creado' => 0];
        }
        
    }

    public function aceptar(Request $request) {

        $cotizacion = Cotizacion::find($request['id']);

        // dd($cotizacion);
        
        $cotizacion->aceptada = "1";
        $cotizacion->save();

        return view('aceptar_cotizacion');
        
    }
}

