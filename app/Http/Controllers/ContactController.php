<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacto = [];

        $contacto = DB::select('SELECT * from contacto');

        return view('contact.contact',[ "contacto"=>$contacto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //echo $request->nombre, ' - ',$request->empresa, ' - ' ,$request->email, ' - ',$request->numero, ' - ',$request->comentario; 
        /* print_r($request);
        echo $request; */
        // foreach ($request as $requests) {
        //     $idclie=$requests->get['nombre'];
         
        // echo $idclie;    
        //}




         $contacto = DB::select('INSERT INTO `contacto` (`nombre_contacto`,`empresa_contacto`,`correo_contacto`, `numero_contacto`, `comentario_contacto`,
        `Estado_idEstado`, `fecha_creacion`)
        VALUES ("'.$request->nombre.'","'.$request->empresa.'","'.$request->email.'", "'.$request->numero.'", "'.$request->comentario.'",
        1, now() );');

        return response()->json(['status'=>1]);

        // return redirect('/contact');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
