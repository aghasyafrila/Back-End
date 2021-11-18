<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Data Siswa</title>
</head>
<body>
	<nav>
		<a href="<?= base_url('tambah_siswa') ?>">Tambah Data Siswa</a>
	</nav>
	<table width='100%' border='1' cellpadding='5' cellspacing='0'>
		<caption>
			<h1>Data Siswa</h1>
		</caption>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Siswa</th>
				<th>L/P</th>
				<th>Kelas</th>
				<th>Tanggal Lahir</th>
				<th>Alamat</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $no=1; foreach($data as $dt): ?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $dt->nama_siswa ?></td>
				<td><?= $dt->jk ?></td>
				<td><?= $dt->kelas ?></td>
				<td><?= $dt->tanggal_lahir ?></td>
				<td><?= $dt->alamat ?></td>
				<td>
					<a href="<?= base_url('hapus/'.$dt->id) ?>">Hapus</a> | <a href="<?= base_url('edit/'.$dt->id) ?>">Edit</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>