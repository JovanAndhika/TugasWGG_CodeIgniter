<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$title?> </title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?=site_url('kelas')?>">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="<?=site_url('kelas/tambah')?>">Tambah Data</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<style>
  .bg-body-primary{
    background-color: blue;
  }

  .navbar a.active{
    color: yellow!important;
  }

  .navbar a{
    color: #fff;
  }
</style>


<div class="container my-5">
  <h1>Tambah Kelas</h1>

  <?php 
  $error = session()->has('error_val');
  $error_val = session()->getFlashdata('error_val');
  
    if(session()->has('msg_success'))
      echo '<div class="alert alert-success">'.session()->getFlashdata('msg_success').'</div>';
  ?>

  <div class="mt-4 mb-3 col-md-5">

        <form method="post">
        <label class="form-label">NRP</label>
        <input type ="text" value="<?=old('nrp')?>" name="nrp" placeholder="Masukkan NRP" class="form-control<?=$error && !empty($error_val['nrp']) ? ' is-invalid' : ''?>">

          <?php if ($error && !empty($error_val['nrp'])): ?>
                <div class = "invalid-feedback">
                  <?=$error_val['nrp']?>
                </div>
          <?php  endif ?>
          </br>

        <label class="form-label">Nama</label>
        <input type ="text" value="<?=old('nama')?>" name="nama" placeholder="Masukkan Nama" class="form-control<?=$error && !empty($error_val['nama']) ? ' is-invalid' : ''?>">

          <?php if ($error && !empty($error_val['nama'])): ?>
                  <div class = "invalid-feedback">
                    <?=$error_val['nama']?>
                  </div>
          <?php  endif ?>
          </br>

        <label class="form-label">Nilai</label>
        <input type ="text" value="<?=old('nilai')?>" name="nilai" placeholder="Masukkan Nilai" class="form-control<?=$error && !empty($error_val['nilai']) ? ' is-invalid' : ''?>">

          <?php if ($error && !empty($error_val['nilai'])): ?>
                  <div class = "invalid-feedback">
                    <?=$error_val['nilai']?>
                  </div>
          <?php  endif ?>
          </br>

        <button class="btn btn-primary" name="submit" value="ya">Tambah Kelas</button>
        </form>
  </div>

</div>

</body>
</html>