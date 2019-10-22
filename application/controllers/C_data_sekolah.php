<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_data_sekolah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data_sekolah');

        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            <strong>Anda belum Login !!!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['data_sekolah'] = $this->m_data_sekolah->tampil_data()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('data_sekolah/v_data_sekolah', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {   
        $nama_sekolah   =  $this->input->post('nama_sekolah');
        $alamat         =  $this->input->post('alamat');
        $no_telepon     =  $this->input->post('no_telepon');
        $latitude       =  $this->input->post('latitude');
        $longitude      =  $this->input->post('longitude');
        $deskripsi      =  $this->input->post('deskripsi');
        
        $data = array(
            'nama_sekolah'      => $nama_sekolah,
            'alamat'            => $alamat,
            'no_telepon'        => $no_telepon,
            'latitude'          => $latitude,
            'longitude'         => $longitude,
            'deskripsi'         => $deskripsi

            
        );

        $this->m_data_sekolah->input_data($data, 'tbl_sekolah');
        // $this->session->set_flashdata('mesage','
        // <div class="alert alert-success alert-dismissible" role="alert">
        // <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        // Data Berhasil Ditambahkan
        // </div>');
        redirect('c_data_sekolah/index');
    }

    public function hapus($id_sekolah)
    {
        $where = array('id_sekolah' => $id_sekolah);
        $this->m_data_sekolah->hapus_data($where, 'tbl_sekolah');
        // $this->session->set_flashdata('mesage','
        // <div class="alert alert-danger alert-dismissible" role="alert">
        // <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        // Data Berhasil Dihapus
        // </div>');
        redirect('c_data_sekolah/index');
    }

    public function edit($id_sekolah)
    {
        $where = array('id_sekolah' => $id_sekolah);
        $data['data_sekolah'] = $this->m_data_sekolah->edit_data($where, 'tbl_sekolah')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('data_sekolah/v_edit_sekolah', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id_sekolah   =  $this->input->post('id_sekolah');
        $nama_sekolah   =  $this->input->post('nama_sekolah');
        $alamat         =  $this->input->post('alamat');
        $no_telepon     =  $this->input->post('no_telepon');
        $latitude       =  $this->input->post('latitude');
        $longitude      =  $this->input->post('longitude');
        $deskripsi      =  $this->input->post('deskripsi');

        $data = array(
            'nama_sekolah'      => $nama_sekolah,
            'alamat'            => $alamat,
            'no_telepon'        => $no_telepon,
            'latitude'          => $latitude,
            'longitude'         => $longitude,
            'deskripsi'         => $deskripsi
        );
        $where = array('id_sekolah' => $id_sekolah);
        $this->m_data_sekolah->update_data($where, $data, 'tbl_sekolah');
        $this->session->set_flashdata('mesage', '
        <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Diupdate
        </div>');
        redirect('c_data_sekolah/index');
    }

    public function detail($id_sekolah)
    {
        $detail =  $this->m_data_sekolah->detail_data($id_sekolah);
        $data['detail'] = $detail;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('data_sekolah/v_detail_sekolah', $data);
        $this->load->view('templates/footer');
    }
}
