<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MData;

class Tampil extends BaseController
{
    public function __construct()
    {
        $this->pembayaran = new MData;
    }

    public function index()
    {
        $tampil = $this->pembayaran->getData();
        $array = array(
            'datatable' => $tampil,
        );
        //var_dump($tampil);
        return view('V_showData',$array);
    }

    public function insertData()
    {
        return view('v_inputfitrah');
    }

    public function saveData()
    {
        $tampil =[
            'Nik'          => $this->request->getVar('Nik'),
            'Pilihan'         => $this->request->getVar('Pilihan'),
            'Nominal'     => $this->request->getVar('Nominal'),
            'Nama'       => $this->request->getVar('Nama'),
        ];
        $insert = $this->pembayaran->saveData($tampil);
        return redirect()->to('tampil');
        //$namakita = $this->request->getVar('nama');
    }
    public function editData($id)
    {
        $selectdata = $this->pembayaran->getSelectData($id);
        $array = [
            'tampil' =>$selectdata,
        ];
        return view('v_editdata',$array);
    }
    public function saveEditData($id)
    {
        $data =[
            'Nik'          => $this->request->getVar('Nik'),
            'Pilihan'      => $this->request->getVar('Pilihan'),
            'Nominal'      => $this->request->getVar('Nominal'),
            'Nama'         => $this->request->getVar('Nama'),
        ];
        $update = $this->pembayaran->saveEditData($data,$id);
        return redirect()->to('tampil');
    }
    public function hapusData($id)
    {
        $selectdata = $this->pembayaran->hapusData($id);
        return redirect()->to('tampil');
    }
}
