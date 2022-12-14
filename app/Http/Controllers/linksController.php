<?php

namespace App\Http\Controllers;

use App\Models\links;
use Illuminate\Http\Request;

class linksController extends Controller
{
    public function index( ){
        $redirect = links::all();
        return response( )->json($redirect);
    }

    public function show($id){
        $redirect = links::find($id);
        return response( )->json($redirect);
    }

    

    public function create(Request $request){
        $redirect = new links();
        $redirect->id_redirect = $request->id_redirect;
        $redirect->limit = $request->limit;
        $redirect->click = $request->click;
        $redirect->link = $request->link;

        $redirect->save();
        return response( )->json("salvo com sucesso");
    }

    public function update(Request $request, $id){

        $redirect = links::find($id);

        $redirect->id_redirect = $request->id_redirect;
        $redirect->limit = $request->limit;
        $redirect->click = $request->click;
        $redirect->link = $request->link;

        $redirect->save();
        return response( )->json($redirect);
    }

    public function delete($id){
        $redirect = links::find($id);
        $redirect->delete();
        return response( )->json("deletado com sucesso");
    }
}
