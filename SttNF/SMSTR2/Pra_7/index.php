<?php
    class Tes{

    }

    $a = new Tes();

    class Mobil{
        public $nama,
               $merk,
               $warna;

        public function tambahkecepatan(){

        }

        public function kurangikecepatan(){

        }
    }

    $mobil = new mobil();

    class Produk{
        public $nama = 'ini nama',
               $jenis = 'ini jenis',
               $harga = 9999;

        Public function __construct($nama, $jenis, $harga){
            $this->nama = $nama;
            $this->jenis = $jenis;
            $this->harga = $harga;
        }

        public function printharga(){
            return $this->harga;
        }
    }

    $produk1 = new Produk("HOODIE", "JAKET", 185000);
    
    echo "$produk1->nama, $produk1->jenis";
    echo "<br>";
    echo "harga : ", $produk1->printharga();
    
?>