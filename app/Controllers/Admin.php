<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = array(
            'tittle' => 'Home',
            'isi'   => 'v_home'
        );
        return view('layout/v_wrapper', $data);
    }
}
