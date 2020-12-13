<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_frontend');
    }

    public function index()
    {
        $config['base_url'] = site_url('Frontend/index');
        $data['wisata'] = $this->M_frontend->data_wisata();
        $this->load->view('templates/header_user', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer_user', $data);
    }
    function detail($id_wisata)
    {
        $data['title'] = "Detail Travel";
        $data['detail_wisata'] = $this->M_frontend->detail($id_wisata);
        $this->load->view('templates/header_user', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/footer_user');
    }
    function keranjang()
    {
        $id_wisata = $this->uri->segment(3);

        if ($id_wisata != "") {

            $query  = $this->M_frontend->GetWisataId($id_wisata);

            foreach ($query->result_array() as $value) {

                $id_wisata = $value['id_wisata'];
                $id_jenis = $value['id_jenis'];
                $harga_tiket = $value['harga_tiket'];
                $nama = $value['nama'];
                $stok     = 1;
            }

            $masuk = array(
                'id'      => $id_wisata,
                'qty'     => $stok,
                'price'   => $harga_tiket,
                'name'    => $nama
            );
            $this->cart->insert($masuk);
        }
        $this->load->view('templates/header_user');
        $this->load->view('user/keranjang');
        $this->load->view('templates/footer_user');
    }
    function keranjang_hapus($kode)
    {

        $data = array(
            'rowid' => $kode,
            'qty'   => 0
        );
        $this->cart->update($data);
        redirect('Frontend/keranjang');
    }
    function keranjang_update()
    {
        $total = $this->cart->total_items();
        $item = $this->input->post('rowid');
        $qty = $this->input->post('qty');
        for ($i = 0; $i < $total; $i++) {
            $data = array(
                'rowid' => $item[$i],
                'qty'   => $qty[$i]
            );
            $this->cart->update($data);
        }
        redirect('Frontend/keranjang');
    }
    function checkout()
    {
        $this->load->view('templates/header_user');
        $this->load->view('user/checkout');
        $this->load->view('templates/footer_user');
    }

    function checkout_invoice()
    {

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('nama_wisatawan', 'Nama', 'required');
        $this->form_validation->set_rules('no_telepon', 'No Telp', 'required');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('Frontend/checkout');
        } else {

            $tgl_skr = date('Ymd');
            $cek_kode = $this->M_frontend->cek_kode($tgl_skr);
            $kode_trans = "";
            foreach ($cek_kode->result() as $ck) {
                if ($ck->kd == NULL) {
                    $kode_trans = $tgl_skr . '001';
                } else {
                    $kd_lama = $ck->kd;
                    $kode_trans = $kd_lama + 1;
                }
            }
            $email                 = $this->input->post("email");
            $nama_wisatawan        = $this->input->post("nama_wisatawan");
            $no_telepon            = $this->input->post("no_telepon");
            $tgl_kunjung           = $this->input->post("tgl_kunjung");

            $isi_psn = '<table style="border:1px solid #000;" border="1" cellpadding=0>';
            $isi_psn = '<tr><td>Nama</td><td>Harga Tiket</td><td>Jumlah</td><td>Subtotal</td></tr>';
            foreach ($this->cart->contents() as $items) {
                $isi_psn = '<tr><td>' . $items["id"] . '</td><td>' . $items["name"] . '</td><td>Rp.' . $this->cart->format_number($items["price"]) . '</td><td>' . $items["qty"] . '</td><td>Rp.' . $this->cart->format_number($items["subtotal"]) . '</td></tr>
';
            }
            $isi_psn = '<tr><td>Total Belanja (belum biaya kirim): </td><td colspan=4>Rp.' . $this->cart->format_number($this->cart->total()) . '</td></tr>
';
            $isi_psn = '</table><br>';
            $isi_psn = 'Harga di atas belum termasuk biaya kirim. Kami akan mengirimkan total yang harus anda bayar ke email anda dalam jangka waktu 1x24 jam.<br>';
            $isi_psn = 'Salam,Sangsit Dekorasi';


            $this->load->library('email');
            $this->email->set_mailtype('html');
            $this->email->from("sudarmapujayasa97@gmail.com", "Admin Temukus Village Tours");
            $this->email->to($email);
            $this->email->subject('Details of your visit to Temukus Village');
            $this->email->message($isi_psn);
            $this->email->send();

            $this->M_frontend->InsertTransaksiHeader($_POST);
            foreach ($this->cart->contents() as $items) {
                $this->M_frontend->simpan_pesanan("insert into tb_transaksi_detail (kode_transaksi,id_wisata,nama,harga,jumlah) values('" . $kode_trans . "','" . $items['id'] . "','" . $items['name'] . "','" . $items['price'] . "','" . $items['qty'] . "')");
                // $this->home_model->update_dibeli($items['id'],$items['qty']);
            }
            $this->cart->destroy();
?>
            <script type="text/javascript">
                alert("Thank you for ordering the entrance ticket to visit Temukus Village");
            </script>
<?php
            echo "<meta http-equiv='refresh' content='0; url=" . base_url() . "index.php/Frontend/index'>";
        }
    }







    function get_wisata()
    {
        $data['jenis_wisata'] = $this->M_frontend->get_wisata();
        $this->load->view('templates/header_user', $data);
        $this->load->view('user/wisata', $data);
        $this->load->view('templates/footer_user', $data);
    }
}
