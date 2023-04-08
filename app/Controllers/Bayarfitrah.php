<?php

namespace App\Controllers;

class Bayarfitrah extends BaseController
{
    public function index()
    {
        $data = array(
            'tittle' => 'Bayar-Fitrah',
            'isi'   => 'V_insertData'
        );
        return view('V_insertData', $data);
    }
}
