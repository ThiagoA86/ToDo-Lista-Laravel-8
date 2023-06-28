<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\ListaDeTarefas;

class TarefasController extends Controller
{
    public function index(){
        return Response()->json(ListaDeTarefas::orderBy('id','desc')->get(),200);
    }
    public function store(Request $request)
    {
        //Store recebe os dados de request e cria um novo Model para passar os dados
        $tarefa = new ListaDeTarefas();
        $tarefa->texto = $request->input('texto');
        $tarefa->autor = $request->input('autor');
        $tarefa->status = $request->input('status');

        if($tarefa->save()){
            return Response("1",201);
        }
        else
        {
            return Response("0",304);
        }
    }
    public function update($id,Request $request)
    {
        //Update recebe id na request e altera os Status.
        $tarefa =listaDeTarefas::find($id);

        $tarefa->status = $request->input('status');

        if($tarefa->save()){
            return Response()->json($tarefa,201);
        }
        else
        {
            return Response("0",304);
        }
    }
    public function destroy($id)
    {
        //Recebe o id e excluí do banco de dados.
        $tarefa =listaDeTarefas::find($id);


        if($tarefa->delete()){
            return Response("1",200);
        }
        else
        {
            return Response("0",304);
        }
    }
}
