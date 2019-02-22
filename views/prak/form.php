<html>
	<head>
		<title>Data Paket </title>
	</head>
	<body><center>
		<h1>Data Paket</h1>
		
		<a href='<?php echo base_url("prak/tambah"); ?>'>Create New Data</a><br><br>

		<table border="1" cellpadding="7">
			<tr>
				<th>ID</th>
				<th>Tanggal Datang</th>
				<th>Sasaran (Penghuni) </th>
				<th>Penerima (Karyawan)</th>
				<th>Isi Paket</th>
				<th>Tanggal Ambil</th>
				<th colspan="2">Aksi</th>
			</tr>
		</center>
			<?php
			if( ! empty($paket)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
				foreach($paket as $data){
					echo "<tr>
					<td>".$data->id."</td>
					<td>".$data->tanggal_datang."</td>
					<td>".$data->sasaran."</td>
					<td>".$data->penerima."</td>
					<td>".$data->isi_paket."</td>
					<td>".$data->tanggal_ambil."</td>
					<td><a href='".base_url("prak/ubah/".$data->id)."'>Ubah</a></td>
					<td><a href='".base_url("prak/hapus/".$data->id)."'>Hapus</a></td>
					</tr>";
				}
			}else{ // Jika data siswa kosong
				echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
			}
			?>
		</table>
	</body>
</html>
