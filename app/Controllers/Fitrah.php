<?php

namespace App\Controllers;

class Fitrah extends BaseController
{

    public function index()
    {
        
        $data = array(
            'tittle' => 'Data-Fitrah',
            'isi'   => 'v_showdatafitrah',
        );
        return view('layout/v_wrapper', $data);
    }


}
