<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("mahasiswa/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php if ($this->session->flashdata('input')) { ?>
        <script>
            swal({
                title: "Success!",
                text: "Data Berhasil Ditambahkan!",
                icon: "success"
            });
        </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror')) { ?>
        <script>
            swal({
                title: "Erorr!",
                text: "Data Gagal Ditambahkan!",
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
                        <div class="col-sm-6">
                            <h1 class="m-0">Mahasiswa PPG FKIP UNISSULA </h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?= $lapor['total_mahasiswa'] ?></h3>

                                    <p>Data Lapor Diri</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-folder"></i>
                                </div>
                                <a href="<?= base_url(); ?>Lapor/view_mahasiswa/<?= $this->session->userdata('id_user'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?= $lapor_acc['total_mahasiswa'] ?></h3>

                                    <p>Data Divalidasi</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-checkmark-circled"></i>
                                </div>
                                <a href="<?= base_url(); ?>Lapor/view_mahasiswa/<?= $this->session->userdata('id_user'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3><?= $lapor_reject['total_mahasiswa'] ?></h3>

                                    <p>Data Ditolak</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-close-circled"></i>
                                </div>
                                <a href="<?= base_url(); ?>Lapor/view_mahasiswa/<?= $this->session->userdata('id_user'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3><?= $lapor_confirm['total_mahasiswa'] ?></h3>

                                    <p>Data Menunggu Konfirmasi</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-load-a"></i>
                                </div>
                                <a href="<?= base_url(); ?>Lapor/view_mahasiswa/<?= $this->session->userdata('id_user'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>


                    </div>
                    <h1>Syarat Lapor Diri</h1>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Ketentuan</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                1. Upload Berkas dalam format <b>.pdf</b>
                            </p>
                            <p class="card-text">
                                2. Mohon Untuk Penamaan Berkas <b>TIDAK MEMAKAI SPASI.</b> contoh : <b>BerkasKTP_NamaMahasiswa_2023.pdf</b>
                            </p>
                            <p class="card-text">
                                3. Ukuran File Maksimal <b>2Mb</b>
                            </p>
                            <p class="card-text">
                                4. Berkas yang diperlukan : Bisa dilihat pada website PPG FKIP UNISSULA <a href="https://ppg.unissula.ac.id/lapor-diri-ppg-dalam-jabatan-k1-angkatan-ii-tahun-2023-universitas-islam-sultan-agung/" target="_blank">Klik Disini.</a>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Guidebook Lapor Diri</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                1. <b>Buku Panduan</b> Lapor Diri Mahasiswa PPG FKIP UNISSULA
                            </p>
                            <p class="card-text">
                                <iframe src="https://drive.google.com/file/d/1WahXXaIsGC2V-3yCsNaPDbktG8Q-vCwu/preview" width="1000" height="500"></iframe>
                            </p>
                    </div>
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

    <?php $this->load->view("mahasiswa/components/js.php") ?>
    <?php $this->load->view("admin/components/footer.php") ?>
</body>

</html>