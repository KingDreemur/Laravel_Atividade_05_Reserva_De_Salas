<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $salas = Reserva::all();
        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        return view('reservas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'capacidade' => 'required|integer',
        ]);

        Reserva::create($request->all());
        return redirect()->route('reservas.index');
    }
}
