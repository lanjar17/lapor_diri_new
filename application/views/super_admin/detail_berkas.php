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
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>Lapor/view_super_admin">Home</a></li>
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
                                        foreach ($berkas as $i) :
                                            $no++;
                                            $id_berkas = $i['id_berkas'];
                                            $id_user = $i['id_user'];
                                            
                                            $format_a1 = $i['format_a1'];
                                            $pakta = $i['pakta'];
                                            $biodata = ['biodata'];
                                            $surat_pimpinan = ['surat_pimpinan'];
                                            $ijazah_s1 = ['ijazah_s1'];
                                            $transkrip_s1 = ['transkrip_s1'];
                                            $ktp = ['ktp'];
                                            $skck = ['skck'];
                                            $surat_sehat = ['surat_sehat'];
                                            $surat_napza = ['surat_napza'];
                                            $npwp = ['npwp'];

                                    ?>
                                            <tr>
                                                <!-- <th><? $no?></th> -->
                                                <th>Format A1</th>
                                                <td> <embed src="<?php echo base_url("assets/berkas/format_a1/") . $format_a1 ?>" width="700px" height="600px" /> </td>
                                            </tr>
                                            <tr>
                                                <!-- <th><? $no?></th> -->
                                                <th>Pakta</th>
                                                <td> <embed src="<?php echo base_url("assets/berkas/pakta/") . $pakta ?>" width="700px" height="600px" /> </td>
                                            </tr>
                                            <tr>
                                                <!-- <th><? $no?></th> -->
                                                <th>Biodata</th>
                                                <td> <embed src="<?php echo base_url("assets/berkas/biodata/") . $biodata ?>" width="700px" height="600px" /> </td>
                                            </tr>
                                            <tr>
                                                <!-- <th><? $no?></th> -->
                                                <th>Surat Pimpinan</th>
                                                <td> <embed src="<?php echo base_url("assets/berkas/surat_pimpinan/") . $surat_pimpinan ?>" width="700px" height="600px" /> </td>
                                            </tr>
                                            <tr>
                                                <!-- <th><? $no?></th> -->
                                                <th>Ijazah S1</th>
                                                <td> <embed src="<?php echo base_url("assets/berkas/ijazah_s1/") . $ijazah_s1 ?>" width="700px" height="600px" /> </td>
                                            </tr>
                                            <tr>
                                                <!-- <th><? $no?></th> -->
                                                <th>Transkrip S1</th>
                                                <td> <embed src="<?php echo base_url("assets/berkas/transkrip_s1/") . $transkrip_s1 ?>" width="700px" height="600px" /> </td>
                                            </tr>
                                            <tr>
                                                <!-- <th><? $no?></th> -->
                                                <th>KTP</th>
                                                <td> <embed src="<?php echo base_url("assets/berkas/ktp/") . $ktp ?>" width="700px" height="600px" /> </td>
                                            </tr>
                                            <tr>
                                                <!-- <th><? $no?></th> -->
                                                <th>SKCK</th>
                                                <td> <embed src="<?php echo base_url("assets/berkas/skck/") . $skck ?>" width="700px" height="600px" /> </td>
                                            </tr>
                                            <tr>
                                                <!-- <th><? $no?></th> -->
                                                <th>Surat Sehat</th>
                                                <td> <embed src="<?php echo base_url("assets/berkas/surat_sehat/") . $surat_sehat ?>" width="700px" height="600px" /> </td>
                                            </tr>
                                            <tr>
                                                <!-- <th><? $no?></th> -->
                                                <th>Surat Napza</th>
                                                <td> <embed src="<?php echo base_url("assets/berkas/surat_napza/") . $surat_napza ?>" width="700px" height="600px" /> </td>
                                            </tr>
                                            <tr>
                                                <!-- <th><? $no?></th> -->
                                                <th>NPWP</th>
                                                <td> <embed src="<?php echo base_url("assets/berkas/npwp/") . $npwp ?>" width="700px" height="600px" /> </td>
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