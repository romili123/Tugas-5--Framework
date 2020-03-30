<!DOCTYPE html>
<html>
<head>
	<title>CRUD DATA PEGAWAI</title>
</head>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<h1>Data Pegawai</h1>

	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		
	<form>
  <div class="form-group">
    <label for="nama">nama</label>
    <input type="text" name="nama" required="required">
  </div>
  <div class="form-group">
    <label for="jabatan">jabatan</label>
    <input type="text" name="jabatan" required="required">
  </div>
  <div class="form-group">
    <label for="nama">umur</label>
    <input type="text" name="umur" required="required">
  </div>
  <div class="form-group">
    <label for="nama">alamat</label>
    <input type="text-area" name="alamat" required="required">
  </div>
  
  <button type="submit" class="btn btn-primary">Simpan Data</button>
	</form>
		<!--Nama <input type="text" name="nama" required="required"> <br/></br>
		Jabatan <input type="text" name="jabatan" required="required"> <br/></br>
		Umur <input type="number" name="umur" required="required"> <br/></br>
		Alamat <textarea name="alamat" required="required"></textarea> <br/><br>
		<input type="submit" value="Simpan Data">
	</form>-->
	
</body>
</html>