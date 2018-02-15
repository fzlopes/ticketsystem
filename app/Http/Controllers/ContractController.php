<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContractCreateRequest;
use App\Http\Requests\ContractUpdateRequest;
use App\Contract;


class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->admin == 1)
        {
         
         $contracts = Contract::paginate(5);
        
        } else {

        $contracts = Contract::where('user_id', auth()->user()->id)->paginate(5);
        
        }

        return view('contracts.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contracts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContractCreateRequest $request)
    {
       
        $contract = new Contract();
        $contract->user_id = auth()->user()->id;
        $contract->number  = $request->number;
        $contract->hours   = $request->hours;

        $contract->save();

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
        $contract = Contract::findOrFail($id);
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
        
        $contract = Contract::findOrFail($id);
        $contract->user_id = auth()->user()->id;
        $contract->number  = $request->number;
        $contract->hours   = $request->hours;
        
        $contract->save();
        
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
        $contract = Contract::findOrFail($id);
        
        $contract->delete();
        
        return redirect()->route('contracts.index')
                        ->with('success','Contrato deletado com sucesso.');
    }
}
