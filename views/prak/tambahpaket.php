<html>
	<head>
		<title>Create</title>
	</head>
	<body>
		<h1>Masukan Data</h1>
		
		<div style="color: red;"><?php echo validation_errors(); ?></div>

		<?php echo form_open("prak/tambah"); ?>
			<table cellpadding="8">
				<tr>
					<td>ID</td>
					<td><input type="text" name="input_id" value="<?php echo set_value('input_id'); ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Datang</td>
					<td><input type="text" name="input_tanggaldatang" value="<?php echo set_value('input_tanggaldatang'); ?>"></td>
				</tr>
				<tr>
					<td>Sasaran (Penghuni) </td>
					<td><input type="text" name="input_sasaran" value="<?php echo set_value('input_sasaran'); ?>"></td>
				</tr>
				<tr>
					<td>Penerima (Karyawan) </td>
					<td><input type="text" name="input_penerima" value="<?php echo set_value('input_penerima'); ?>"></td>
				</tr>
				<tr>
					<td>Isi Paket</td>
					<td><input type="text" name="input_isipaket"><?php echo set_value('input_isipaket'); ?></textarea></td>
				</tr>
				<tr>
					<td>Tanggal Ambil </td>
					<td><input type="text" name="input_tanggalambil" value="<?php echo set_value('input_tanggalambil'); ?>"></td>
				</tr>
			</table>
				
			<hr>
			<input type="submit" name="submit" value="Simpan">
			<a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
		<?php echo form_close(); ?>
	</body>
</html>
