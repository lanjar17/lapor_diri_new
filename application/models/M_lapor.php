<?php

class M_lapor extends CI_Model
{

    public function get_all_lapor()
    {
        $hasil = $this->db->query("SELECT * FROM mahasiswa JOIN user ON mahasiswa.id_user = user.id_user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail ORDER BY user_detail.nama_lengkap ASC");
        return $hasil;
    }

    public function get_all_lapor_by_id_user($id_user)
    {
        $hasil = $this->db->query("SELECT * FROM mahasiswa JOIN user ON mahasiswa.id_user = user.id_user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE mahasiswa.id_user='$id_user'");
        return $hasil;
    }

    public function get_all_lapor_first_by_id_user($id_user)
    {
        $hasil = $this->db->query("SELECT * FROM mahasiswa JOIN user ON mahasiswa.id_user = user.id_user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE mahasiswa.id_user='$id_user' AND mahasiswa.id_status_mahasiswa='2' ORDER BY mahasiswa.tgl_lahir DESC LIMIT 1");
        return $hasil;
    }

    public function get_all_cuti_by_id_cuti($id_mahasiswa)
    {
        $hasil = $this->db->query("SELECT * FROM mahasiswa JOIN user ON mahasiswa.id_user = user.id_user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE mahasiswa.id_mahasiswa='$id_mahasiswa'");
        return $hasil;
    }

    public function get_detail($id_mahasiswa)
    {
        $query = $this->db->query("SELECT * FROM mahasiswa JOIN user ON mahasiswa.id_user = user.id_user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE mahasiswa.id_mahasiswa='$id_mahasiswa'");
        return $query;
    }


    // public function get_berkas($id_user)
    // {
    //     $hasil = $this->db->query("SELECT * FROM berkas JOIN mahasiswa ON mahasiswa.id_user = user.id_user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE mahasiswa.id_user='$id_user'");
    //     return $hasil;
    // }

    // public function get_berkas($id_user)
    // {
    // $hasil = $this->db->query("SELECT * FROM mahasiswa JOIN berkas ON mahasiswa.id_user = berkas.id_user");
    // return $hasil;
    // }

    // public function get_berkas($id_user)
    // {
    // $hasil = $this->db->query("SELECT * FROM berkas");
    // return $hasil;
    // }

    public function get_berkas($id_mahasiwa)
{
    $hasil = $this->db->query("SELECT * FROM berkas WHERE id_mahasiswa");
    return $hasil;
}






    public function insert_data_lapor($id_mahasiswa, $id_user, $id_status_mahasiswa, $nama, $nik, $tempat_lahir, $tgl_lahir, $jenis_kelamin, $no_wa, $email_simpkb, $ptk_id, $nama_darurat, $no_darurat, $no_peserta, $nim, $lptk, $bidang_studi, $alamat, $provinsi, $kabupaten, $kode_pos, $nama_rekening, $npwp, $nama_bank, $bank_cabang, $no_rekening,$alasan_verifikasi, $format_a1, $pakta, $biodata, $surat_pimpinan, $ijazah_s1, $transkrip_s1, $ktp, $skck, $surat_sehat, $surat_napza, $scan_npwp, $kk, $sk_kepegawaian, $foto)
    {
        $this->db->trans_start();
        $this->db->query("INSERT INTO mahasiswa(id_mahasiswa, id_user, id_status_mahasiswa, nama, nik,tempat_lahir,tgl_lahir,jenis_kelamin,no_wa,email_simpkb,ptk_id,nama_darurat,no_darurat,no_peserta,nim,lptk,bidang_studi,alamat,provinsi,kabupaten,kode_pos,nama_rekening,npwp,nama_bank,bank_cabang,no_rekening,alasan_verifikasi, format_a1, pakta, biodata, surat_pimpinan, ijazah_s1, transkrip_s1, ktp, skck, surat_sehat, surat_napza, scan_npwp, kk, sk_kepegawaian, foto) VALUES ('$id_mahasiswa', '$id_user','$id_status_mahasiswa','$nama', '$nik', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', '$no_wa', '$email_simpkb', '$ptk_id', '$nama_darurat', '$no_darurat', '$no_peserta', '$nim', '$lptk', '$bidang_studi', '$alamat', '$provinsi', '$kabupaten', '$kode_pos', '$nama_rekening', '$npwp', '$nama_bank', '$bank_cabang', '$no_rekening', '$alasan_verifikasi', '$format_a1', '$pakta', '$biodata', '$surat_pimpinan', '$ijazah_s1', '$transkrip_s1', '$ktp', '$skck', '$surat_sehat', '$surat_napza', '$scan_npwp', '$kk', '$sk_kepegawaian', '$foto')");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }


