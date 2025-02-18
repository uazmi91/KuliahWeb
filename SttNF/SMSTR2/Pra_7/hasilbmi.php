<?php

if(!isset($_POST['submit'])){
    header("location: index2.php");
    exit;
}
    // Form

    $namap = $_POST['namap'];
    $jkp = $_POST['jkp'];
    $tbp = $_POST['tbp'];
    $bbp = $_POST['bbp'];
    $tb = $tbp / 100;

    // Hitung

    $bmi = $bbp / ($tb * $tb);
    

    // Function

    function kondisi($bmi){
        if($bmi < 17){
            echo "kurus";
        } elseif($bmi < 23){
            echo "Normal";
        } elseif($bmi < 27){
            echo "Kegemukan";
        } elseif($bmi > 27){
            echo "Obesitas";
        }
    }
    
    
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas 7.1</title>

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

            <!-- table -->

            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tinggi Badan</th>
                    <th scope="col">Berat Badan</th>
                    <th scope="col">Nilai BMI</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <td> <?= $namap ?></td>
                <td> <?= $jkp ?></td>
                <td> <?= $tbp ?></td>
                <td> <?= $bbp ?></td>
                <td> <?= 
                number_format($bmi,2,",",".")
                 ?></td>
                <td> <?= kondisi($bmi) ?></td>
            </tbody>
            </table>
        </div>
    </div>
    </body>
    </html>