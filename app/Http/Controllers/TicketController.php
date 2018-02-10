<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TicketCreateRequest;
use App\Http\Requests\TicketUpdateRequest;
use App\Ticket;
use Input;
use File;
use Redirect;

class TicketController extends Controller
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
         
         $tickets = Ticket::paginate(2);
        
        } else {

        $tickets = Ticket::where('user_id', auth()->user()->id)->paginate(2);

        }
        
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TicketCreateRequest $request)
    {
      if (!auth()->user()->contract)
      {
        return redirect()->back()->with('error', 'Erro: Para cadastrar o ticket tem que ter contrato com a empresa.');
      }

      if (Input::file('photo'))
      {
        $photo = Input::file('photo');
        $extension = $photo->getClientOriginalExtension();

        if ($extension != 'jpg' && $extension != 'png')
        {
            return redirect()->back()->with('error', 'Erro: Este arquivo não é imagem');
        }
      }
        $ticket = new Ticket();

        $ticket->user_id = auth()->user()->id;
        $ticket->status  = $request->status;
        $ticket->problem = $request->problem;
        $ticket->photo   =  "";

        $ticket->save();

        if (Input::file('photo'))
        {
            File::move($photo,public_path().'/photos/ticket-id_'.$ticket->id.'.'.$extension);
            $ticket->photo = '/photos/ticket-id_'.$ticket->id.'.'.$extension;
            
            $ticket->save();
        }

        return redirect()->route('tickets.index')
                         ->with('success','Ticket criado com sucesso.');
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
        $ticket = Ticket::findOrFail($id);
        return view('tickets.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TicketUpdateRequest $request, $id)
    {

        $ticket = Ticket::findOrFail($id);
            
        $ticket->user_id = auth()->user()->id;
        $ticket->status  = $request->status;
        $ticket->problem = $request->problem;
        
        $ticket->save();

        
        return redirect()->route('tickets.index')
                        ->with('success','Ticket editado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);

        File::delete(public_path().$ticket->photo);
        
        $ticket->delete();
        
        return redirect()->route('tickets.index')
                        ->with('success','Ticket deletado com sucesso.');
    }
}





