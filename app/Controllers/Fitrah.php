<?php

namespace App\Controllers;

class Fitrah extends BaseController
{
    public function index()
    {
        $data = array(
            'tittle' => 'Data-Fitrah',
            'isi'   => 'V_showData'
        );
        return view('V_showData', $data);
    }
}