    // public function insert_data_berkas($id_berkas, $id_user, $id_mahasiswa, $format_a1, $pakta, $biodata, $surat_pimpinan, $ijazah_s1, $transkrip_s1, $ktp, $skck, $surat_sehat, $surat_napza, $npwp)
    // {
    //     $this->db->trans_start();
    //     $this->db->query("INSERT INTO berkas(id_berkas, id_user,id_mahasiswa, format_a1, pakta, biodata, surat_pimpinan, ijazah_s1, transkrip_s1, ktp, skck, surat_sehat, surat_napza, npwp) VALUES ('$id_berkas', '$id_user', '$id_mahasiswa', '$format_a1', '$pakta', '$biodata', '$surat_pimpinan', '$ijazah_s1', '$transkrip_s1', '$ktp', '$skck', '$surat_sehat', '$surat_napza', '$npwp')");
    //     $this->db->trans_complete();
    //     if($this->db->trans_status()==true)
    //         return true;
    //     else
    //         return false;
    // }


    // public function insert_data_foto($id_foto, $id_user, $foto)
    // {
    //     $this->db->trans_start();
    //     $this->db->query("INSERT INTO foto(id_foto, id_user, foto) VALUES ('$id_foto', '$id_user', '$foto')");
    //     $this->db->trans_complete();
    //     if($this->db->trans_status()==true)
    //         return true;
    //     else
    //         return false;
    // }


    // public function insert_data_lapor($id_mahasiswa, $id_user, $id_status_mahasiswa, $nama, $nik, $tempat_lahir, $tgl_lahir, $jenis_kelamin, $no_wa, $email_simpkb, $ptk_id, $nama_darurat, $no_darurat, $no_peserta, $nim, $lptk, $bidang_studi, $nama_kelas, $alamat, $provinsi, $kabupaten, $kode_pos, $nama_rekening, $npwp, $nama_bank, $bank_cabang, $no_rekening,$alasan_verifikasi, $dokumen, $foto)
    // {
    //     $this->db->trans_start();
    //     $this->db->query("INSERT INTO mahasiswa(id_mahasiswa, id_user, id_status_mahasiswa, nama, nik,tempat_lahir,tgl_lahir,jenis_kelamin,no_wa,email_simpkb,ptk_id,nama_darurat,no_darurat,no_peserta,nim,lptk,bidang_studi,nama_kelas,alamat,provinsi,kabupaten,kode_pos,nama_rekening,npwp,nama_bank,bank_cabang,no_rekening,alasan_verifikasi,dokumen,foto) VALUES ('$id_mahasiswa', '$id_user','$id_status_mahasiswa','$nama', '$nik', '$tempat_lahir', '$tgl_lahir', '$jenis_kelamin', '$no_wa', '$email_simpkb', '$ptk_id', '$nama_darurat', '$no_darurat', '$no_peserta', '$nim', '$lptk', '$bidang_studi', '$nama_kelas', '$alamat', '$provinsi', '$kabupaten', '$kode_pos', '$nama_rekening', '$npwp', '$nama_bank', '$bank_cabang', '$no_rekening', '$alasan_verifikasi', '$dokumen', '$foto')");
    //     $this->db->trans_complete();
    //     if($this->db->trans_status()==true)
    //         return true;
    //     else
    //         return false;
    // }

