<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->a_ID }}"> <br/>
		ID <input type="number" required="required" name="ID" value="{{ $a->a_ID }}"> <br/>
		ID Pegawai <input type="number" required="required" name="IDPegawai" value="{{ $a->a_IDPegawai }}"> <br/>
		Tanggal <input type="datetime" required="required" name="tanggal" value="{{ $a->a_tanggal }}"> <br/>
		Status <textarea required="required" name="status">{{ $a->a_status }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>


