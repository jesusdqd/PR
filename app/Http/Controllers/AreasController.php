<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreasController extends Controller
{
    public function index()
    {
        // Aquí puedes pasar datos a la vista si lo necesitas
        return view('html.areas.areas');
    }

    public function matematicas()
    {
        return view('html.areas.matematicas'); // Asegúrate de que esta vista exista
    }

    public function politica()
    {
        return view('html.areas.politica'); // Asegúrate de que esta vista exista
    }

    public function arte()
    {
        return view('html.areas.arte'); // Asegúrate de que esta vista exista
    }

    public function quimica()
    {
        return view('html.areas.quimica'); // Asegúrate de que esta vista exista
    }

    public function lectura()
    {
        return view('html.areas.lectura'); // Asegúrate de que esta vista exista
    }

    public function etica()
    {
        return view('html.areas.etica'); // Asegúrate de que esta vista exista
    }

    public function religion()
    {
        return view('html.areas.religion'); // Asegúrate de que esta vista exista
    }

    public function informatica()
    {
        return view('html.areas.informatica'); // Asegúrate de que esta vista exista
    }
}
