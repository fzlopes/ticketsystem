<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;
use App\Http\Requests\ContractCreateRequest;
use App\Http\Requests\ContractUpdateRequest;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user()->id;
        $contracts = Contract::paginate(5);

        return view('contracts.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $contract = auth()->user()->contract();
        return view('contracts.create', compact('contract'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContractCreateRequest $request)
    {
        $user = auth()->user()->id;
        $contract = auth()->user()->contract->create([$request->all()]);
        dd($contract)
        //$response = $contract->create($request->hours);
        //$response = Contract::create($request->all());
        return redirect()->route('contracts.index')
                         ->with('success','Contrato criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contract = Contract::find($id);
        return view('contracts.edit',compact('contract'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContractUpdateRequest $request, $id)
    {
        Contract::find($id)->update($request->all());
        return redirect()->route('contracts.index')
                        ->with('success','Contrato editado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contract::find($id)->delete();
        return redirect()->route('contracts.index')
                        ->with('success','Contrato deletado com sucesso.');
    }
}
