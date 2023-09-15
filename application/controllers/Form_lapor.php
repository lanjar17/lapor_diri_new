<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_Lapor extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_lapor');
		$this->load->model('m_user');
		$this->load->model('m_jenis_kelamin');
	}

	public function view_mahasiswa()
	{
		if ($this->session->userdata('logged_in') == true and $this->session->userdata('id_user_level') == 1) {

			$data['mahasiswa_data'] = $this->m_user->get_mahasiswa_by_id($this->session->userdata('id_user'))->result_array();
			$data['mahasiswa'] = $this->m_user->get_mahasiswa_by_id($this->session->userdata('id_user'))->row_array();
			$data['jenis_kelamin'] = $this->m_jenis_kelamin->get_all_jenis_kelamin()->result_array();

			$data['provinsi'] = $this->m_lapor->get_provinsi();
		
			$this->load->view('mahasiswa/form_pengajuan_lapor', $data);
		} else {

			$this->session->set_flashdata('loggin_err', 'loggin_err');
			redirect('Login/index');
		}
	}

	public function proses_lapor()
{
    if ($this->session->userdata('logged_in') == true and $this->session->userdata('id_user_level') == 1) {
        $id_user = $this->input->post("id_user");
        $nama = $this->input->post("nama");
        $nik = $this->input->post("nik");
        $tempat_lahir = $this->input->post("tempat_lahir");
        $tgl_lahir = $this->input->post("tgl_lahir");
        $jenis_kelamin = $this->input->post("jenis_kelamin");
        $no_wa = $this->input->post("no_wa");
        $email_simpkb = $this->input->post("email_simpkb");
        $ptk_id = $this->input->post("ptk_id");
        $nama_darurat = $this->input->post("nama_darurat");
        $no_darurat = $this->input->post("no_darurat");
        $no_peserta = $this->input->post("no_peserta");
        $nim = $this->input->post("nim");
        $lptk = $this->input->post("lptk");
        $bidang_studi = $this->input->post("bidang_studi");
        $nama_kelas = $this->input->post("nama_kelas");
        $alamat = $this->input->post("alamat");
        $provinsi = $this->input->post("provinsi");
        $kabupaten = $this->input->post("kabupaten");
        $kode_pos = $this->input->post("kode_pos");
        $nama_rekening = $this->input->post("nama_rekening");
        $npwp = $this->input->post("npwp");
        $nama_bank = $this->input->post("nama_bank");
        $bank_cabang = $this->input->post("bank_cabang");
        $no_rekening = $this->input->post("no_rekening");
        $alasan_verifikasi = $this->input->post("alasan_verifikasi");

        // Upload Format A1
        $dokumen_format_a1 = time() . "-" . $_FILES['format_a1']['name'];
        $config_format_a1 = array(
            'upload_path' => "./assets/berkas/format_a1/",
            'allowed_types' => "jpg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'file_name' => $dokumen_format_a1
        );
        $this->load->library('upload', $config_format_a1);
        $this->upload->initialize($config_format_a1);
        $this->upload->do_upload('format_a1');

        // Upload Pakta
        $dokumen_pakta = time() . "-" . $_FILES['pakta']['name'];
        $config_pakta = array(
            'upload_path' => "./assets/berkas/pakta/",
            'allowed_types' => "jpg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'file_name' => $dokumen_pakta
        );
        $this->load->library('upload', $config_pakta);
        $this->upload->initialize($config_pakta);
        $this->upload->do_upload('pakta');

        // Upload Biodata
        $dokumen_biodata = time() . "-" . $_FILES['biodata']['name'];
        $config_biodata = array(
            'upload_path' => "./assets/berkas/biodata/",
            'allowed_types' => "jpg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'file_name' => $dokumen_biodata
        );
        $this->load->library('upload', $config_biodata);
        $this->upload->initialize($config_biodata);
        $this->upload->do_upload('biodata');

        // Upload surat_pimpinan
        $dokumen_surat_pimpinan = time() . "-" . $_FILES['surat_pimpinan']['name'];
        $config_surat_pimpinan = array(
            'upload_path' => "./assets/berkas/surat_pimpinan/",
            'allowed_types' => "jpg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'file_name' => $dokumen_surat_pimpinan
        );
        $this->load->library('upload', $config_surat_pimpinan);
        $this->upload->initialize($config_surat_pimpinan);
        $this->upload->do_upload('surat_pimpinan');

        // Upload ijazah_s1
        $dokumen_ijazah_s1 = time() . "-" . $_FILES['ijazah_s1']['name'];
        $config_ijazah_s1 = array(
            'upload_path' => "./assets/berkas/ijazah_s1/",
            'allowed_types' => "jpg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'file_name' => $dokumen_ijazah_s1
        );
        $this->load->library('upload', $config_ijazah_s1);
        $this->upload->initialize($config_ijazah_s1);
        $this->upload->do_upload('ijazah_s1');

        // Upload transkrip_s1
        $dokumen_transkrip_s1 = time() . "-" . $_FILES['transkrip_s1']['name'];
        $config_transkrip_s1 = array(
            'upload_path' => "./assets/berkas/transkrip_s1/",
            'allowed_types' => "jpg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'file_name' => $dokumen_transkrip_s1
        );
        $this->load->library('upload', $config_transkrip_s1);
        $this->upload->initialize($config_transkrip_s1);
        $this->upload->do_upload('transkrip_s1');

        // Upload ktp
        $dokumen_ktp = time() . "-" . $_FILES['ktp']['name'];
        $config_ktp = array(
            'upload_path' => "./assets/berkas/ktp/",
            'allowed_types' => "jpg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'file_name' => $dokumen_ktp
        );
        $this->load->library('upload', $config_ktp);
        $this->upload->initialize($config_ktp);
        $this->upload->do_upload('ktp');

        // Upload skck
        $dokumen_skck = time() . "-" . $_FILES['skck']['name'];
        $config_skck = array(
            'upload_path' => "./assets/berkas/skck/",
            'allowed_types' => "jpg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'file_name' => $dokumen_skck
        );
        $this->load->library('upload', $config_skck);
        $this->upload->initialize($config_skck);
        $this->upload->do_upload('skck');

        // Upload surat_sehat
        $dokumen_surat_sehat = time() . "-" . $_FILES['surat_sehat']['name'];
        $config_surat_sehat = array(
            'upload_path' => "./assets/berkas/surat_sehat/",
            'allowed_types' => "jpg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'file_name' => $dokumen_surat_sehat
        );
        $this->load->library('upload', $config_surat_sehat);
        $this->upload->initialize($config_surat_sehat);
        $this->upload->do_upload('surat_sehat');

        // Upload surat_napza
        $dokumen_surat_napza = time() . "-" . $_FILES['surat_napza']['name'];
        $config_surat_napza = array(
            'upload_path' => "./assets/berkas/surat_napza/",
            'allowed_types' => "jpg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'file_name' => $dokumen_surat_napza
        );
        $this->load->library('upload', $config_surat_napza);
        $this->upload->initialize($config_surat_napza);
        $this->upload->do_upload('surat_napza');

        // Upload npwp
        $dokumen_npwp = time() . "-" . $_FILES['scan_npwp']['name'];
        $config_npwp = array(
            'upload_path' => "./assets/berkas/npwp/",
            'allowed_types' => "jpg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'file_name' => $dokumen_npwp
        );
        $this->load->library('upload', $config_npwp);
        $this->upload->initialize($config_npwp);
        $this->upload->do_upload('scan_npwp');

        // Upload Foto
        $foto = time() . "-" . $_FILES['foto']['name'];
        $config_foto = array(
            'upload_path' => "./assets/berkas/foto/",
            'allowed_types' => "jpg|jpeg|png",
            'overwrite' => TRUE,
            'max_size' => "2048000",
            'file_name' => $foto
        );
        $this->load->library('upload', $config_foto);
        $this->upload->initialize($config_foto);
        $this->upload->do_upload('foto');

        $id_mahasiswa = md5($id_user . $nama . $nim);
        $id_status_mahasiswa = 1;

        $hasil = $this->m_lapor->insert_data_lapor(
            'mahasiswa-' . substr($id_mahasiswa, 0, 5),
            $id_user,
            $id_status_mahasiswa,
            $nama,
            $nik,
            $tempat_lahir,
            $tgl_lahir,
            $jenis_kelamin,
            $no_wa,
            $email_simpkb,
            $ptk_id,
            $nama_darurat,
            $no_darurat,
            $no_peserta,
            $nim,
            $lptk,
            $bidang_studi,
            $nama_kelas,
            $alamat,
            $provinsi,
            $kabupaten,
            $kode_pos,
            $nama_rekening,
            $npwp,
            $nama_bank,
            $bank_cabang,
            $no_rekening,
            $alasan_verifikasi,
            $dokumen_format_a1,
            $dokumen_pakta,
            $dokumen_biodata,
            $dokumen_surat_pimpinan,
            $dokumen_ijazah_s1,
            $dokumen_transkrip_s1,
            $dokumen_ktp,
            $dokumen_skck,
            $dokumen_surat_sehat,
            $dokumen_surat_napza,
            $dokumen_npwp,
			$foto
        );

        if ($hasil == false) {
            $this->session->set_flashdata('eror_input', 'eror_input');
        } else {
            $this->session->set_flashdata('input', 'input');
        }
        redirect('Form_lapor/view_mahasiswa');
    } else {
        $this->session->set_flashdata('loggin_err', 'loggin_err');
        redirect('Login/index');
    }
}

