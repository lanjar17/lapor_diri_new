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


                    <form action="<?= base_url(); ?>Form_foto/proses_lapor" method="POST" enctype="multipart/form-data">
                        <input type="text" value="<?= $this->session->userdata('id_user') ?>" name="id_user" hidden>
                        <div class="col-12 pt-0">
                            <div class="dropdown-divider"></div>
                            <div class="divider-text text-center mb-3">Upload Foto</div>
                        </div>
                        <div class="col-12 pt-0">
                            <div class="dropdown-divider"></div>
                            <div class="divider-text mb-3"><b>Requirement :</b><i style="color:red;">&nbsp; *Ukuran file tidak boleh berukuran lebih dari 2Mb</i></div>
                            <p></p>
                        </div>


                        <div class="row mb-3">
                            <div class="col-md col-12 pt-3">
                                <label for="" class="labels text-gray-800">Upload Foto 4x6 <i>(4x6 format .jpg/.png)</i></label>
                                <input class="form-control editable" type="file" name="foto" id="foto" placeholder="" aria-describedby="foto" required>
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