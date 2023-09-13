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

    <?php if ($this->session->flashdata('eror_input')) { ?>
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
                            <h1 class="m-0">Form Upload Berkas PPG FKIP UNISSULA</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Form Lapor Diri</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">


                    <form action="<?= base_url(); ?>Form_berkas/proses_berkas" method="POST" enctype="multipart/form-data">
                        <input type="text" value="<?= $this->session->userdata('id_user') ?>" name="id_user" hidden>
                        <div class="col-12 pt-0">
                            <div class="dropdown-divider"></div>
                            <div class="divider-text text-center mb-3">Upload Berkas</div>
                        </div>
                        <div class="col-12 pt-0">
                            <div class="dropdown-divider"></div>
                            <div class="divider-text mb-3"><b>Requirement :</b><i style="color:red;">&nbsp; *Ukuran file tidak boleh berukuran lebih dari 2Mb</i></div>
                            <p></p>
                        </div>


                        <div class="row mb-3">
                            <div class="col-md col-12">
                                <label for="" class="labels text-gray-800">Format A1 <i>(Format Diunduh dari SIMPKB)</i></label>
                                <input class="form-control editable" type="file" name="format_a1" id="format_a1" placeholder="" aria-describedby="format_a1" required>
                            </div>

                            <div class="col-md col-12">
                                <label for="" class="labels text-gray-800">Pakta Integritas <i>(Format Diunduh dari SIMPKB)</i></label>
                                <input class="form-control editable" type="file" name="pakta" id="pakta" placeholder="" aria-describedby="pakta" required>
                            </div>

                            <div class="col-md col-12">
                                <label for="" class="labels text-gray-800">Biodata Mahasiswa <i>(Sesuai Format PDDIKTI)</i></label>
                                <input class="form-control editable" type="file" name="biodata" id="biodata" placeholder="" aria-describedby="biodata" required>
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="col-md col-12 pt-3">
                                <label for="" class="labels text-gray-800">Surat Pernyataan Izin Pimpinan <i>(Sesuai Format PDDIKTI)</i></label>
                                <input class="form-control editable" type="file" name="surat_pimpinan" id="surat_pimpinan" placeholder="" aria-describedby="surat_pimpinan" required>
                            </div>

                            <div class="col-md col-12 pt-3">
                                <label for="" class="labels text-gray-800">Scan Ijazah S1</label>
                                <input class="form-control editable" type="file" name="ijazah_s1" id="ijazah_s1" placeholder="" aria-describedby="ijazah_s1" required>
                            </div>

                            <div class="col-md col-12 pt-3">
                                <label for="" class="labels text-gray-800">Scan Transkrip Nilai S1</label>
                                <input class="form-control editable" type="file" name="transkrip_s1" id="transkrip_s1" placeholder="" aria-describedby="transkrip_s1" required>
                            </div>

                        </div>

                        <div class="row mb-3">

                            <div class="col-md col-12 pt-3">
                                <label for="" class="labels text-gray-800">Scan Kartu Identitas KTP/SIM</label>
                                <input class="form-control editable" type="file" name="ktp" id="ktp" placeholder="" aria-describedby="ktp" required>
                            </div>

                            <div class="col-md col-12 pt-3">
                                <label for="" class="labels text-gray-800">SKCK <i>(Dari Kepolisian Setempat)</i></label>
                                <input class="form-control editable" type="file" name="skck" id="skck" placeholder="" aria-describedby="skck" required>
                            </div>

                            <div class="col-md col-12 pt-3">
                                <label for="" class="labels text-gray-800">Surat Ket Sehat <i>(Dari Puskesmas/RSUD Setempat)</i></label>
                                <input class="form-control editable" type="file" name="surat_sehat" id="surat_sehat" placeholder="" aria-describedby="surat_sehat" required>
                            </div>
                            
                        </div>

                        <div class="row mb-3">
                            <div class="col-md col-12 pt-3">
                                <label for="" class="labels text-gray-800">Surat Bebas NAPZA <i>(Dari BNN/Kepolisian/RSUD Setempat)</i></label>
                                <input class="form-control editable" type="file" name="surat_napza" id="surat_napza" placeholder="" aria-describedby="surat_napza" required>
                            </div>

                            <div class="col-md col-12 pt-3">
                                <label for="" class="labels text-gray-800">Scan NPWP <i>(bagi yang memiliki)</i></label>
                                <input class="form-control editable" type="file" name="npwp" id="npwp" placeholder="" aria-describedby="npwp" required>
                            </div>
                            
                        </div>

                        <button type="submit" class="mb-3 btn btn-primary">Submit</button>
                    </form>

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
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Seleksi elemen input
        var inputElement = document.getElementById("lptk");
        
        // Tetapkan teks default ke input
        inputElement.value = "Universitas Islam Sultan Agung";
    });
</script>
</body>

</html>