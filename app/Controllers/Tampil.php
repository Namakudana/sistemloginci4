<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MTampil;

class Tampil extends BaseController
{
    public function __construct()
    {
        $this->mahasiswa = new MTampil;
    }

    public function index()
    {
        $tampil = $this->mahasiswa->getData();
        $array = array(
            'hasil' => $tampil,
        );
        //var_dump($data);
        return view('V_showData',$array);
    }

    public function insertData()
    {
        return view('V_insertData');
    }

    public function saveData()
    {
        $tampil =[
            'nim'          => $this->request->getVar('nim'),
            'nama'         => $this->request->getVar('nama'),
            'fakultas'     => $this->request->getVar('fakultas'),
            'alamat'       => $this->request->getVar('alamat'),
        ];
        $insert = $this->mahasiswa->saveData($tampil);
        return redirect()->to('tampil');
        //$namakita = $this->request->getVar('nama');
    }
    public function editData($id)
    {
        $selectdata = $this->mahasiswa->getSelectData($id);
        $array = [
            'tampil' =>$selectdata,
        ];
        return view('V_editData',$array);
    }
    public function saveEditData($id)
    {
        $tampil =[
            'nim'          => $this->request->getVar('nim'),
            'nama'         => $this->request->getVar('nama'),
            'fakultas'     => $this->request->getVar('fakultas'),
            'alamat'       => $this->request->getVar('alamat'),
        ];
        $update = $this->mahasiswa->saveEditData($tampil,$id);
        return redirect()->to('tampil');
    }
    public function hapusData($id)
    {
        $selectdata = $this->mahasiswa->hapusData($id);
        return redirect()->to('tampil');
    }
}
