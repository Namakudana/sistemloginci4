<?php

namespace App\Controllers;

class Bayarfitrah extends BaseController
{
    public function index()
    {
        $data = array(
            'tittle' => 'Bayar-Fitrah',
            //'isi'   => 'V_insertData'
            'isi'   => 'v_inputfitrah'
        );
        return view('layout/v_wrapper', $data);
    }
}
