<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = array(
            'tittle' => 'Halaman User',
            'isi'   => 'v_halaman'
        );
        return view('layout/v_wrapper', $data);
    }
}
