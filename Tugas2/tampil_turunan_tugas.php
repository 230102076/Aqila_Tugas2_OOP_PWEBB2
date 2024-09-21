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
include ('turunan_tugas.php');
?>

<?php 
	$mysqli = new Surat();
	
?>
<?php
include 'navbar.php';
?>
 
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
								<?php foreach ($b as $show) { ?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $show['surat_tugas_id'] ?></td>
										<td><?php echo $show['nomor'] ?></td>
										<td><?php echo $show['nama_dsn'] ?></td>
										<td><?php echo $show['tgl_surat_tugas'] ?></td>
										<td><?php echo $show['tujuan'] ?></td>
                                        <td><?php echo $show['transportasi'] ?></td>
										<td><?php echo $show['keperluan'] ?></td>
										<td><?php echo $show['dosen_id'] ?></td>
										<td>
									</tr>
								<?php } ?>
						</tbody>
					</table>
</html>