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
include ('turunan_izin.php');
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
							<?php $no=1; ?>
								<?php foreach ($a as $show) { ?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $show['izin_id'] ?></td>
										<td><?php echo $show['nama_dsn'] ?></td>
										<td><?php echo $show['nip'] ?></td>
										<td><?php echo $show['pangkat_jabatan'] ?></td>
                                        <td><?php echo $show['jabatan'] ?></td>
										<td><?php echo $show['unit_kerja'] ?></td>
										<td><?php echo $show['dosen_id'] ?></td>
										<td>
									</tr>
								<?php } ?>
					</table>

						</tbody>
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
					</html>