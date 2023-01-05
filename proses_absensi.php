<?php
include("config.php");

//cek apakah tombol absen sudah diklik atau belum?
if(isset($_POST['absensi'])){
    
    //ambil data dari formulir
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $jurusan = $_POST['jurusan'];
    $tanggal = $_POST['tanggal'];
    $bulan = $_POST['bulan'];

    //buat query
    $sql = "INSERT INTO absensi_mahasiswa (nama, npm, jurusan, tanggal)
    VALUE ('$nama', '$npm', '$jurusan', '$tanggal')";
    $query = mysqli_query($db, $sql);

    //apakah query simpan berhasil?
    if($query) {
        //kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    }else {
        //kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

}else {
    die("Akses dilarang...");
}
?>