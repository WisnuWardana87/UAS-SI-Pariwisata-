<?php
class M_backend extends CI_Model
{
    public function data_wisata()
    {
        $this->db->join('tb_jenis', 'tb_jenis.id_jenis=daftar_wisata.id_jenis');
        $data = $this->db->get('daftar_wisata')->result_array();
        return $data;
    }
    public function data_jenis()
    {
        $data = $this->db->get('tb_jenis')->result_array();
        return $data;
    }
    function detail($id_wisata)
    {
        $this->db->join('tb_jenis', 'tb_jenis.id_jenis=daftar_wisata.id_jenis');
        $this->db->where('id_wisata', $id_wisata);
        $data = $this->db->get('daftar_wisata')->result_array();
        return $data;
    }

    public function delete_wisata($key)
    {
        $this->db->where('id_wisata', $key);
        $this->db->delete('daftar_wisata');
    }

    function save_registerwisata($post)
    {
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('foto');
        $data = array(

            'nama' => $post['nama'],
            'id_jenis' => $post['id_jenis'],
            'harga_tiket' => $post['harga_tiket'],
            'jam_buka' => $post['jam_buka'],
            'jam_tutup' => $post['jam_tutup'],
            'keterangan' => $post['keterangan'],
            'foto' => $_FILES['foto']['name']
        );
        $this->db->insert('daftar_wisata', $data);
    }


    function save_update_register_wisata($post)
    {
        $konfigurasi = array(
            'allowed_types' => 'jpg|jpeg|gif|png|bmp',
            'upload_path' => realpath('./media/images')
        );
        $this->load->library('upload', $konfigurasi);
        $this->upload->do_upload('foto');
        $data = array(

            'nama' => $post['nama'],
            'id_jenis' => $post['id_jenis'],
            'harga_tiket' => $post['harga_tiket'],
            'jam_buka' => $post['jam_buka'],
            'jam_tutup' => $post['jam_tutup'],
            'keterangan' => $post['keterangan'],
            'foto' => $_FILES['foto']['name']
        );
        $this->db->where('md5(id_wisata)', $post['id_wisata']);
        $this->db->update('daftar_wisata', $data);
    }
}
