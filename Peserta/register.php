<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
    body {
    margin: 0;
    padding: 0;
    background: url(./gambar/background_login.jpg) no-repeat center center fixed;
    background-size: cover;
    background-position: center;
    font-family: sans-serif
    }

    .card {
    width: 320px;
    height: 590px;
    background: #000;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 30px 30px
    }

    .card input[type="text"],
    input[type="password"] {
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px
    }

    .card input[type="submit"] {
    border: none;
    outline: none;
    height: 40px;
    background: #ff0000;
    color: #fff;
    font-size: 18px;
    border-radius: 20px
    }
    </style>
</head>
<body>
<br></br>
    <div class="container col-md-3">
        <div class="card">
            <h1 class="card-header" style="text-align:center">Daftar</h1>
            <div class="card-body">
            <form action = "proses_register.php" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div>
                    Alamat :
                    <input type="text" name="alamat" value="" class="form-control" placeholder="Masukan alamat Anda" required>
                </div>                
                <div class="mb-3">
                    <label for="tlp" class="form-label">Tlp</label> 
                    <input type="text" name="tlp" value="" class="form-control" placeholder="Masukan Nomor Telepone" required>
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" value="" class="form-control" placeholder="Masukan Password" required>
                </div>

                <input type="submit" name="simpan" value="Daftar" class="btn btn-danger">            
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>