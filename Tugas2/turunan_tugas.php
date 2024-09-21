<?php
// Meng-include file koneksi.php untuk koneksi ke database
include ('koneksi.php');
?>

<?php
// Definisi kelas Transportasi yang mewarisi kelas Surat
class Transportasi extends Surat{
    // Konstruktor untuk kelas Transportasi
    public function __construct(){
        // Memanggil konstruktor dari kelas induk (Surat)
        parent:: __construct();
    }

    // Fungsi untuk membaca surat tugas dengan transportasi 'mobil'
    public function bacaSurat() {
         // Query SQL untuk mengambil data dari tabel surat_tugas di mana transportasi adalah 'mobil'
        $result="SELECT * FROM surat_tugas WHERE transportasi = 'mobil'";
        // Mengeksekusi query dan mengembalikan hasilnya
	return $this->conn->query($result);

    }
}
// Membuat objek dari kelas Transportasi
$transportasi1 = new Transportasi();
// Memanggil fungsi bacaSurat dan menyimpan hasilnya dalam variabel $b
$b = $transportasi1->bacaSurat();
?>