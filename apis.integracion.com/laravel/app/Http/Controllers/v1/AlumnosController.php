<?php
 
namespace App\Http\Controllers\v1;
 
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
 
class AlumnosController extends Controller
{
   
   public function getAll()
   {
     $response = new \stdclass();

     $Alumnos = Alumno::all();

     $response->success=true;
     $response->data=$Alumnos;

     return response()->json($response,200)
   }


   public function getItem($id)
   {
    $response = new \stdclass();

     $Alumno = Alumno::find($id);

     $response->success=true;
     $response->data=$Alumnos;

     return response()->json($response,200)
   }

   public function save(Request $request)

   {
    $response = new \stdclass();

     $Alumno = new Alumno();
     $Alumno->tipo_documento=$request->tipo_documento;
     $Alumno->numero_documento=$request->numero_documento;
     $Alumno->apellido_paterno=$request->apellido_paterno;
     $Alumno->apellido_materno=$request->apellido_materno;
     $Alumno->nombres=$request->nombres;
     $Alumno->direccion=$request->direccion;
     $Alumno->ubigeo=$request->ubigeo;
     $Alumno->save();

     $response->success=true;
     $response->data=$Alumno;

     return response()->json($response,200)
   }

}