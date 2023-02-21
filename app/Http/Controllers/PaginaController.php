<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function canciones($id_cancion = null)
    {
        $listaCanciones = [];
        $listaCanciones[] = ['nombre' => 'D E A T H W I S H', 'artista' => 'Within Destruction'];
        $listaCanciones[] = ['nombre' => 'The Grey', 'artista' => 'Bad Omens'];
        $listaCanciones[] = ['nombre' => 'Without me', 'artista' => 'Dayseeker'];
    
        //dd($listaCanciones);
        if (!is_null($id_cancion))
        {
            $cancionSel = $listaCanciones[$id_cancion];
        }
        else
        {
            $cancionSel = null;
        }
    
        return view('canciones', compact('listaCanciones', 'cancionSel'));
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function GetSetFormData(Request $request)
    {
        // Recibe y valida
        $request->validate([
            'nombre' => 'required|min:3|max:255',
            'codigo' => ['required','integer', 'max:9']
        ]);


        // guarda
        // redirecciona
        //dd($request->all(), $request->nombre, $request->input('codigo'));
        
    }

}
