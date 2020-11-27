<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Municipio;

class AdminController extends Controller
{
    public function departamentos() {
        return Departamento::all();
    }

    public function municipios(Request $request) {
        return Departamento::where('nombre', $request['dpt'])->with('municipios')->first();
    }
}
