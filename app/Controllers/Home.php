<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelasInputModel;

class Home extends BaseController
{
    private $model;

    public function __construct(){
        $this->model = new KelasInputModel();
    }


    public function index()
    {
        return view('welcome_message');
    }


    public function page_login(){
        if($this->request->getPost('tombol_login') == 'ya'){
            $nrp = $this->request->getVar('inputNRP');
            $pass = $this->request->getVar('inputPassword');

            $checking = $this->model->check_login($nrp, $pass);

            if($checking){
                return redirect()
                    ->to(site_url('kelas'));
                    
            
            }else{
            return redirect()
                    ->to(site_url('/'));
            }
        }

    
        return view('login');
    }


    public function page_alert(){
        session()->setFlashdata('swal_icon', 'success');
        session()->setFlashdata('swal_title', 'BERHASIL LOGIN');
        session()->setFlashdata('swal_text', 'Anda berhasil login');
        session()->setFlashdata('swal_showConfirmButton', 'false');
        session()->setFlashdata('swal_timer', '1500');
        return view('alert');
    }

}
