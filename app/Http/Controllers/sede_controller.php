<?php

namespace App\Http\Controllers;

use App\Membro;
use Illuminate\Http\Request;
use App\Sede;

class sede_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {


        $busca = $request->get('busca');
        $sede_total = Sede::all();
        $sede_filtro = Sede::where('id', $busca)->paginate(10);

        return view('sede', compact('sede_filtro', 'busca', 'sede_total'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sedes = Sede::all();

        return view('sede_add', compact('sedes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Sede $sede)
    {
        $data = $request->all();
        $data['sede'] = ucfirst($data['sede']);
        $data['diretor'] = ucfirst($data['diretor']);

        $resultado = $sede->create($data);

        if ($resultado) {
            return redirect()
                ->route('sede.index')
                ->with('success', 'Registro gravado com sucesso!');
        } else {
            return redirect()
                ->back()
                ->with('error', 'Falha ao gravar o registro! Verifique os dados.');
        }
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
        $sede_filtro = Sede::find($id);
        $sedes = Sede::all();


        return view('sede_edit', compact('sede_filtro', 'sedes'));
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
        $sede = Sede::findOrFail($id);


        $data = $request->all();
        $data['sede'] = ucfirst($data['sede']);
        $data['diretor'] = ucfirst($data['diretor']);

        $resultado = $sede->update($data);

        if ($resultado) {
            return redirect()
                ->route('sede.index')
                ->with('success', 'Registro alterado com sucesso!');
        } else {
            return 'Erro';
            redirect()
                ->back()
                ->with('error', 'Falha ao alterar o registro! Verifique os dados.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Sede::destroy($id);

        if ($result) {
            return redirect()
                ->route('sede.index')
                ->with('success', 'Registro excluído com sucesso!');
        } else {
            return redirect()
                ->back()
                ->with('error', 'Falha ao excluir esse registro! Você tem permissão?');
        }
    }
}
