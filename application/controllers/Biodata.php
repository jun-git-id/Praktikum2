<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biodata extends CI_Controller
{

    public function index()
    {
        echo "hai rom";
    }

    public function alamat($alamat = '', $lahir = '')
    {
        echo "alamat saya di " . $alamat . " lahir di " . $lahir;
    }

    public function saya()
    {
        $data['nama'] = 'Romi Choirudin';
        $data['alamat'] = 'Mataram';
        $data['prodi'] = 'S1 TI';
        $data['matakuliah'] = 'Web II';
        $this->load->view('v_biodata', $data);
    }
}
