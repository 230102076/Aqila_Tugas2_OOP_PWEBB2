<?php 
    
    //Mendefinisikan kelas Surat
	class Surat {


    // Properti untuk menyimpan informasi koneksi database
		public $host = 'localhost'; // Host database
		public $name = 'root'; // Nama pengguna untuk database
		public $pass = ''; // Kata sandi untuk pengguna (dikosongkan)
		public $dbname = 'surat'; // Nama database yang digunakan
		
        // Properti untuk menyimpan objek koneksi
		public $mysqli;

        // Konstruktor untuk menginisialisasi koneksi ke database
		function __construct (){
    // Membuat koneksi baru menggunakan mysqli
		$this->conn = new mysqli($this->host, $this->name, $this->pass, $this->dbname);
    // Mengecek apakah koneksi berhasil
		if ($this->conn->connect_errno) {
			echo "DATABASE TIDAK ADA !  ";
			exit; // Menghentikan eksekusi script
		}

	}

    // Metode untuk mengambil data dari tabel permohonan_izin
    public function izinSurat() {
        $data = "SELECT * FROM permohonan_izin"; 
        $hasil = $this->conn->query($data); // Menggunakan $this->conn untuk query
 
        $result = []; // Inisialisasi array kosong untuk hasil
        if ($hasil->num_rows > 0) {
            while ($d = $hasil->fetch_assoc()) { // fetch_assoc lebih efisien
                $result[] = $d;
            }
        }
 
        return $result;
    }

    public function bacaSurat() {
        $data = "SELECT * FROM surat_tugas";
        $hasil = $this->conn->query($data); // Menggunakan $this->conn untuk query
 
        $result = []; // Inisialisasi array kosong untuk hasil
        if ($hasil->num_rows > 0){ // Mengecek apakah ada baris yang ditemukan
            while ($d = $hasil->fetch_assoc()) { // fetch_assoc lebih efisien
                $result[] = $d; // Menambahkan data ke array hasil
            }
        }
 
        return $result;
    }

}
?>