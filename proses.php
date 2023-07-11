<?php
include "conn.php";

if (isset($_POST['save'])) {

    $tanggal = $_POST['tgl'];
    $jam = $_POST['jam'];
    $layanan = $_POST['layanan'];
    $nm_brg = $_POST['nm_brg'];
    $jenis = $_POST['jenis_tipe'];
    $kerusakan = $_POST['jenis_kerusakan'];
    $ket = $_POST['keterangan'];
    $pelapor = $_POST['pelapor'];
    $status = $_POST['status'];
    // $result = $_POST['result'];
    $jr = $_POST['jam_respon'];
    $jenis_kerusakan2 = $_POST['jenis_kerusakan2'];
    $iden = $_POST['identifikasi'];
    $rtl = $_POST['rtl'];
    $target = $_POST['target'];
    $selesai = $_POST['selesai'];
    $petugas = $_POST['petugas'];
    $biaya = $_POST['biaya'];
    $ket2 = $_POST['ket'];

    $ketTanggal = '-Tanggal : ';
    $ketJam = '-Pukul : ';
    $ketLayanan = '-Layanan : ';
    $ketNmBrg = '-Nama Barang : ';
    $ketKerusakan = '-Deskripsi Kerusakan : ';
    $LokRuangan = '-Lokasi Ruangan : ';
    $ketKet = '-Kondisi Ruangan : ';
    $ketPelapor = '-Pelapor : ';

    // $text = $_POST[''];

    $sql = "INSERT INTO order_perbaikan VALUES ('$tanggal','$jam','$layanan','$nm_brg','$jenis','$kerusakan','$ket','$pelapor','$status','$jr',
    '$jenis_kerusakan2','$iden','$rtl','$target','$selesai','$petugas','$biaya','$ket2')";

    $query = sqlsrv_query($conn, $sql);

    if ($query) {
        //redirect ke halaman index
        echo "<script> alert(
            'Sip,Kesimpen!',
            'Mantap Sekali',
            'success') </script>";
        // $apiToken = "5355839999:AAEBaeF-MOoF8ExnZJ1dcXJviVBdGxiTM0g"; //IT
        $apiToken = "5374566259:AAEmyKPOSSHH7rwNNJxfI0WCt-3aiD2SQZs"; //Lena 
        $data = [
            'chat_id' => '766716942', //lena
            // 'chat_id' => '539860841', //IT
            'text' => 'Laporan Order Perbaikan IPSRS,Komendan! Detail Laporan :' . PHP_EOL
                . $ketTanggal . $tanggal . PHP_EOL
                . $ketJam . $jam . PHP_EOL
                . $ketLayanan . $layanan . PHP_EOL
                . $ketNmBrg . $nm_brg . PHP_EOL
                . $ketKerusakan . $kerusakan . PHP_EOL
                . $LokRuangan . $jenis . PHP_EOL
                . $ketKet . $ket . PHP_EOL
                . $ketPelapor . $pelapor,
            'parse_mode' => 'html'
        ];
        // $context = stream_context_create(array('https' => array('header' => 'Connection: close\r\n')));
        $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
        echo "<script>
        window.location.href='index.php'
        </script>";
    } else {
        // die(print_r(sqlsrv_errors(), true));
        echo "<script> alert(
            'Gagal Submit! Mohon Hubungi IT-RSNR / call line phone 118')</script>";
    }
}
