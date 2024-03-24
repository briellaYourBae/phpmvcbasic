<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="http://localhost/basicmvc/public/sweetalert/sweetalert2.min.css">
  <!-- <link rel="stylesheet" href="http://localhost/basicmvc/public/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
  <link rel="icon" type="image/jpg" href="public/asset/MYproduct.jpg"/>

  <title><?= $data['judul'] ?></title>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand mb-0 h1" href="<?= BASEURL; ?>">KAMPUS MVC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav nav-underline">
          <li class="nav-item">
            <a href="<?= BASEURL; ?>" class="nav-item nav-link active">Home <span class="sr-only" (current)>
              </span></a>
          </li>
          <li class="nav-item">
            <a href="<?= BASEURL; ?>/mahasiswa" class="nav-item nav-link">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a href="<?= BASEURL; ?>/about" class="nav-item nav-link">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>