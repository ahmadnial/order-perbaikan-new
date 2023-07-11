<?php include 'template/header.php';

include "proses.php"; ?>


<header class="container-sm bg-purple mt-2 text-center shadow-lg p-2 mb-2 bg-body rounded">

    <h1>ORDER PERBAIKAN BARANG IPSRS</h1>

</header>
<!-- <div class="content-wrapper"> -->

<div class="container">
    <div class="card">
        <div class="row">
            <div class="card-body">
                <div class="col-lg col-sm">
                    <form method="POST">
                        <h5 for="" class="bg-purple col text-white text-center shadow-sm p-2 bg-body rounded">Form Pelaporan</h5>
                        <div class="f-group">
                            <!-- <div class="f-group">
                                        <label for="">Kode Laporan</label>
                                        <input type="text" class="form-control mb-3" name="kd_laporan" placeholder="Kosongkan Saja!">
                                    </div> -->
                            <label for="">Tanggal</label>
                            <input type="date" id="" name="tgl" placeholder="" class="form-control tgl_now" required readonly>
                        </div>
                        <div class="f-group mt-2">
                            <!-- <div class="f-group">
                                        <label for="">Kode Laporan</label>
                                        <input type="text" class="form-control mb-3" name="kd_laporan" placeholder="Kosongkan Saja!">
                                    </div> -->
                            <label for="">Jam</label>
                            <input type="time" id="" name="jam" placeholder="" class="form-control" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="" class="form-label">Unit / Ins. /Bagian</label>
                            <select class="custom-select" name="layanan" required>
                                <option selected>--Choose--</option>
                                <option value="IGD">IGD</option>
                                <option value="Radiologi">Radiologi</option>
                                <option value="Laboratorium">Laboratorium</option>
                                <option value="RJ Penyakit Dalam">RJ Penyakit Dalam</option>
                                <option value="RJ Syaraf">RJ Syaraf</option>
                                <option value="RJ Bedah">RJ Bedah</option>
                                <option value="RJ Anak">RJ Anak</option>
                                <option value="RJ Poli Umum">RJ Poli Umum</option>
                                <option value="RJ Obsgyn">RJ Obsgyn</option>
                                <option value="RJ Gigi">RJ Gigi</option>
                                <option value="RJ Imunisasi/KIA">RJ Imunisasi/KIA</option>
                                <option value="VK">VK</option>
                                <option value="Rekam Medis">Rekam Medis</option>
                                <option value="Gizi">Gizi</option>
                                <option value="Hemodialisa">Hemodialisa</option>
                                <option value="Fisioterapi">Fisioterapi</option>
                                <option value="Adm. BPJS">Adm. BPJS</option>
                                <option value="IBS">IBS</option>
                                <option value="Keuangan">Keuangan</option>
                                <option value="Farmasi">Farmasi</option>
                                <option value="IT">IT</option>
                                <option value="Sanitasi">Sanitasi</option>
                                <option value="R. Jenazah">R. Jenazah</option>
                                <option value="Bangsal Teratai/Isolasi">Bangsal Teratai/Isolasi</option>
                                <option value="Bangsal Krisan">Bangsal Krisan</option>
                                <option value="Bangsal Matahari">Bangsal Matahari</option>
                                <option value="Bangsal Lili">Bangsal Lili</option>
                                <option value="Bangsal Anyelir">Bangsal Anyelir</option>
                                <option value="Kesekretariatan">Kesekretariatan</option>
                                <option value="ICU / HCU">ICU / HCU</option>
                                <option value="Security">Security</option>
                                <option value="Umum">Umum</option>

                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Nama Barang</label>
                            <textarea class="form-control" name="nm_brg" id="" rows="3" required="Silahkan lengkapi dulu!" placeholder="Tuliskan Nama Barang"></textarea>
                        </div>
                        <!-- <div class="f-group">
                            <label for="">Modul / Menu di EMR</label>
                            <input type="text" class="form-control" name="modul" required="Silahkan lengkapi dulu!">
                        </div> -->
                         <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Deskripsi Kerusakan</label>
                            <textarea class="form-control" name="jenis_kerusakan" id="" rows="4" required="Silahkan lengkapi dulu!" placeholder="Tuliskan Jenis Kerusakan"></textarea>
                        </div>

                        <div class="mb-3 mt-3">
                            <!-- <label for="alamat" class="form-label">Jenis/Tipe </label> -->
                            <label for="alamat" class="form-label">Lokasi Ruangan</label>
                            <textarea class="form-control" name="jenis_tipe" id="" rows="2" placeholder="Tuliskan Lokasi Ruangan"></textarea>
                        </div>

                        <div class="mb-3 mt-3">
                            <!-- <label for="alamat" class="form-label">Keterangan</label> -->
                            <label for="alamat" class="form-label">Kondisi Ruangan</label>
                            <textarea class="form-control" name="keterangan" id="" rows="3" required="Silahkan lengkapi dulu!" placeholder="Tuliskan Kondisi Ruangan"></textarea>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Pelapor</label>
                            <input type="text" class="form-control" name="pelapor" placeholder="Tuliskan Nama Anda">
                        </div>
                        <input type="hidden" class="form-control" name="status" value="Menunggu Respon">
                        <input type="hidden" class="form-control" name="jam_respon" value="00:00">
                        <input type="hidden" class="form-control" name="jenis_kerusakan2" value="*">
                        <input type="hidden" class="form-control" name="identifikasi" value="*">
                        <input type="hidden" class="form-control" name="rtl" value="*">
                        <input type="hidden" class="form-control" name="target" value="*">
                        <input type="hidden" class="form-control" name="selesai" value="*">
                        <input type="hidden" class="form-control" name="petugas" value="*">
                        <input type="hidden" class="form-control" name="biaya" value="*">
                        <input type="hidden" class="form-control" name="ket" value="*">
                        <input type="hidden" class="form-control" name="result" value="">

                        <!-- <input type="hidden" class="form-control" name="status" value="Menunggu Respon"> -->

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                            <button type="sumbit" name="save" class="btn btn-success btn btn-primary btn-sm">Submit &nbsp;<i class="fa fa-paper-plane"></i> </button>
                            <!-- <button type="submit" name="update" class="btn btn-warning btn btn-primary btn-sm">Update</button> -->
                            <button type="reset" class="btn btn-warning btn btn-primary btn-sm">Reset&nbsp;<i class="fa fa-times"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- <div class="text-danger"><i><small><small>*Sistem masih dalam tahap Trial & Error <b>(BETA)</b></small></small></i></div> -->
    <div class="text-danger"><i><small><small>*Apabila Menemukan Error / Kendala Teknis Mohon Hubungi IT-RSNR | Phone(118)</small></small></i></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php include 'template/footer.php'; ?>


    <script src="dashboard/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="dashboard/plugins/jszip/jszip.min.js"></script>
    <script src="dashboard/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="dashboard/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="dashboard/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="dashboard/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dashboard/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
