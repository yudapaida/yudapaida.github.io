<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Daftar Permohonan Cuti</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Daftar Permohonan Cuti</a></li>
                        <li class="breadcrumb-item active">Cuti Besar</li>
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
                            <h3 class="card-title">Cuti Besar</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">No.</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Gol</th>
                                        <th>Jabatan</th>
                                        <th>Jenis Cuti</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>197107081991031002</td>
                                        <td>Toni, S.H.</td>
                                        <td>III/c</td>
                                        <td>Pranata Komputer</td>
                                        <td>Cuti Besar</td>
                                        <td>13-06-2021</td>
                                        <td><button type="button" class="btn btn-block btn-default">Process</button></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>197711242002121003</td>
                                        <td>ACO RAHMADI, S.H.</td>
                                        <td>II/c</td>
                                        <td>Pranata Komputer</td>
                                        <td>Cuti Besar</td>
                                        <td>13-06-2021</td>
                                        <td><button type="button" class="btn btn-block btn-default">Process</button></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>197107081991031002</td>
                                        <td>Damar Putra, S.H.</td>
                                        <td>III/c</td>
                                        <td>Pranata Komputer</td>
                                        <td>Cuti Besar</td>
                                        <td>13-06-2021</td>
                                        <td><button type="button" class="btn btn-block btn-default">Process</button></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>197711242002121003</td>
                                        <td>Gerarld Nasution, S.H.</td>
                                        <td>II/c</td>
                                        <td>Pranata Komputer</td>
                                        <td>Cuti Besar</td>
                                        <td>13-06-2021</td>
                                        <td><button type="button" class="btn btn-block btn-default">Process</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection(); ?>