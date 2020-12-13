<?php
class M_frontend extends CI_Model
{
    public function data_wisata()
    {
        $this->db->join('tb_jenis', 'tb_jenis.id_jenis=daftar_wisata.id_jenis');
        $data = $this->db->get('daftar_wisata')->result_array();
        return $data;
    }
    function GetWisataId($id_wisata)
    {
        $this->db->select('*');
        $this->db->from('daftar_wisata');
        $this->db->where('id_wisata', $id_wisata);
        return $this->db->get();
    }
    function cek_kode($tgl)
    {
        $query = $this->db->query("select MAX(kode_transaksi) as kd from tb_data_kunjungan where kode_transaksi like '%$tgl%'");
        return $query;
    }

    function InsertTransaksiHeader($post)
    {
        $data = array(
            'email' => $post['email'],
            'nama_wisatawan' => $post['nama_wisatawan'],
            'no_telepon' => $post['no_telepon'],
            'tgl_kunjung' => $post['tgl_kunjung']
        );
        $this->db->insert('tb_data_kunjungan', $data);
    }

    function simpan_pesanan($datainput)
    {
        $q = $this->db->query($datainput);
    }

    function detail($id_wisata)
    {
        $this->db->join('tb_jenis', 'tb_jenis.id_jenis=daftar_wisata.id_jenis');
        $this->db->where('id_wisata', $id_wisata);
        $data = $this->db->get('daftar_wisata')->result_array();
        return $data;
    }

    function get_wisata()
    {
        $this->db->join('tb_jenis', 'tb_jenis.id_jenis=daftar_wisata.id_jenis');
        $this->db->where('nama_jenis', 'Tempat Wisata');
        $data = $this->db->get('daftar_wisata')->result_array();
        return $data;
    }
}
