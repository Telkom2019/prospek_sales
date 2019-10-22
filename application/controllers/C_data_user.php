<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_data_user extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data_user');

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
        $data['data_user'] = $this->m_data_user->tampil_data()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('data_user/v_data_user', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_aksi()
    {
        $nama            =  $this->input->post('nama');
        $username        =  $this->input->post('username');
        $password        =  $this->input->post('password');
        $role_id         =  $this->input->post('role_id');

        $data = array(
            'nama'          => $nama,
            'username'      => $username,
            'password'      => $password,
            'role_id'       => $role_id
        );

        $this->m_data_user->input_data($data, 'login');
        // $this->session->set_flashdata('mesage','
        // <div class="alert alert-success alert-dismissible" role="alert">
        // <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        // Data Berhasil Ditambahkan
        // </div>');
        redirect('c_data_user/index');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->m_data_user->hapus_data($where, 'login');
        // $this->session->set_flashdata('mesage','
        // <div class="alert alert-danger alert-dismissible" role="alert">
        // <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        // Data Berhasil Dihapus
        // </div>');
        redirect('c_data_user/index');
    }

    public function edit($id)
    {
        $where = array('id' => $id);
        $data['data_user'] = $this->m_data_user->edit_data($where, 'login')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('data_user/v_edit_user', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id         = $this->input->post('id');
        $nama       = $this->input->post('nama');
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');
        $role_id    = $this->input->post('role_id');

        $data = array(
            'nama'          => $nama,
            'username'      => $username,
            'password'      => $password,
            'role_id'       => $role_id
        );
        $where = array('id' => $id);
        $this->m_data_user->update_data($where, $data, 'login');
        $this->session->set_flashdata('mesage', '
        <div class="alert alert-info alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        Data Berhasil Diupdate
        </div>');
        redirect('c_data_user/index');
    }

    public function detail($id)
    {
        $detail =  $this->m_data_user->detail_data($id);
        $data['detail'] = $detail;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('data_user/v_detail_user', $data);
        $this->load->view('templates/footer');
    }
}
