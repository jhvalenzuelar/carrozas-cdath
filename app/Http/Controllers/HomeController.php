<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voto;

class HomeController extends Controller
{
    public function __invoke(){
        return view('home');
    }

    public function store(Request $request){
        
        $request->validate([
            'modalInputIdent' => 'required',
            'modalInputEmail' => 'required'
        ]);

        $voto = new Voto();

        $voto->userid = $request->modalInputIdent;
        $voto->email = $request->modalInputEmail;
        $voto->carroza = $request->modalInputCarroza;

        $voto->save();

        return back()->with('mensaje', 'Gracias, Voto resgistrado corectamente');    
       
    }
}