    public function delete_lapor($id_mahasiswa)
    {
        $this->db->trans_start();
        $this->db->query("DELETE FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_lapor($nama, $nik, $tempat_lahir, $tgl_lahir, $jenis_kelamin, $no_wa, $email_simpkb, $nama_darurat, $no_darurat, $nim, $nama_kelas, $alamat, $provinsi, $kabupaten, $kode_pos, $nama_rekening, $npwp, $nama_bank, $bank_cabang, $no_rekening, $dokumen, $id_mahasiswa)
    {
        $this->db->trans_start();
        $this->db->query("UPDATE mahasiswa SET nama='$nama', nik='$nik', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin',no_wa='$no_wa', email_simpkb='$email_simpkb',  nama_darurat='$nama_darurat', no_darurat='$no_darurat', nim='$nim', nama_kelas='$nama_kelas', alamat='$alamat', provinsi='$provinsi', kabupaten='$kabupaten', kode_pos='$kode_pos', nama_rekening='$nama_rekening', npwp='$npwp', nama_bank='$nama_bank', bank_cabang='$bank_cabang', no_rekening='$no_rekening', dokumen='$dokumen' WHERE id_mahasiswa='$id_mahasiswa'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function confirm_lapor($id_mahasiswa, $id_status_mahasiswa, $alasan_verifikasi)
    {
        $this->db->trans_start();
        $this->db->query("UPDATE mahasiswa SET id_status_mahasiswa='$id_status_mahasiswa', alasan_verifikasi='$alasan_verifikasi' WHERE id_mahasiswa='$id_mahasiswa'");
        $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

   
    public function count_all_lapor()
    {
        $hasil = $this->db->query('SELECT COUNT(id_mahasiswa) as total_mahasiswa FROM mahasiswa JOIN user ON mahasiswa.id_user = user.id_user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail');
        return $hasil;
    }

    public function count_all_lapor_by_id($id_user)
    {
        $hasil = $this->db->query("SELECT COUNT(id_mahasiswa) as total_mahasiswa FROM mahasiswa JOIN user ON mahasiswa.id_user = user.id_user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE mahasiswa.id_user='$id_user'");
        return $hasil;
    }

    public function count_all_lapor_acc()
    {
        $hasil = $this->db->query('SELECT COUNT(id_mahasiswa) as total_mahasiswa FROM mahasiswa JOIN user ON mahasiswa.id_user = user.id_user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE id_status_mahasiswa=2');
        return $hasil;
    }

    public function count_all_lapor_acc_by_id($id_user)
    {
        $hasil = $this->db->query("SELECT COUNT(id_mahasiswa) as total_mahasiswa FROM mahasiswa JOIN user ON mahasiswa.id_user = user.id_user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE id_status_mahasiswa=2 AND mahasiswa.id_user='$id_user'");
        return $hasil;
    }

    public function count_all_lapor_confirm()
    {
        $hasil = $this->db->query('SELECT COUNT(id_mahasiswa) as total_mahasiswa FROM mahasiswa JOIN user ON mahasiswa.id_user = user.id_user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE id_status_mahasiswa=1');
        return $hasil;
    }

    public function count_all_lapor_confirm_by_id($id_user)
    {
        $hasil = $this->db->query("SELECT COUNT(id_mahasiswa) as total_mahasiswa FROM mahasiswa JOIN user ON mahasiswa.id_user = user.id_user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE id_status_mahasiswa=1 AND mahasiswa.id_user='$id_user'");
        return $hasil;
    }

    public function count_all_lapor_reject()
    {
        $hasil = $this->db->query('SELECT COUNT(id_mahasiswa) as total_mahasiswa FROM mahasiswa JOIN user ON mahasiswa.id_user = user.id_user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE id_status_mahasiswa=3');
        return $hasil;
    }

    public function count_all_lapor_reject_by_id($id_user)
    {
        $hasil = $this->db->query("SELECT COUNT(id_mahasiswa) as total_mahasiswa FROM mahasiswa JOIN user ON mahasiswa.id_user = user.id_user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE id_status_mahasiswa=3 AND mahasiswa.id_user='$id_user'");
        return $hasil;
    }

    // public function detail_data($id_mahasiswa = NULL){
    //     $this->db->get_where('mahasiswa', array('id_mahasiswa' => $id_mahasiswa))->row();

    //     return $query;
    // }

 
    public function get_gambar_by_id($id_gambar)
    {
        $this->db->select('nama_gambar');
        $this->db->where('id', $id_gambar);
        $query = $this->db->get('foto'); // Ganti 'gambar' dengan nama tabel Anda

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return null;
        }
    }




    function get_provinsi()
    {
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('provinces');
        return $query->result();
    }

    function get_kabupaten($provinsi_id)
    {
        //ambil data kabupaten berdasarkan id provinsi yang dipilih
        $this->db->where('province_id', $provinsi_id);
        $this->db->order_by('name', 'ASC');
        $query = $this->db->get('regencies');

        $output = '<option value="">--Pilih Kota/Kabupaten--</option>';

        //looping data
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
        }
        //return data kabupaten
        return $output;
    }



}