<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buku Kenang</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font/glyphicons-halflings-regular.ttf">

  </head>
  <body>

    <div class="container" style="text-align: center;">
      <h1>Tambah Data Alumni</h1>
      <hr>
    </div>

<!-- KONTEN UTAMA -->
    <div class="container">
      <div class="row" >
        <div class="col-md-6">
        <form action="<?=base_url()?>index.php/home/insertdata" method="post" enctype="multipart/form-data">
          <label>Nama</label>
          <input type="text" name="name" value="" class="form-control">
          <label>Jenis Kelamin</label>
          <input type="text" name="gender" value="" class="form-control">
          <label>Alamat</label>
          <textarea name="alamat" rows="8" cols="80" class="form-control"></textarea>
          <label>Foto</label>
          <input type="file" name="fotopost" class="form-control"><br><br>

          <input type="submit" name="submit" value="Submit" class="btn btn-info">
        </form>
      </div>
      </div>
    </div>
<!-- END KONTEN UTAMA -->

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
