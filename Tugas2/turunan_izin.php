<?php
// Meng-include file koneksi.php untuk koneksi ke database
include ('koneksi.php');
?>

<?php

// Definisi kelas Direktur yang mewarisi kelas Surat
class Direktur extends Surat{
    // Konstruktor untuk kelas Direktur
    public function __construct(){
        // Memanggil konstruktor dari kelas induk (Surat)
        parent:: __construct();
    }
    // Fungsi untuk mengambil data permohonan izin dengan jabatan 'direktur'
    public function izinSurat() {

        // Query SQL untuk mengambil data dari tabel permohonan_izin di mana jabatan adalah 'direktur'
        $result="SELECT * FROM permohonan_izin WHERE jabatan = 'direktur'";
        // Mengeksekusi query dan mengembalikan hasilnya
	return $this->conn->query($result);

    }
}
// Membuat objek dari kelas Direktur
$direktur1 = new Direktur();
// Memanggil fungsi izinSurat dan menyimpan hasilnya dalam variabel $a
$a = $direktur1->izinSurat();
?>