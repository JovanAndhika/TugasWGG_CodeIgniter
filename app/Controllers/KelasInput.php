<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasInputModel;

class KelasInput extends BaseController
{
    private $model;

    public function __construct(){
        $this->model = new KelasInputModel();
    }



    public function index(){

        $data['title'] = 'kelola kelas';
        $data['data_kelas'] = $this
        ->model
        ->tampilkan_data();

        session()->setFlashdata('swal_icon', 'success');
        session()->setFlashdata('swal_title', 'BERHASIL LOGIN');
        session()->setFlashdata('swal_text', 'Anda berhasil login');
        session()->setFlashdata('swal_showConfirmButton', false);
        session()->setFlashdata('swal_timer', 1500);

        return view('kelas/index', $data);
    }



    public function tambah(){

        $data['title'] = 'Tambah Kelas';

        if (isset($_POST['submit'])){

            $validasi =  [

                'nrp' => [
                    'rules'  => 'min_length[9]|max_length[9]|is_unique[kelas.nrp]',
                    'errors' => [
                        'min_length' => 'NRP harus 9 karakter!',
                        'max_length' => 'NRP harus 9 karakter!',
                        'is_unique' => 'NRP yang ditambahkan, telah digunakan!'
                    ]
                ],
                'nama' => [
                    'rules'  =>'min_length[3]|max_length[30]',
                    'errors' => [
                        'min_length' => 'minimal 3 karakter!',
                        'max_length' => 'maksimal 30 karakter!'
                    ]
                ],
                'nilai' => [
                    'rules'  =>'required|integer',
                    'errors' => [
                        'required' => 'nilai harus diisi!',
                        'integer' => 'Nilai harus angka'
                    ]
                ]

            ];

            //TULISAN error
            $error = false;
            $error_val = [];
            if (!$this->validate($validasi)){
                $error = true;
                $error_val = $this->validator->getErrors();
            }
            
            if($error){
                return redirect()
                ->to(site_url('kelas/tambah'))
                ->with('error_val', $error_val)
                ->withInput();
            }


            //TAMBAH DATA ke database 'Kelas'
            $this->model->tambah_data([
                'NRP' => $this->request->getVar('nrp'),
                'Nama' => $this->request->getVar('nama'),
                'Nilai' => $this->request->getVar('nilai')
            ]);

            if($this->model->db->affectedRows() > 0){
                return redirect()
                    ->to(site_url('kelas/tambah'))
                    ->with('msg_success', 'Data berhasil ditambahkan');
            
            }else{
                return redirect()
                    ->to(site_url('kelas/tambah'))
                    ->with('msg_error', 'Data gagal ditambahkan');
            }
            
        }

        return view('kelas/tambah', $data);
    }


    
    public function sunting($nrp){

        $data['title'] = 'Edit Kelas';
        $data['fetch_data'] = $this->model->fetch_data($nrp);

        //UPDATE DATA
        if($this->request->getPost('submit') == 'ya'){

            $validasi =  [

                'nama' => [
                    'rules'  =>'min_length[3]|max_length[30]',
                    'errors' => [
                        'min_length' => 'minimal 3 karakter!',
                        'max_length' => 'maksimal 30 karakter!'
                    ]
                ],
                'nilai' => [
                    'rules'  =>'required|integer',
                    'errors' => [
                        'required' => 'nilai harus diisi!',
                        'integer' => 'Nilai harus angka'
                    ]
                ]

            ];

            //Tulisan error
            $error = false;
            $error_val = [];
            if (!$this->validate($validasi)){
                $error = true;
                $error_val = $this->validator->getErrors();
            }
            
            if($error){
                return redirect()
                ->to(site_url('kelas/tambah'))
                ->with('error_val', $error_val)
                ->withInput();
            }



            //Update ke database
            $update_data = $this->model->edit_data([
                'nrp' => $nrp,
                'nama' => $this->request->getVar('nama'),
                'nilai' => $this->request->getVar('nilai')
            ]);

                if($update_data){
                    return redirect()
                        ->to(site_url('kelas/sunting/'.$nrp))
                        ->with('msg_success', 'Berhasil menyimpan data NRP');
                }

                return redirect()
                        ->to(site_url('kelas/sunting/'.$nrp))
                        ->with('msg_error', 'Data gagal disimpan');

        }

        return view('kelas/sunting', $data);
    }


    
    public function hapus(){
        
        if($this->request->getPost('hapus_data') == 'ya'){
            $nrp = $this->request->getVar('nrp_delete');
            $hapus_data = $this->model->hapus_data($nrp);


            if($hapus_data)
                return redirect()
                        ->to(site_url('kelas'))
                        ->with('msg_success', 'Data berhasil dihapus');

            return redirect()
                    ->to(site_url('kelas'))
                    ->with('msg_error', 'Data gagal dihapus');
        }
        
    }

    
}
