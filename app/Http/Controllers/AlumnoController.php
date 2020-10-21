<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models;


use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;



class AlumnoController extends Controller
{
     public function index(){

    $alumno = Models\Alumno::all();



      return view('welcome', compact('alumno'));
  }

  public function create(Request $request)
  {

      // return $request->all();

      $alumnooNuevo = new Models\Alumno;
      $alumnooNuevo->nombre = $request->nombre;
      $alumnooNuevo->apaterno = $request->apaterno;
      $alumnooNuevo->amaterno = $request->amaterno;
      

      $alumnooNuevo->save();

      return back();
  }
}
