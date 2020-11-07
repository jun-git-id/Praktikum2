<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Barang';
        $data['isi'] = 'Contoh Isi data';
        $data['page'] = 'v_home';

        $this->load->view('v_homepage', $data);
    }
}
