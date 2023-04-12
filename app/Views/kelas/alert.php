<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Alert </title>


    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
</head>

<body>
    <div class="text-center mt-5">

    </div>

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

</body>
</html>