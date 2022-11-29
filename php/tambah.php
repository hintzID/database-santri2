<?php

require 'functions.php';

if (isset($_POST["submit"])){

   if (tambah($_POST) > 0){

    echo "

    <script>
      alert('data berhasil ditambahkan!');
      document.location.href = 'index.php';
    </script>
    
    ";

   } else {

    echo "
    
    <script>
      alert('data gagal ditambahkan!');
      document.location.href = 'index.php';
    </script>
  
  ";

   }

  
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>FORM PENDAFTARAN SANTRI</title>
    </head>
    <body>
        <h1>FORM PENDAFTARAN SANTRI</h1>

        <form action="" method="post">
            
                
                    <label for="nama">Nama</label><br>
                    <input type="text" name="nama" id="nama">
                
                <br>
                
                    <label for="alamat">Alamat</label><br>
                    <input type="text" name="alamat" id="alamat">
                
                <br>
                
                    <label for="nomer_handphone">Nomer Handphone</label><br>
                    <input type="text" name="nomer_handphone" id="nomer_handphone">
                
                <br>
                
                    <label for="tanggal_lahir">Tanggal Lahir</label><br>
                    <input type="text" name="tanggal_lahir" id="tanggal_lahir">
                
                <br>
                
                    <label for="alasan_masuk_pondok">Alasan Masuk Pondok</label><br>
                    <input type="text" name="alasan_masuk_pondok" id="alasan_masuk_pondok">
               
                <br><br>
                
                    <button type="submit" name="submit">DAFTAR</button>
                
               
            

        </form>

    </body>
</html>