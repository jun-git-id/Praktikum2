<?php
class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_barang');

        if ($this->session->userdata('email') == '') {
            redirect('login');
        }
    }

    public function index()
    {
        $data['page'] = 'admin/v_dashboard';
        $this->load->view('v_homepage', $data);
    }

    public function barang()
    {
        $data['isi_barang'] = $this->m_barang->getAll()->result();
        $data['page'] = 'admin/v_barang';
        $this->load->view('v_homepage', $data);
    }

    function delete($id)
    {
        $this->m_barang->deleteData($id);
        return $this->barang();
    }

    function tambah()
    {
        $data['page'] = 'admin/v_tambah_barang';
        $this->load->view('v_homepage', $data);
    }

    function proses_tambah()
    {
        $data = array(
            'nama_barang' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
            'kategori' => $this->input->post('kategori'),
            'harga' => $this->input->post('harga'),
            'foto' => $this->input->post('foto')
        );

        $this->m_barang->add($data);

        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan.');

        return redirect('admin/dashboard/barang');
    }

    public function edit($id)
    {
        $data['barang'] = $this->m_barang->getSelected($id)->row_object();

        $data['page'] = 'admin/v_edit_barang';
        $this->load->view('v_homepage', $data);
    }

    function proses_edit()
    {
        //        var_dump($_POST);
        $data = array(
            'nama_barang' => $this->input->post('nama'),
            'deskripsi' => $this->input->post('deskripsi'),
            'kategori' => $this->input->post('kategori'),
            'harga' => $this->input->post('harga'),
            'foto' => $this->input->post('foto')
        );
        $id = $this->input->post('id');

        $this->m_barang->edit($data, $id);

        $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan.');
        return redirect('admin/dashboard/barang');
    }

    public function data()
    {

        $isi['var_nama'] = 'Nama mahasiswa';
        $isi['var_nim'] = 'Nim Mahasiswa';

        $this->load->view('v_data', $isi);
    }
}
