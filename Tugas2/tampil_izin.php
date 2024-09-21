<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


<?php
// Sertakan file koneksi database.
include ('koneksi.php');
?>

<?php 
// Buat instance dari kelas Surat yang menangani operasi terkait izin.
	$mysqli = new Surat();
	
?>

<?php
// Sertakan navbar untuk halaman web.
include 'navbar.php';
?>
 
 <!-- Buat tabel untuk menampilkan data izin yang diambil dari database -->
<table class="table table-hover">
 <thead>
	<tr>
    <th>nomor</th>
		<th>IZIN ID</th>
		<th>NAMA DOSEN</th>
        <th>NIP</th>
		<th>PANGKAT JABATAN</th>
		<th>JABATAN</th>
	    <th>UNIT KERJA</th>
		<th>DOSEN ID</th>
    </tr>
 </thead>
<tbody>
							<?php $no=1; // Inisialisasi penghitung untuk nomor urut ?>
								<?php foreach ($mysqli->izinSurat() as $show) {  // Loop melalui setiap record yang dikembalikan oleh metode izinSurat ?>
									<tr>
										<td><?php echo $no++; ?></td> <!-- Tampilkan nomor urut -->
										<td><?php echo $show['izin_id'] ?></td> <!-- Tampilkan ID izin -->
										<td><?php echo $show['nama_dsn'] ?></td> <!-- Tampilkan nama dosen -->
										<td><?php echo $show['nip'] ?></td> <!-- Tampilkan NIP -->
										<td><?php echo $show['pangkat_jabatan'] ?></td> <!-- Tampilkan pangkat jabatan -->
                                        <td><?php echo $show['jabatan'] ?></td> <!-- Tampilkan jabatan -->
										<td><?php echo $show['unit_kerja'] ?></td> <!-- Tampilkan unit kerja -->
										<td><?php echo $show['dosen_id'] ?></td> <!-- Tampilkan ID dosen -->
										<td>
									</tr>
								<?php } // Akhir dari loop foreach ?>
						</tbody>
					</table>