public function tampilkan_gambar($id_gambar)
{
    $this->load->model('M_Gambar');
    
    $data['gambar'] = $this->M_Gambar->get_gambar_by_id($id_gambar); // Ganti ini sesuai dengan model Anda
    
    $this->load->view('tampilkan_gambar', $data);
}



	public function edit_lapor_mahasiswa()
	{
		$id_mahasiswa = $this->input->post("id_mahasiswa");
		$nama = $this->input->post("nama");
		$nik = $this->input->post("nik");
		$tempat_lahir = $this->input->post("tempat_lahir");
		$tgl_lahir = $this->input->post("tgl_lahir");
		$jenis_kelamin = $this->input->post("jenis_kelamin");
		$no_wa = $this->input->post("no_wa");
		$email_simpkb = $this->input->post("email_simpkb");
		$nama_darurat = $this->input->post("nama_darurat");
		$no_darurat = $this->input->post("no_darurat");
		$nim = $this->input->post("nim");
		$nama_kelas = $this->input->post("nama_kelas");
		$alamat = $this->input->post("alamat");
		$provinsi = $this->input->post("provinsi");
		$kabupaten = $this->input->post("kabupaten");
		$kode_pos = $this->input->post("kode_pos");
		$nama_rekening = $this->input->post("nama_rekening");
		$npwp = $this->input->post("npwp");
		$nama_bank = $this->input->post("nama_bank");
		$bank_cabang = $this->input->post("bank_cabang");
		$no_rekening = $this->input->post("no_rekening");



		$hasil = $this->m_lapor->update_lapor($nama, $nik, $tempat_lahir, $tgl_lahir, $jenis_kelamin, $no_wa, $email_simpkb, $nama_darurat, $no_darurat, $nim, $nama_kelas, $alamat, $provinsi, $kabupaten, $kode_pos, $nama_rekening, $npwp, $nama_bank, $bank_cabang, $no_rekening, $dokumen, $foto);

		if ($hasil == false) {
			$this->session->set_flashdata('eror_edit', 'eror_edit');
		} else {
			$this->session->set_flashdata('edit', 'edit');
		}

		redirect('Lapor/detail_mahasiswa');
	}

	

	//request data kabupaten berdasarkan id provinsi yang dipilih
	function get_kabupaten()
	{
		if ($this->input->post('provinsi_id')) {
			echo $this->m_lapor->get_kabupaten($this->input->post('provinsi_id'));
		}
	}

	//request data kecamatan berdasarkan id kabupaten yang dipilih
	function get_kecamatan()
	{
		if ($this->input->post('kabupaten_id')) {
			echo $this->m_lapor->get_kecamatan($this->input->post('kabupaten_id'));
		}
	}

	//request data desa berdasarkan id kecamatan yang dipilih
	function get_desa()
	{
		if ($this->input->post('kecamatan_id')) {
			echo $this->m_lapor->get_desa($this->input->post('kecamatan_id'));
		}
	}
}

