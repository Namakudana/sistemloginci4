<?php

namespace App\Controllers;

class Pembayaran extends BaseController
{
    public function index()
    {
        $data = array(
            'tittle' => 'Data-Pembayaran',
            'isi'   => 'v_showdatafitrah'
        );
        return view('layout/v_wrapper', $data);
    }
}
