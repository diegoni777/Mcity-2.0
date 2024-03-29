<?php

namespace App\Exports;

use App\Models\Compras;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Contracts\View\View;

class VentasExport implements FromView, WithTitle, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('exports.lista-ventas', [
            'vent' =>  Compras::all()
        ]);
    }

    public function title(): string
    {
        return 'Ventas';
    }



}
