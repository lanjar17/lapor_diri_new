<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("mahasiswa/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

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

    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url(); ?>assets/admin_lte/dist/img/Loading.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view("mahasiswa/components/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("mahasiswa/components/sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6t
                            <h1 class=" m-0">Status Validasi</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Status Validasi</li>
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
                                    <h3 class="card-title">Data Lapor Diri</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>NIK</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Email SIMPKB</th>
                                                <th>PTK ID</th>
                                                <th>Status Verifikasi</th>
                                                <th>Alasan Verifikasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $no = 0;
                                            foreach ($lapor as $i) :
                                                $no++;
                                                $id_mahasiswa = $i['id_mahasiswa'];
                                                $id_user = $i['id_user'];
                                                $nama = $i['nama'];
                                                $nik = $i['nik'];
                                                $tempat_lahir = $i['tempat_lahir'];
                                                $tgl_lahir = $i['tgl_lahir'];
                                                $email_simpkb = $i['email_simpkb'];
                                                $ptk_id = $i['ptk_id'];
                                                $id_status_mahasiswa = $i['id_status_mahasiswa'];
                                                $alasan_verifikasi = $i['alasan_verifikasi'];

                                            ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $nama ?></td>
                                                    <td><?= $nik ?></td>
                                                    <td><?= $tempat_lahir ?></td>
                                                    <td><?= $tgl_lahir ?></td>
                                                    <td><?= $email_simpkb ?></td>
                                                    <td><?= $ptk_id ?></td>

                                                    <td><?php if ($id_status_mahasiswa == 1) { ?>
                                                            <div class="table-responsive">
                                                                <div class="table table-striped table-hover ">
                                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#edit_data_mahasiswa">
                                                                        Menunggu Konfirmasi
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        <?php } elseif ($id_status_mahasiswa == 2) { ?>
                                                            <div class="table-responsive">
                                                                <div class="table table-striped table-hover ">
                                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#edit_data_mahasiswa">
                                                                        Status Mahasiswa Diterima
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        <?php } elseif ($id_status_mahasiswa == 3) { ?>
                                                            <div class="table-responsive">
                                                                <div class="table table-striped table-hover ">
                                                                    <a href="" class="btn btn-info" data-toggle="modal" data-target="#edit_data_mahasiswa">
                                                                        Status Mahasiswa Ditolak
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </td>
                                                    <td><?php if ($alasan_verifikasi == NULL) { ?>
                                                            <a href="" class="btn btn-danger">
                                                                Belum Ada
                                                            </a>
                                                        <?php } else { ?>
                                                            <?= $alasan_verifikasi ?>
                                                        <?php } ?>
                                                    </td>
                                                    <!-- <td><?php if ($id_status_mahasiswa == 2) { ?>
                                                            <a href="<?= base_url(); ?>Cetak/surat_cuti_pdf/<?= $id_cuti ?>" target="_blank" class="btn btn-info">
                                                                Cetak Surat
                                                            </a>
                                                        <?php } else { ?>
                                                            <a href="" class="btn btn-danger">
                                                                Belum Dapat Mencetak
                                                            </a>
                                                        <?php } ?>
                                                    </td> -->
                                                    <td>
                                                        <div class="table-responsive">
                                                            <div class="table table-striped table-hover ">
                                                                <a href="" data-toggle="modal" data-target="#hapus<?= $id_mahasiswa ?>" class="btn btn-danger"><i class="fas fa-trash"></i>
                                                                </a>
                                                                <!-- <a href="<?= base_url("Lapor/detail_mahasiswa/") . $id_mahasiswa; ?>" class="btn btn-warning"><i class="fas fa-pencil-square"></i>
                                                                </a> -->
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <!-- Modal Hapus Data Cuti -->
                                                <div class="modal fade" id="hapus<?= $id_mahasiswa ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data
                                                                    Lapor
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <form action="<?php echo base_url() ?>Lapor/hapus_lapor" method="post" enctype="multipart/form-data">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <input type="hidden" name="id_mahasiswa" value="<?php echo $id_mahasiswa ?>" />
                                                                            <input type="hidden" name="id_user" value="<?php echo $id_user ?>" />

                                                                            <p>Apakah kamu yakin ingin menghapus data
                                                                                ini?</i></b></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger ripple" data-dismiss="modal">Tidak</button>
                                                                        <button type="submit" class="btn btn-success ripple save-category">Ya</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
            <!-- Modal -->

        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view("mahasiswa/components/js.php") ?>
    <?php $this->load->view("admin/components/footer.php") ?>
</body>

</html>