<?php
include 'config/koneksi.php';
include 'library/controller.php';

$tabel = 'tbl_user';
@$username = $_POST['user'];
@$password = $_POST['pass'];
@$akses = $_POST['akses'];

$go = new Controller();

if (isset($_POST['login'])) {
    $go->login($con, $tabel, $username, $password, $akses);
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <title>Login</title>
    <style>
        body{
            background-image: url(img/k.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
  </head>
  <body>
  <div class="container mt-4">
        <div class="card d-inline-flex p-2 bd-highlight position-absolute top-50 start-50 translate-middle" >
        <!-- <img src="img/k.jpg" height="200px"> -->
            <div class="card-body">
            <h3 class="card-title text-center">Silakan Login</h3>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username :</label>
                    <input type="text" name="user" class="form-control" id="exampleFormControlInput1" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password :</label>
                    <input type="password" name="pass" class="form-control" id="exampleFormControlInput1"required>
                </div>
                <div class="mb-3">
                    <label>Akses User :</label>
                    <select class="form-control input-lg" name="akses" value="akses" required>
                        <option value="" selected disabled>Pilih Akses</option>
                        <option>Admin</option>
                        <option>Manager</option>
                        <option>Kasir</option>
                    </select>
                </div>
                <div class="d-grid gap-2 mb-4 pt-3">
                    <button class="btn btn-outline-success" type="submit" name="login" value="LOGIN">LOGIN</button>
                </div>
            </form>
            </div>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>