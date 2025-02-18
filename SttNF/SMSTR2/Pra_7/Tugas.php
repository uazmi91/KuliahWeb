<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 7</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-md-12">
                <h1 class="text-center">Form Indeks Massa Tubuh (BMI)</h1>
            </div>

            <!-- nav -->
            
            <nav class="navbar navbar-expand-lg navbar-dark bg-success">
                <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                          <a class="nav-link active" href="Tugas.php">FORM</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="hasilbmi.php">DATA BMI</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="col-md-12 mt-5">
            <form method="post" action="hasilbmi.php">
                <div class="form-group row">
                    <label for="namap" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                        <input id="namap" name="namap" placeholder="Nama Lengkap" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label> 
                    <div class="col-8">
                        <select id="jkp" name="jkp" class="custom-select" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uts" class="col-4 col-form-label">Tinggi Badan</label> 
                    <div class="col-8">
                        <input id="tbp" name="tbp" placeholder="Tinggi Badan" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uts" class="col-4 col-form-label">Berat Badan</label> 
                    <div class="col-8">
                        <input id="bbp" name="bbp" placeholder="Berat Badan" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button id="submit" name="submit" type="submit"  class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
                <hr>
            <p class="text-center">Created By
                <a href="https://kreasi.nurulfikri.ac.id/ulil22181si/">Ulil Azmi &copy; 2023</a>
            </p>
            </div>
        </div>
    </div>
</body>
</html>