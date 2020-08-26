<?php

namespace App\Http\Controllers;

use App\Correo;
use App\Historial_correo;
use App\Notification;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CorreoController extends Controller {
    
    public function create(Request $request) {

        $date = Carbon::now('America/Bogota');

        $correo = Correo::create([
            'fecha' => $date->isoFormat('Y-MM-D'), 
            'nombre' => $request['nombre'], 
            'apellido' => $request['apellido'], 
            'email' => $request['email'], 
            'asunto' => $request['asunto'], 
            'mensaje' => $request['mensaje']
        ]);

        if ($correo->save()) {
            $notificacion = Notification::create([
                'tipo' => 'Correos',
                'permiso' => 'correos',
                'url' => '/correos/nuevos',
                'mensaje' => 'Tiene un correo nuevo',
            ]);

            $notificacion->save();
            return '1';
        } else {
            return '0';
        }
        
    }

    public function historial(Request $request) {
        $historial = Correo::with('historial')->where('id', $request['id'])->first();
        // dd($historial);
        return view('historial_correo', ['historial' => $historial]);
    }

    public function responder(Request $request) {

        $date = Carbon::now('America/Bogota');

        $responder = Historial_correo::create([
            'fecha' => $date->isoFormat('Y-MM-D'), 
            'respuesta' => $request['mensaje'],
            'correos_id' => $request['correos_id']
        ]);

        if ($responder->save()) {
            return redirect()->back()->with('success', 1);
        } else {
            return redirect()->back()->with('success', 0);
        }
        
    }
}
