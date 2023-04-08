<?php

namespace App\Models;

use CodeIgniter\Model;

class MTampil extends Model
{
    public function getData()
    {
        $query = $this->db->query("select * from mahasiswa");
        return $query->getResult();
    }
    public function saveData($tampil)
    {
        $query = $this->db->table('mahasiswa')->insert($tampil);
        return $query;
    }
    public function getSelectData($id)
    {
        $query = $this->db->query("select * from mahasiswa where nim = $id");
        return $query->getResult();
    }
    public function saveEditData($data,$id)
    {
        $query = $this->db->table('mahasiswa')
        ->where('nim',$id)
        ->update($tampil);
        return $query;
    }
    public function hapusData($id)
    {
        $query = $this->db->table('mahasiswa')
        ->where('nim',$id)
        ->delete();
        return $query;
    }
}