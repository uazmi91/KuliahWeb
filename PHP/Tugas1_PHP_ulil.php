<?php
// Inisialisasi variabel
$nama = "";
$email = "";
$nilai = "";
$hasil = "";
$error = "";
$showResult = false;

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi input
    if (empty($_POST["nama"])) {
        $error = "Nama harus diisi";
    } elseif (empty($_POST["email"])) {
        $error = "Email harus diisi";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $error = "Format email tidak valid";
    } elseif (empty($_POST["nilai"])) {
        $error = "Nilai ujian harus diisi";
    } elseif (!is_numeric($_POST["nilai"]) || $_POST["nilai"] < 0 || $_POST["nilai"] > 100) {
        $error = "Nilai ujian harus berupa angka antara 0-100";
    } else {
        // Ambil nilai dari form
        $nama = htmlspecialchars($_POST["nama"]);
        $email = htmlspecialchars($_POST["email"]);
        $nilai = htmlspecialchars($_POST["nilai"]);
        $showResult = true;
        
        // Struktur kendali untuk menentukan hasil
        if ($nilai > 70) {
            $hasil = "Lulus";
        } else {
            $hasil = "Remedial";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penilaian Ujian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], 
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-bottom: 15px;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 4px;
            border-left: 5px solid #4CAF50;
        }
        .lulus {
            color: green;
            font-weight: bold;
        }
        .remedial {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Form Penilaian Ujian</h1>
    
    <?php if (!$showResult): ?>
    
    <?php if ($error): ?>
    <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>">
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>">
        </div>
        
        <div class="form-group">
            <label for="nilai">Nilai Ujian:</label>
            <input type="number" id="nilai" name="nilai" min="0" max="100" value="<?php echo $nilai; ?>">
        </div>
        
        <button type="submit">Proses Hasil</button>
    </form>
    
    <?php else: ?>
    
    <div class="result">
        <h2>Hasil Penilaian</h2>
        <p><strong>Nama:</strong> <?php echo $nama; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Nilai Ujian:</strong> <?php echo $nilai; ?></p>
        <p><strong>Status:</strong> 
            <span class="<?php echo strtolower($hasil); ?>">
                <?php echo $hasil; ?>
            </span>
        </p>
    </div>
    
    <p><a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">Kembali ke Form</a></p>
    
    <?php endif; ?>
</body>
</html>