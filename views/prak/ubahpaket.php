<html>
	<head>
		<title>Ubah Data</title>
	</head>
	<body>
		<h1>Ubah Data</h1>

		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("prak/ubah/".$paket->id); ?>
			<table cellpadding="8">
				
				<tr>
					<td>Tanggal Datang</td>
					<td><input type="text" name="input_tanggaldatang" value="<?php echo set_value('input_tanggaldatang', $paket->tanggal_datang); ?>"></td>
				</tr>
				<tr>
					<td>Sasaran (Penghuni)</td>
					<td><input type="text" name="input_sasaran" value="<?php echo set_value('input_sasaran', $paket->sasaran); ?>"></td>
				</tr>
				<tr>
					<td>Penerima (Karyawan) </td>
					<td><input type="text" name="input_penerima" value="<?php echo set_value('input_penerima', $paket->penerima); ?>"></td>
				</tr>
				<tr>
					<td>Isi Paket</td>
					<td><textarea name="input_isipaket"><?php echo set_value('input_isipaket', $paket->isi_paket); ?></textarea></td>
				</tr>
				<tr>
					<td>Tanggal Ambil</td>
					<td><textarea name="input_tanggalambil"><?php echo set_value('input_tanggalambil', $paket->tanggal_ambil); ?></textarea></td>
				</tr>
			</table>
				
			<hr>
			<input type="submit" name="submit" value="Ubah">
			<a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>