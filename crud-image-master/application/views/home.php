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

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav nav">
      <li class=""><a href="<?=base_url()?>index.php/home/index">HOME</a></li>
      <li class=""><a href="#">GALERI</a></li>
      <li class=""><a href="#">RUANG ADMIN</a></li>
      <li class=""><a href="#">ABOUT</a></li>
     <li class=""><a href="#">LOGOUT</a></li>
    </ul>

    <ul class="nav navbar-right">

    </ul>
  </div>

  <body>

    <div class="container" style="text-align: center;">
      <h1>GALERI DIII TI UNS PSDKU &nbsp; </h1>
  </div>

  <div class="container">
  <a style="text-align: right;" href="<?=base_url()?>index.php/home/tambah" class="btn btn-info">Tambah Data</a>
    <hr>
  </div>

    <div class="container" style="text-align: justify-all;">
 
      <div class="row">
      <div class="col-md-12">
      <form action="<?=base_url()?>index.php/home/index" method="get">
        <input type="text" name="cari" class="form-control" placeholder="Search">
        <input type="submit" value="Search" class=" form-control btn btn-success">
      </form>
    </div>
  </div>
  <br>
      <div class="row">

        <?php foreach ($data as $data): ?>
          <div class="col-sm-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="<?=base_url()?>assets/picture/<?=$data->foto?>" style="max-width:115%; max-height:100%; height:180px" alt="foto">
            </a>
            <div class="caption">
              <h3><?php echo $data->name?></h3>
              <p> <?php echo $data->alamat ?></p>
              <p>
                <a href="<?=base_url()?>index.php/home/edit/<?=$data->id?>" class="btn btn-warning" role="button">Edit</a>
                <a href="<?=base_url()?>index.php/home/deletedata/<?=$data->id?>/<?=$data->foto?>" class="btn btn-danger" role="button">Hapus</a>
              </p>
            </div>
          </div>
        <?php endforeach; ?>


      </div>
    </div>
    <div class="container">
      <?php echo $pagination ?>
    </div>

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
