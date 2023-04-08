<?php

namespace App\Models;

use CodeIgniter\Model;

class MData extends Model
{
    public function getData()
    {
        $query = $this->db->query("select * from pembayaran");
        return $query->getResult();
    }
    public function saveData($data)
    {
        $query = $this->db->table('pembayaran')->insert($data);
        return $query;
    }
    public function getSelectData($id)
    {
        $query = $this->db->query("select * from pembayaran where Nik = $id");
        return $query->getResult();
    }
    public function saveEditData($data,$id)
    {
        $query = $this->db->table('pembayaran')
        ->where('Nik',$id)
        ->update($data);
        return $query;
    }
    public function hapusData($id)
    {
        $query = $this->db->table('pembayaran')
        ->where('Nik',$id)
        ->delete();
        return $query;
    }
}