<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $data = array(
            'tittle' => 'Profile',
            'isi'   => 'v_profile'
        );
        return view('layout/v_wrapper', $data);
    }
}
