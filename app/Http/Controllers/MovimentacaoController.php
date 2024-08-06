<?php

namespace App\Http\Controllers;

use App\Models\Movimentacao;
use App\Models\Item;
use Illuminate\Http\Request;

class MovimentacaoController extends Controller
{
    public function index()
    {
        $movimentacoes = Movimentacao::with('item')->get();
       // $movimentacoes = Movimentacao::all();
        return view('movimentacoes.index', compact('movimentacoes'));
    }

    public function create()
    {
        $itens = Item::all();
        return view('movimentacoes.create', compact('itens'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_id' => 'required|exists:itens,id',
            'data_movimentacao' => 'required|date'
        ]);
        

        Movimentacao::create($request->all());
        return redirect()->route('movimentacoes.index')->with('success', 'Movimentação registrada com sucesso!');
    }


    public function show($id)
{
    $movimentacao = Movimentacao::with('item')->findOrFail($id);
    return view('movimentacoes.show', compact('movimentacao'));
}

   /* public function show(Movimentacao $movimentacao)
    {
      //  $movimentacao = Movimentacao::findOrFail($movimentacao);  
        return view('movimentacoes.show', compact('movimentacao'));
    }*/

   /* public function edit(Movimentacao $movimentacao)
    {
        $itens = Item::all();
        return view('movimentacoes.edit', compact('movimentacao', 'itens'));
    }*/
    public function edit($id)
{
    $movimentacao = Movimentacao::findOrFail($id);
    $itens = Item::all();
    return view('movimentacoes.edit', compact('movimentacao', 'itens'));
}


   /* public function update(Request $request, Movimentacao $movimentacao)
    {
        $request->validate([
            'item_id' => 'required|exists:itens,id',
            'data_movimentacao' => 'required|date'
        ]);

        $movimentacao->update($request->all());
        return redirect()->route('movimentacoes.index')->with('success', 'Movimentação atualizada com sucesso!');
    }*/

    public function update(Request $request, $id)
{
    $request->validate([
        'item_id' => 'required|exists:itens,id',
        'data_movimentacao' => 'required|date'
    ]);

    $movimentacao = Movimentacao::findOrFail($id);
    $movimentacao->update($request->all());
    
    return redirect()->route('movimentacoes.index')->with('success', 'Movimentação atualizada com sucesso!');
}


    /*public function destroy(Movimentacao $movimentacao)
    {
        $movimentacao->delete();
        return redirect()->route('movimentacoes.index')->with('success', 'Movimentação excluída com sucesso!');
    }*/

    public function destroy($id)
{
    $movimentacao = Movimentacao::findOrFail($id);
    $movimentacao->delete();
    return redirect()->route('movimentacoes.index')->with('success', 'Movimentação excluída com sucesso!');
}

}
