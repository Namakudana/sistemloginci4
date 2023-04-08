<?php

namespace App\Controllers;

use CodeIgniter\Model;
use App\Models\Model_Auth;


class Auth extends BaseController
{


    public function __construct()
    {
        helper('form');
        $this->Model_Auth = new Model_Auth();
    }

    public function register()
    {
        $data = array(
            'title' => 'Register',
        );

        return view('v_register', $data);
    }

    public function save_register()
    {
        if($this->validate([
            'nama_user' => [
                'label' => 'Nama User',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak Boleh Kosong!!!'
                ]
                ],
            'email' => [
                'label' => 'E-Mail',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak Boleh Kosong!!!'
                ]
                ],
            'no_hp' => [
                'label' => 'No Handphone',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak Boleh Kosong!!!'
                ]
                ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak Boleh Kosong!!!'
                ]
                ],
            'repassword' => [
                'label' => 'Retype Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak Boleh Kosong!!!',
                    'matches' => '{field} Tidak sama!!!'
                ]
            ]
        ])) {
            //jika valid
            $data = array(
                'nama_user' => $this->request->getPost('nama_user'),
                'email' => $this->request->getPost('email'),
                'no_hp' => $this->request->getPost('no_hp'),
                'password' => $this->request->getPost('password'),
                'level'     => 3
            );
            //$UserModel->save_register($data);
            $this->Model_Auth->save_register($data);
            session()->setFlashdata('Pesan', 'Register Berhasil!!!');
            return redirect()->to(base_url('Auth/register'));
        }else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('Auth/register'));
        }

    }

    public function login()
    {
        $data = array(
            'title' => 'Login',
        );

        return view('v_login', $data);
    }

    public function cek_login()
    {
        if($this->validate([
            'email' => [
                'label' => 'E-Mail',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak Boleh Kosong!!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak Boleh Kosong!!!'
                ]
            ]
        ])) {
            //jika valid
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
           $cek = $this->Model_Auth->login($email,$password);
            if ($cek) {
                //jika datanya cocok
                session()->set('log',true);
                session()->set('nama_user', $cek['nama_user']);
                session()->set('email', $cek['email']);
                session()->set('level', $cek['level']);
                session()->set('foto_user', $cek['foto_user']);
                //login
                return redirect()->to(base_url('home'));
            } else {
                //jika datanya tidak cocok
                session()->setFlashdata('pesan','Login Gagal !!, Username atau Password Tidak Cocok !!');
                return redirect()->to(base_url('auth/login'));
            }
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login'));
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('nama_user');
        session()->remove('level');
        session()->remove('foto_user');
        session()->setFlashdata('pesan', 'Logout Sukses!!');
        return redirect()->to(base_url('auth/login'));
    }

}