<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Backend extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_backend');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
    }

    function daftar_wisata()
    {
        $data['title'] = "Data Wisata";
        $config['base_url'] = site_url('Backend/daftar_wisata');
        $data['wisata'] = $this->M_backend->data_wisata();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('wisata/daftar_wisata', $data);
        $this->load->view('templates/footer');
    }
    public function delete_wisata()
    {

        $key = $this->uri->segment(3);
        $this->db->where('id_wisata', $key);
        $query = $this->db->get('daftar_wisata');
        if ($query->num_rows() > 0) {
            $this->M_backend->delete_wisata($key);
        }
        redirect('Backend/daftar_wisata');
    }
    function detail($id_wisata)
    {
        $data['title'] = "Detail Data Wisata";
        $data['detail_wisata'] = $this->M_backend->detail($id_wisata);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('wisata/detail', $data);
        $this->load->view('templates/footer');
    }
    public function register_wisata()
    {
        $data['title'] = "Register Data Wisata";
        $data['jenis'] = $this->M_backend->data_jenis();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('wisata/register_wisata', $data);
        $this->load->view('templates/footer');
    }
    public function update_register_wisata($id_wisata)
    {
        $data['title'] = "Registrasi Data Wisata";
        $this->db->where('md5(id_wisata)', $id_wisata);
        $data['id_wisata'] = $this->db->get('daftar_wisata')->row_array();
        $data['jenis'] = $this->M_backend->data_jenis();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('wisata/register_wisata', $data);
        $this->load->view('templates/footer');
    }
    function save_register_wisata()
    {
        if ($_POST['id_wisata'] != '') {
            $this->M_backend->save_update_register_wisata($_POST);
        } else {
            $this->M_backend->save_registerwisata($_POST);
        }
        redirect('Backend/daftar_wisata');
    }
}
