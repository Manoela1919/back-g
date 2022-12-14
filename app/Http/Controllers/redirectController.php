<?php

namespace App\Http\Controllers;

use App\Models\redirect;
use Illuminate\Http\Request;

class redirectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redirects = redirect::all();
        return response()->json([
            'redirects' => $redirects
        ]);

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $redirect = redirect::create($request->all());

        return response()->json([
            'message' => 'Link Criado Com Sucesso',
            'redirect' => $redirect
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Redirect  $redirect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, redirect $redirect)
    {
        return response()->json([
            'message' => 'Link Atualizado Com Sucesso!',

            'redirect' => $redirect
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\redirect  $redirect
     * @return \Illuminate\Http\Response
     */
    public function destroy(redirect $redirect)
    {
        $redirect->delete();

        return response()->json([
            'message' => 'Link Deletado Com Sucesso!',

        ], 200);
    }
}