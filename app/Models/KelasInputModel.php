<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasInputModel extends Model{
    protected $table            = 'kelas';
    protected $primaryKey       = 'nrp';
    protected $returnType       = 'object';
    protected $allowedFields    = ['NRP', 'Nama', 'Nilai'];
  
    
    public function tampilkan_data(){
        //SELECT * FROM 'kelas'
        return $this
        ->db
        ->table($this->table)
        ->orderBy('NRP', 'ASC')
        ->get()
        ->getResult();
    }


    public function tambah_data($data){
        return $this->insert($data);
    }


    public function fetch_data($nrp){
        return $this
                ->where('NRP', $nrp)
                ->first();
    }


    public function edit_data($data){
        return $this
                ->set([
                    'Nama' => $data['nama'],
                    'Nilai' => $data['nilai']
                ])
                ->where('NRP', $data['nrp'])
                ->update();


                //UPDATE 'kelas' SET Nama = '".$data['nama']."' ,  Nilai = '".$data['nilai']."' 
                //WHERE NRP = '".$data['nrp']."'
                
    }



    public function hapus_data($nrp){
        return $this
                ->where('NRP', $nrp)
                ->delete();

                //DELETE FROM 'kelas' WHERE NRP = '$nrp'
    }


    public function check_login($nrp, $password){
        return $this
                ->where('NRP', $nrp)
                ->where('Nilai', $password)
                ->first();
    }


}

?>