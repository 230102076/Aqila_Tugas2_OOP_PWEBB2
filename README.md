# TUGAS 2 
# Membuat View Berbasis OOP, dengan mengambil data dari database MySql

1. Buat database dan tabel
![db1](https://github.com/user-attachments/assets/8d932f03-caf4-4063-baf2-9b1e21b599ca)

![dbtable](https://github.com/user-attachments/assets/80def5ef-5b97-4f86-bea0-e5e31a5de75e)

- Pertama yaitu kita buat database di phpmyadmin dengan nama Surat, lalu membuat dua table yaitu permohonan_izin dan surat_tugas

  2. Buat file koneksi.php
- PROPERTI KONEKSI DATABASE dan PROPERTI OBJEK KONEKSI
![koneksi1](https://github.com/user-attachments/assets/4748710e-e3cc-4595-ab98-09006dc5a423)
Membuat class yang bernama Surat, danbuat properti untuk menyimpan info koneksi database, ada host, username, password, dan nama database yang disesuaikan dengan database yang telah dibuat

- KONSTRUKTOR UNTUK INISIALISASI KONEKSI
![koneksi2](https://github.com/user-attachments/assets/247b2dd7-a721-44ed-9735-c6d7a88b6a88)
Konstruktor ini untuk menginisialisasi koneksi ke database saat objek Surat dibuat. Jika koneksi itu gagal, maka echo "DATABASE TIDAK ADA" lalu eksekusi script berhenti.

- Metode untuk Mengambil Data dari Tabel permohonan_izin
  Metode izinSurat digunakan untuk mengambil semua data dari tabel permohonan_izin.
  Berikut langkah-langkah yang dilakukan:
Menjalankan query SQL untuk mengambil semua data dari tabel permohonan_izin.
Menyimpan hasil query dalam variabel $hasil.
Jika ada baris yang ditemukan ($hasil->num_rows > 0), data dari setiap baris disimpan dalam array result menggunakan fetch_assoc() yang lebih efisien untuk mengambil data dalam bentuk asosiatif.
Mengembalikan array result yang berisi data dari tabel permohonan_izin.

- Metode untuk Membaca Data dari Tabel surat_tugas
 Metode bacaSurat digunakan untuk mengambil semua data dari tabel surat_tugas.
Langkah-langkah yang dilakukan mirip dengan metode izinSurat:
Menjalankan query SQL untuk mengambil semua data dari tabel surat_tugas.
Menyimpan hasil query dalam variabel $hasil.
Jika ada baris yang ditemukan ($hasil->num_rows > 0), data dari setiap baris disimpan dalam array result menggunakan fetch_assoc().
Mengembalikan array result yang berisi data dari tabel surat_tugas.

3. Buat file tampil_izin.php
   - BUAT KODE HTML DAN PHP UNTUK MENAMPILKAN DATA IZIN
     Pembukaan dokumen HTML, bagian <head> mendefinisikan metadata dokumen, seperti karakter encoding, kompatibilitas dengan browser, dan viewport untuk responsivitas. Selain itu, Bootstrap CSS diimpor untuk memberikan gaya pada halaman.
     Sertakan file koneksi.php yang berisi logika untuk menghubungkan ke database. Dengan cara ini, kita dapat menggunakan koneksi database yang telah disiapkan dalam file tersebut.
   - Membuat instance dalam kelas surat
     Buat instance dari kelas Surat yang di dalamnya terdapat metode-metode untuk mengakses data dari database. Objek $mysqli ini nantinya akan digunakan untuk memanggil metode dalam kelas Surat.
   - Sertakan navbar
     Menyertakan file navbar.php yang berisi kode HTML untuk menampilkan navigasi pada halaman web.
   - Membuat Tabel untuk Menampilkan Data Izin
     Header tabel dengan delapan kolom yang sesuai dengan data izin dosen yang akan ditampilkan.
     Inisialisasi variabel $no dengan nilai 1 untuk nomor urut.
     Menggunakan perulangan foreach untuk iterasi setiap record yang dikembalikan oleh metode izinSurat dari objek $mysqli.
     Dalam setiap iterasi, data dari setiap record ditampilkan dalam baris tabel (<tr>). Setiap kolom (<td>) diisi dengan data yang sesuai dari array $show.
     
     ![nav2](https://github.com/user-attachments/assets/88999ed7-9f33-478d-9e93-08701761ee4f)

     4. Buat file tampil_tugas.php
        Isi dari kode tampil_tugas.php sama hal nya dengan tampil_izin.php, yang membedakan hanya nama kolom header nya dengan method nya saja
        
     ![nav1](https://github.com/user-attachments/assets/ec2073e8-e8e5-4349-ab7e-2e14418a6055)

     5. Buat turunan_izin.php untuk menerapkan inheritance / pewarisan
        - Meng-include File Koneksi
          Menyertakan file koneksi.php yang berisi kode untuk menghubungkan ke database. Dengan menyertakan file ini, koneksi ke database dapat digunakan dalam skrip.
          - Definisi Kelas Direktur
            Bagian ini mendefinisikan kelas Direktur yang merupakan turunan dari kelas Surat. Dengan kata lain, kelas Direktur mewarisi semua properti dan metode dari kelas Surat.
            Konstruktor dari kelas Direktur memanggil konstruktor dari kelas induknya (Surat) menggunakan parent::__construct(). Hal ini memastikan bahwa ketika objek Direktur dibuat, ia juga menginisialisasi koneksi ke database yang telah ditentukan dalam kelas Surat.
            - Metode izinSurat
              Metode izinSurat dalam kelas Direktur melakukan query SQL untuk mengambil semua data dari tabel permohonan_izin di mana kolom jabatan memiliki nilai 'direktur'. Metode ini kemudian mengeksekusi query tersebut menggunakan koneksi database ($this->conn) dan mengembalikan hasilnya.
              - Membuat Objek dan Mengambil Data
                Di bagian ini:
                1. Objek $direktur1 dibuat dari kelas Direktur.
                2. Metode izinSurat dari objek $direktur1 dipanggil untuk mengambil data permohonan izin yang memiliki jabatan 'direktur'. Hasil dari query tersebut disimpan dalam variabel $a.
                  ![nav4](https://github.com/user-attachments/assets/adbd2c4b-c777-40a7-acca-3160206a9b04)

 
                   6. Buat turunan_tugas.php untuk menerapkan inheritance / pewarisan
                  - Meng-include File Koneksi
                    Menyertakan file koneksi.php yang berisi kode untuk menghubungkan ke database. Dengan menyertakan file ini, koneksi ke database dapat digunakan dalam skrip.
                - Definisi Kelas Transportasi
                  Bagian ini mendefinisikan kelas Transportasi yang merupakan turunan dari kelas Surat. Dengan kata lain, kelas Transportasi mewarisi semua properti dan metode dari kelas Surat.
                  Konstruktor dari kelas Transportasi memanggil konstruktor dari kelas induknya (Surat) menggunakan parent::__construct(). Hal ini memastikan bahwa ketika objek Transportasi dibuat, ia juga menginisialisasi koneksi ke database yang telah ditentukan dalam kelas Surat.
                  - Metode bacaSurat
                  - Metode bacaSurat dalam kelas Transportasi melakukan query SQL untuk mengambil semua data dari tabel surat_tugas di mana kolom transportasi memiliki nilai 'mobil'. Metode ini kemudian mengeksekusi query tersebut menggunakan koneksi database ($this->conn) dan mengembalikan hasilnya
                  - Membuat Objek dan Mengambil Data
                    Di bagian ini:
1. Objek $transportasi1 dibuat dari kelas Transportasi.
2. Metode bacaSurat dari objek $transportasi1 dipanggil untuk mengambil data surat tugas yang memiliki jenis transportasi 'mobil'. Hasil dari query tersebut disimpan dalam variabel $b.
   ![nav3](https://github.com/user-attachments/assets/870c1e27-2d42-47c5-9a38-d404e901ebcd)

   7. Buat file navbar untuk memasukkan file / tampilan ke dalam navbar


     
     



