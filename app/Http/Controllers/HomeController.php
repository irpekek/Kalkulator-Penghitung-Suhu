<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index()
    {
        return view('home');
    }


    public function hasil(Request $request)
    {
        $reamur = 0;
        $celcius = 0;
        $kelvin = 0;
        $fahrenheit = 0;

        $validasi_data = $request->validate([
            'suhu' => ['required']
        ]);
        
        // dump($request);die;
        switch ($request->satuan_suhu) {
            case 'celcius':
                $celcius = $request->suhu;
                $reamur = 4 / 5 * $celcius;
                $fahrenheit = 9 / 5 * $celcius + 32;
                $kelvin = $celcius + 273;
                break;
            case 'fahrenheit':
                $fahrenheit = $request->suhu;
                $celcius = ($fahrenheit - 32) * 5 / 9;
                $reamur = ($fahrenheit - 32) * 4 / 9;
                $kelvin = (($fahrenheit - 32) * 5 / 9) + 273;
                break;
            case 'reamur':
                $reamur = $request->suhu;
                $celcius = $reamur * 5 / 4;
                $fahrenheit = 9 / 4 * $reamur + 32;
                $kelvin = 5 / 4 * $reamur + 273;
                break;
            case 'kelvin':
                $kelvin = $request->suhu;
                $celcius = $kelvin - 273;
                $fahrenheit = 9 / 5 * ($kelvin - 273) + 32;
                $reamur = ($kelvin - 273) * 4 / 5; 
                break;
        }

        $gabungan_suhu = collect([
            (object) [
                'nama' => 'Celcius',
                'nilai' => $celcius
            ],
            (object) [
                'nama' => 'Reamur',
                'nilai' => $reamur
            ],
            (object) [
                'nama' => 'Fahrenheit',
                'nilai' => $fahrenheit
            ],
            (object) [
                'nama' => 'Kelvin',
                'nilai' => $kelvin
            ]
        ]);
        
        return view('home', compact('gabungan_suhu'));
    }
}
