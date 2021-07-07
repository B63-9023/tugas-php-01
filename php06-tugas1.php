<?php 
	// menu1
	$ayamgoreng = 13000;
	$ayambakar = 15000;
	$ayamsayur = 13000;
	$tempegoreng = 1000;
	$tahugoreng = 1000;
	$soto = 3000;
	$nasiputih = 5000;
	$esteh = 4000;
	$estebu = 5000;
	// menu2
	$cireng = 1000;
	$esduren = 15000;
	$esmilo = 20000;
	$esteh = 5000;
	$piscok = 1000;
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tugas PHP 1 - Niomic</title>
	<style>

	</style>
</head>
<body>
	<!-- TUGAS PAGE 1 -->
	<h1>Daftar Menu</h1>
	<table>
		<tr>
			<td><li>Ayam Goreng</li></td>
			<td>= Rp. <?php echo $ayamgoreng ?></td>
		</tr>
		<tr>
			<td><li>Ayam Bakar</li></td>
			<td>= Rp. <?php echo $ayambakar ?></td>
		</tr>
		<tr>
			<td><li>Ayam Sayur</li></td>
			<td>= Rp. <?php echo $ayamsayur ?></td>
		</tr>
		<tr>
			<td><li>Tempe Goreng</li></td>
			<td>= Rp. <?php echo $tempegoreng ?></td>
		</tr>
		<tr>
			<td><li>Tahu Goreng</li></td>
			<td>= Rp. <?php echo $tahugoreng ?></td>
		</tr>
		<tr>
			<td><li>Soto</li></td>
			<td>= Rp. <?php echo $soto ?></td>
		</tr>
		<tr>
			<td><li>Nasi Putih</li></td>
			<td>= Rp. <?php echo $nasiputih ?></td>
		</tr>
		<tr>
			<td><li>Es Teh</li></td>
			<td>= Rp. <?php echo $esteh ?></td>
		</tr>
		<tr>
			<td><li>Es Tebu</li></td>
			<td>= Rp. <?php echo $estebu ?></td>
		</tr>
	</table>
	<br>
	<!-- TUGAS PAGE 2 -->
	<h1>DAFTAR MENU</h1>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Menu</th>
			<th>Harga</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Cireng</td>
			<td><?php echo $cireng ?></td>
		</tr>
		<tr>
			<td>2</td>
			<td>Es Duren</td>
			<td><?php echo $esduren ?></td>
		</tr>
		<tr>
			<td>3</td>
			<td>Es Milo</td>
			<td><?php echo $esduren ?></td>
		</tr>
		<tr>
			<td>4</td>
			<td>Es Teh</td>
			<td><?php echo $esduren ?></td>
		</tr>
		<tr>
			<td>5</td>
			<td>Piscok</td>
			<td><?php echo $esduren ?></td>
		</tr>
	</table>
</body>
</html>


