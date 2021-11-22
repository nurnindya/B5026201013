<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Absen</h3>

	<a href="/absen/nambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>
			<td>{{ $a->a_ID }}</td>
			<td>{{ $a->a_IDPegawai }}</td>
			<td>{{ $a->a_tanggal }}</td>
			<td>{{ $a->a_status }}</td>
			<td>
				<a href="/absen/ngedit/{{ $a->a_ID }}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->a_ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>
