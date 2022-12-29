<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.bundle.min.js" ></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

	<title>belajar_PBO</title>
</head>
<body>
    <nav class="navbar bg-light mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    	CRUD - BS5
      </a>
    </div>
  </nav>
  <div class="container">
<form method="POST" action="proses.php">
      <div class="mb-3 row">
    <label for="NIM" class="col-sm-2 col-form-label">
    NIM
  </label>
    <div class="col-sm-10">
      <input type="text" name="nim" class="form-control" id="NIM" placeholder="Contoh : 112266">
    </div>
  </div>
    <div class="mb-3 row">
    <label for="Nama Mahasiswa" class="col-sm-2 col-form-label">
    Nama Mahasiswa
  </label>
    <div class="col-sm-10">
      <input type="text" name="nama_mhs" class="form-control" id="Nama Mahasiswa" placeholder="Contoh : Muhammad Sami">
    </div>
  </div>
   <div class="mb-3 row">
    <label for="Jenis Kelamin" class="col-sm-2 col-form-label">
    Jenis Kelamin
  </label>
    <div class="col-sm-10">
        <select id= "Jenis Kelamin" name="jenis_kelamin"class="form-select" 
  option selected>Opsi</option>
  <option value="1">Laki-Laki</option>
  <option value="2">Perempuan</option>
  </select>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="Alamat" class="col-sm-2 col-form-label">
    Alamat Lengkap
  </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="Alamat" name="alamat_mhs" placeholder="Contoh : Imam Bonjol 23">
    </div>

  <div class="mb-3 row mt-3">
    <label for="Prodi" class="col-sm-2 col-form-label">
    Prodi 
  </label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" name="prodi_mhs" id="Prodi" placeholder="Contoh : Manajemen">
    </div>
  </div>
  <div class="mb-3">
  <label for="Foto" class="form-label">Foto Mahasiswa</label>
  <input class="form-control" type="file" name="foto" id="Foto">
  </div>

  <div class="mb-3 row mt-2">
    <div class="col">
        <?php
        if(isset($_GET['ubah'])){
        ?>
           <button type="submit" name="aksi" value="edit" class="btn btn-primary">
              <i class="fa fa-floppy-o" aria-hidden="true"></i>
             Simpan Perubahan
           </button>
    <?php
         }  else { 
    ?> 
    <button type="submit" name="aksi" value="add" class="btn btn-primary">
              <i class="fa fa-floppy-o" aria-hidden="true"></i>
             Tambahkan
           </button>
           <?php
           }
       ?>
  <a href= "index.php" type="button" class="btn btn-danger">
    <i class="fa fa-reply" aria-hidden="true"></i>
    Batal
  </a>
    </div>
<form>
    </div>
</body>
</html>