<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <?php if ($this->session->flashdata('edit')) { ?>
        <script>
            swal({
                title: "Success!",
                text: "Data Berhasil Diedit!",
                icon: "success"
            });
        </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_edit')) { ?>
        <script>
            swal({
                title: "Erorr!",
                text: "Data Gagal Diedit !",
                icon: "error"
            });
        </script>
    <?php } ?>

    <?php if ($this->session->flashdata('hapus')) { ?>
        <script>
            swal({
                title: "Success!",
                text: "Data Berhasil Dihapus!",
                icon: "success"
            });
        </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_hapus')) { ?>
        <script>
            swal({
                title: "Erorr!",
                text: "Data Gagal Dihapus !",
                icon: "error"
            });
        </script>
    <?php } ?>

    <?php if ($this->session->flashdata('input')) { ?>
        <script>
            swal({
                title: "Success!",
                text: "Status Lapor Berhasil Diubah!",
                icon: "success"
            });
        </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_input')) { ?>
        <script>
            swal({
                title: "Erorr!",
                text: "Status Lapor Gagal Diubah!",
                icon: "error"
            });
        </script>
    <?php } ?>

    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url(); ?>assets/admin_lte/dist/img/Loading.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view("admin/components/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("admin/components/sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Status Data Lapor Diri</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>Lapor/view_admin">Home</a></li>
                                <li class="breadcrumb-item active">Status Data Lapor Diri Mahasiswa</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Lapor Diri Mahasiswa</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered table-striped">
                                        <?php

                                        $no = 0;
                                        foreach ($mahasiswa as $i) :
                                            $no++;
                                            $id_mahasiswa = $i['id_mahasiswa'];
                                            $id_user = $i['id_user'];
                                            $nama = $i['nama'];
                                            $nik = $i['nik'];
                                            $tempat_lahir = $i['tempat_lahir'];
                                            $tgl_lahir = $i['tgl_lahir'];
                                            $jenis_kelamin = $i['jenis_kelamin'];
                                            $no_wa = $i['no_wa'];
                                            $email_simpkb = $i['email_simpkb'];
                                            $ptk_id = $i['ptk_id'];
                                            $nama_darurat = $i['nama_darurat'];
                                            $no_darurat = $i['no_darurat'];
                                            $no_peserta = $i['no_peserta'];
                                            $nim = $i['nim'];
                                            $lptk = $i['lptk'];
                                            $bidang_studi = $i['bidang_studi'];
                                            $nama_kelas = $i['nama_kelas'];
                                            $alamat = $i['alamat'];
                                            $provinsi = $i['provinsi'];
                                            $kabupaten = $i['kabupaten'];
                                            $kode_pos = $i['kode_pos'];
                                            $nama_rekening = $i['nama_rekening'];
                                            $npwp = $i['npwp'];
                                            $nama_bank = $i['nama_bank'];
                                            $bank_cabang = $i['bank_cabang'];
                                            $no_rekening = $i['no_rekening'];
                                            $pakta = $i['pakta'];
                                            $format_a1 = $i['format_a1'];
                                            $biodata = $i['biodata'];
                                            $surat_pimpinan = $i['surat_pimpinan'];
                                            $ijazah_s1 = $i['ijazah_s1'];
                                            $transkrip_s1 = $i['transkrip_s1'];
                                            $ktp = $i['ktp'];
                                            $skck = $i['skck'];
                                            $surat_sehat = $i['surat_sehat'];
                                            $surat_napza = $i['surat_napza'];
                                            $scan_npwp = $i['scan_npwp'];
                                            $foto = $i['foto'];
                                            $id_status_mahasiswa = $i['id_status_mahasiswa'];



                                        ?>
                                            <tr>
                                                <th>Nama</th>
                                                <td><?= $nama ?></td>
                                            </tr>
                                            <tr>
                                                <th>NIK</th>
                                                <td><?= $nik ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tempat Lahir</th>
                                                <td><?= $tempat_lahir ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Lahir</th>
                                                <td><?= $tgl_lahir ?></td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Kelamin</th>
                                                <td><?= $jenis_kelamin ?></td>
                                            </tr>
                                            <tr>
                                                <th>NO WA</th>
                                                <td><?= $no_wa ?></td>
                                            </tr>
                                            <tr>
                                                <th>Email SIMPKB</th>
                                                <td><?= $email_simpkb ?></td>
                                            </tr>
                                            <tr>
                                                <th>PTK ID</th>
                                                <td><?= $ptk_id ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Kontak Darurat</th>
                                                <td><?= $nama_darurat ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nomor Kontak Darurat</th>
                                                <td><?= $no_darurat ?></td>
                                            </tr>
                                            <tr>
                                                <th>No Peserta</th>
                                                <td><?= $no_peserta ?></td>
                                            </tr>
                                            <tr>
                                                <th>NIM</th>
                                                <td><?= $nim ?></td>
                                            </tr>
                                            <tr>
                                                <th>LPTK</th>
                                                <td><?= $lptk ?></td>
                                            </tr>
                                            <tr>
                                                <th>Bidang Studi</th>
                                                <td><?= $bidang_studi ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Kelas</th>
                                                <td><?= $nama_kelas ?></td>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <td><?= $alamat ?></td>
                                            </tr>
                                            <tr>
                                                <th>Provinsi</th>
                                                <td><?= $provinsi ?></td>
                                            </tr>
                                            <tr>
                                                <th>Kabupaten</th>
                                                <td><?= $kabupaten ?></td>
                                            </tr>
                                            <tr>
                                                <th>Kode Pos</th>
                                                <td><?= $kode_pos ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Rekening</th>
                                                <td><?= $nama_rekening ?></td>
                                            </tr>
                                            <tr>
                                                <th>NPWP</th>
                                                <td><?= $npwp ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nama Bank</th>
                                                <td><?= $nama_bank ?></td>
                                            </tr>
                                            <tr>
                                                <th>Bank Cabang</th>
                                                <td><?= $bank_cabang ?></td>
                                            </tr>
                                            <tr>
                                                <th>No Rekening</th>
                                                <td><?= $no_rekening ?></td>
                                            </tr>

                                            <tr>
                                                <th>Scan Dokumen Format A1</th>
                                                <!-- <td><a class="btn btn-success" href="<?php echo base_url("assets/berkas/ijazah_s1/") . $ijazah_s1 ?>">Lihat Berkas <?= $nama ?></a></td> -->
                                                <td> <embed src="<?php echo base_url("assets/berkas/format_a1/") . $format_a1 ?>" width="700px" height="600px" /> </td>
                                            </tr>

                                            <tr>
                                                <th>Scan Pakta</th>
                                                <!-- <td><a class="btn btn-success" href="<?php echo base_url("assets/berkas/ijazah_s1/") . $ijazah_s1 ?>">Lihat Berkas <?= $nama ?></a></td> -->
                                                <td> <embed src="<?php echo base_url("assets/berkas/pakta/") . $pakta ?>" width="700px" height="600px" /> </td>
                                            </tr>

                                            <tr>
                                                <th>Scan Biodata</th>
                                                <!-- <td><a class="btn btn-success" href="<?php echo base_url("assets/berkas/ijazah_s1/") . $ijazah_s1 ?>">Lihat Berkas <?= $nama ?></a></td> -->
                                                <td> <embed src="<?php echo base_url("assets/berkas/biodata/") . $biodata ?>" width="700px" height="600px" /> </td>
                                            </tr>

                                            <tr>
                                                <th>Scan Surat Pimpinan</th>
                                                <!-- <td><a class="btn btn-success" href="<?php echo base_url("assets/berkas/ijazah_s1/") . $ijazah_s1 ?>">Lihat Berkas <?= $nama ?></a></td> -->
                                                <td> <embed src="<?php echo base_url("assets/berkas/surat_pimpinan/") . $surat_pimpinan ?>" width="700px" height="600px" /> </td>
                                            </tr>

                                            <tr>
                                                <th>Scan Ijazah S1</th>
                                                <!-- <td><a class="btn btn-success" href="<?php echo base_url("assets/berkas/ijazah_s1/") . $ijazah_s1 ?>">Lihat Berkas <?= $nama ?></a></td> -->
                                                <td> <embed src="<?php echo base_url("assets/berkas/biodata/") . $biodata ?>" width="700px" height="600px" /> </td>
                                            </tr>

                                            <tr>
                                                <th>Scan Transkrip S1</th>
                                                <!-- <td><a class="btn btn-success" href="<?php echo base_url("assets/berkas/ijazah_s1/") . $ijazah_s1 ?>">Lihat Berkas <?= $nama ?></a></td> -->
                                                <td> <embed src="<?php echo base_url("assets/berkas/transkrip_s1/") . $transkrip_s1 ?>" width="700px" height="600px" /> </td>
                                            </tr>

                                            <tr>
                                                <th>Scan KTP</th>
                                                <!-- <td><a class="btn btn-success" href="<?php echo base_url("assets/berkas/ijazah_s1/") . $ijazah_s1 ?>">Lihat Berkas <?= $nama ?></a></td> -->
                                                <td> <embed src="<?php echo base_url("assets/berkas/ktp/") . $ktp ?>" width="700px" height="600px" /> </td>
                                            </tr>

                                            <tr>
                                                <th>Scan SKCK</th>
                                                <!-- <td><a class="btn btn-success" href="<?php echo base_url("assets/berkas/ijazah_s1/") . $ijazah_s1 ?>">Lihat Berkas <?= $nama ?></a></td> -->
                                                <td> <embed src="<?php echo base_url("assets/berkas/skck/") . $skck ?>" width="700px" height="600px" /> </td>
                                            </tr>

                                            <tr>
                                                <th>Scan Surat Ket Sehat</th>
                                                <!-- <td><a class="btn btn-success" href="<?php echo base_url("assets/berkas/ijazah_s1/") . $ijazah_s1 ?>">Lihat Berkas <?= $nama ?></a></td> -->
                                                <td> <embed src="<?php echo base_url("assets/berkas/surat_sehat/") . $surat_sehat ?>" width="700px" height="600px" /> </td>
                                            </tr>

                                            <tr>
                                                <th>Scan Surat NAPZA</th>
                                                <!-- <td><a class="btn btn-success" href="<?php echo base_url("assets/berkas/ijazah_s1/") . $ijazah_s1 ?>">Lihat Berkas <?= $nama ?></a></td> -->
                                                <td> <embed src="<?php echo base_url("assets/berkas/surat_napza/") . $surat_napza ?>" width="700px" height="600px" /> </td>
                                            </tr>

                                            <tr>
                                                <th>Scan NPWP</th>
                                                <!-- <td><a class="btn btn-success" href="<?php echo base_url("assets/berkas/ijazah_s1/") . $ijazah_s1 ?>">Lihat Berkas <?= $nama ?></a></td> -->
                                                <td> <embed src="<?php echo base_url("assets/berkas/scan_npwp/") . $scan_npwp ?>" width="700px" height="600px" /> </td>
                                            </tr>

                                            <tr>

                                            </tr>

                                            <tr>
                                                <th>Foto Lapor Diri</th>
                                                <td>
                                                    <div>
                                                        <a href="<?php echo base_url("assets/berkas/foto/") . $foto ?>" target="_blank">
                                                            <img src="<?php echo base_url("assets/berkas/foto/") . $foto ?>" alt="Preview Gambar" width="200px" />
                                                        </a>
                                                    </div>
                                                    <div>
                                                        <a href="<?php echo base_url("assets/foto/") . $foto ?>" class="btn btn-primary" download><i class="fa fa-download">Unduh Gambar</i></a>
                                                    </div>
                                            </tr>

                                        <?php endforeach; ?>
                                    </table>


                                </div>
                                <!-- /.card-body -->
                                <a href="<?= base_url(); ?>Lapor/view_super_admin" class="btn btn-warning"><i class="fas">Kembali</i></a>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view("admin/components/js.php") ?>
</body>

</html>