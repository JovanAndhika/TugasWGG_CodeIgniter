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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>

        <?php if (session()->getFlashdata('swal_icon')){ ?>
            Swal.fire({
                icon: '<?php echo session()->getFlashdata('swal_icon') ?>',
                title: '<?php echo session()->getFlashdata('swal_title') ?>',
                text: '<?php echo session()->getFlashdata('swal_text') ?>',
                showConfirmButton: '<?php echo session()->getFlashdata('swal_showConfirmButton') ?>',
                timer: '<?php echo session()->getFlashdata('swal_timer')?>'
            })

        <?php } ?>
        
  </script>
  
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=site_url('kelas')?>">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?=site_url('kelas/tambah')?>">Tambah Data</a>
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
    <h1>Kelas</h1>

    <?php if(session()->has('msg_success')): ?>
      <div class="alert alert-success">
        <?=session()->getFlashdata('msg_success')?>
      </div>

    <?php elseif(session()->has('msg_error')): ?>
      <div class="alert alert-danger">
        <?=session()->getFlashdata('msg_error')?>
      </div>

    <?php endif ?>
    

  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Pass</th>
        <th>Aksi</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach($data_kelas as $kelas){ ?>

        <tr>
          <td></td>
          <td> <?=htmlspecialchars($kelas->NRP)?> </td>
          <td> <?=htmlspecialchars($kelas->Nama)?> </td>
          <td> <?=htmlspecialchars($kelas->Nilai)?> </td>

          <td> 

            <?= form_open(site_url('kelas/hapus'))?>
              <input type="hidden" name="nrp_delete" value="<?=htmlspecialchars($kelas->NRP)?>">
              <input type="hidden" name="_method" value="DELETE">

              <a href="<?=site_url('kelas/sunting/'.$kelas->NRP)?>" class="btn btn-secondary btn-sm">Edit</a>
              <button name="hapus_data" class="btn btn-danger btn-sm" value="ya">Hapus</button>
            <?=form_close()?>
            
          </td>
        </tr>

      <?php } ?>
     
    
    </tbody>
  </table>
  
</div>
</body>
</html>