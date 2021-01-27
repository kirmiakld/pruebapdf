<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Calculadora;
use Barryvdh\DomPDF\Facade as PDF;

class CalculadoraController extends Controller
{

    public function index(){
        return view('calculadora.index');
    }

    public function calcular(Request $request)
    {
        $num_1 = $request->num_1;
        $num_2 = $request->num_2;
        $num_3 = $request->num_3;


        $fechaAntigua  = Carbon::parse(Calculadora::first()->fecha1);
        $fechaReciente = Carbon::parse(Calculadora::first()->fecha2);
        $cantidadDias = $fechaAntigua->diffInDays($fechaReciente);
        $calculadora->dias = $cantidadDias;
        $calculadora->save();

        $resultado = $this->calcular_peso($num_1, $num_2, $num_3);
        return view('calculadora.index')->with([
            'num_1' => $num_1,
            'num_2' => $num_2,
            'num_3' => $num_3,
            'resultado' => $resultado,
        ]);

    }

    public function calcular_peso($num_1, $num_2, $num_3) {
        $resultado = 0;
        $resultado =($num_1 * $num_2 * $num_3) / 5000;
        return $resultado;
    }

    public function exportPdf() {
        //Fecha Actual
        $dia = date('d');
        $mes = date('m');
        $ano = date('y');
        //Hora Actual
        $hora = date('h:i a');
        //Creo el PDF 
        $pdf = PDF::loadView('pdf.prueba', compact('dia','mes','ano','hora'));
        //Imprimo el PDF y cargo el nombre
        return $pdf->stream('prueba.pdf');
    }



}
