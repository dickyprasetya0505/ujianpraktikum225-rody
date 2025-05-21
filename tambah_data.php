<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tambah Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      background-color:rgb(226, 229, 240);
      color: #222831;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
    }
    .navbar-custom {
      background-color:rgb(255, 255, 255);
    }
    .navbar-custom .navbar-brand,
    .navbar-custom .nav-link,
    .navbar-custom .btn {
      color:rgb(0, 0, 0);
    }
 .card {
  background-color:rgb(255, 255, 255);
  border-radius: 0.5rem;
  box-shadow: 0 0 10px rgb(34 40 49 / 0.2);
  color: #fff;
}

    .form-label {
      font-weight: 600;
      color:rgb(0, 0, 0);
    }
    .btn-primary {
  background-color:rgb(83, 107, 246);
  color: #222831;
  border: none;
}
.btn-primary:hover {
  background-color:rgb(152, 176, 242);
  color: #222831;
}

  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom mb-4 shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand ms-0" href="#">selama datang dihalaman rudi 123</a>
        <div class="ms-auto">
        <a href="index.php" class="btn btn-outline-light">Kembali</a>
      </div>
    </div>
  </nav>

<div class="container d-flex justify-content-center align-items-start">
    <div class="col-md-6">
        <div class="card p-4">
            <h5 class="mb-3 text-center" style="color: #222831;">Selamat datang</h5>
            <h3 class="mb-4 text-center">Tambah Data</h3>
            <form action="tambah_proses.php" method="POST">
                <div class="mb-3">
                    <label for="title" class="form-label">title</label>
                    <input type="text" name="title" class="form-control" required />
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">status</label>
                    <input type="text" name="description" class="form-control" required />
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>