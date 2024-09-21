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
// Buat instance dari kelas Surat yang menangani operasi terkait 'Surat' (surat tugas).
	$mysqli = new Surat();
	
?>

<?php
// Sertakan navbar untuk halaman web.
include 'navbar.php';
?>
 
 <!-- Buat tabel untuk menampilkan data yang diambil dari database -->
<table class="table table-hover">
 <thead>
	<tr>
    <th>nomor</th>
		<th>SURAT TUGAS ID</th>
		<th>NOMOR</th>
        <th>NAMA DOSEN</th>
		<th>TANGGAL SURAT TUGAS</th>
		<th>TUJUAN</th>
    

	    <th>TRANSPORTASI</th>
        <th>KEPERLUAN</th>
		<th>DOSEN ID</th>
    </tr>
 </thead>
<tbody>
							<?php $no=1; ?>
								<?php foreach ($mysqli->bacaSurat() as $show) { ?>
									<tr>
										<td><?php echo $no++; ?></td> <!-- Tampilkan nomor urut -->
										<td><?php echo $show['surat_tugas_id'] ?></td> <!-- Tampilkan ID Surat Tugas -->
										<td><?php echo $show['nomor'] ?></td> <!-- Tampilkan nomor surat -->
										<td><?php echo $show['nama_dsn'] ?></td> <!-- Tampilkan nama dosen -->
										<td><?php echo $show['tgl_surat_tugas'] ?></td> <!-- Tampilkan tanggal surat tugas -->
										<td><?php echo $show['tujuan'] ?></td> <!-- Tampilkan tujuan -->
                                        <td><?php echo $show['transportasi'] ?></td> <!-- Tampilkan transportasi -->
										<td><?php echo $show['keperluan'] ?></td> <!-- Tampilkan keperluan -->
										<td><?php echo $show['dosen_id'] ?></td> <!-- Tampilkan ID dosen -->
										<td>
									</tr>
								<?php } // Akhir dari loop foreach  ?>
						</tbody>
					</table>
</html>