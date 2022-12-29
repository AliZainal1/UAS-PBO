<?php 
      include 'koneksi.php';

    if(isset($_POST['aksi'])){
       if($_POST['aksi'] == "add"){

          $nim = $_POST['nim'];
          $nama_mhs = $_POST['nama_mhs'];
          $jenis_kelamin = $_POST['jenis_kelamin'];
          $alamat_mhs = $_POST['alamat_mhs'];
          $prodi_mhs = $_POST['prodi_mhs'];
          $foto = "img5.jpg";

          $query = "INSERT INTO tb_mahasiswa VALUES(null, '$nim', '$nama_mhs', '$jenis_kelamin', '$alamat_mhs', '$prodi_mhs', '$foto')";
          $sql = mysqli_query($conn, $query);

          if($sql)
          {
            echo "Data Berhasil Ditambahkan 
            <a href='index.php'>[Home]</a>";
          } else 
          {
            echo $query; 
          }

          //echo $nim." | ".$nama_mhs." | ".$jenis_kelamin." | ".$alamat." | ".$prodi." | ".$foto;

         
       	//echo "<br>Tambah Data <a href='index.php'>[Home]</a>";
    } else if($_POST['aksi'] == "edit"){
       	echo "Edit Data <a href='index.php'>[Home]</a>";
       }

   }

   if(isset($_GET['hapus'])){
   	echo "Hapus Data <a href='index.php'>[Home]</a>";
   }
?>