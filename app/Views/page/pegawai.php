<?= $this->extend('layout/template_pegawai'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

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
                            <h3 class="card-title">UPLOAD BERKAS PERMOHONAN CUTI</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- form start -->
                            <form action="#" class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputNama" class="col-sm-2 col-form-label">NAMA</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputNama" placeholder="Isi Nama Sesuai SK">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputNIP" class="col-sm-2 col-form-label">NIP</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputNip" placeholder="Isi NIP Tanpa Spasi">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputNRP" class="col-sm-2 col-form-label">NRP</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputNRP" placeholder="Isi NRP">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputGOL" class="col-sm-2 col-form-label">GOL</label>
                                        <div class="col-sm-10">
                                            <select class="custom-select rounded-0" id="inputGOL">
                                                <option>II/a</option>
                                                <option>II/b</option>
                                                <option>II/c</option>
                                                <option>II/d</option>
                                                <option>III/a</option>
                                                <option>III/b</option>
                                                <option>III/c</option>
                                                <option>III/d</option>
                                                <option>IV/a</option>
                                                <option>IV/b</option>
                                                <option>IV/c</option>
                                                <option>IV/d</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPangkat" class="col-sm-2 col-form-label">PANGKAT</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPangkat" placeholder="Isi Pangkat">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputJabatan" class="col-sm-2 col-form-label">JABATAN</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputJabatan" placeholder="Isi Jabatan">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEselonI" class="col-sm-2 col-form-label">Unit Kerja</label>
                                        <div class="col-sm-5">
                                            <select class="custom-select rounded-0" id="inputEselonI">
                                                <option>Eselon I</option>
                                                <option>Jaksa Agung Muda Bidang Pembinaan</option>
                                                <option>Jaksa Agung Muda Bidang Intelijen</option>
                                                <option>Jaksa Agung Muda Bidang Pidana Umum</option>
                                                <option>Jaksa Agung Muda Bidang Pengawasan</option>
                                                <option>Jaksa Agung Muda Bidang Perdata dan Tata Usaha Negara</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEselonII" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-5">
                                            <select class="custom-select rounded-0" id="inputEselonII">
                                                <option>Eselon II</option>
                                                <option>Sekretariat Jaksa Agung Muda Bidang Pembinaan</option>
                                                <option>Biro Perencanaan</option>
                                                <option>Biro Umum</option>
                                                <option>Biro Kepegawaian</option>
                                                <option>Biro Keuangan</option>
                                                <option>Biro Perlengkapan</option>
                                                <option>Biro Hukum dan Hubungan Luar Negeri</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Date range -->
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal Mulai Cuti:</label>
                                        <div class="col-sm-5">

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                            </div>
                                            <!-- /.input group -->

                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal Selesai Cuti:</label>
                                        <div class="col-sm-5">

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                            </div>
                                            <!-- /.input group -->

                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form group -->
                                    <div class="form-group row">
                                        <label for="inputTelepon" class="col-sm-2 col-form-label">Jumlah Cuti</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputTelepon" placeholder="Isi Jumlah Cuti">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputTelepon" class="col-sm-2 col-form-label">NO HP</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputTelepon" placeholder="Isi No WhatsApp">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">UPLOAD FORM CUTI</label>
                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-2">
                                            <div class="input-group">
                                                <button type="submit" class="btn btn-primary btn-block">Kirim</button>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
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