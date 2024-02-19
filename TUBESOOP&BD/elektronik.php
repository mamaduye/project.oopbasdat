<?php

class Elektronik {
    protected $merk;
    protected $harga;

    public function __construct($merk, $harga) {
        $this->merk = $merk;
        $this->harga = $harga;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setMerk($newMerk) {
        $this->merk = $newMerk;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function setHarga($newHarga) {
        $this->harga = $newHarga;
    }

    public function tampilkanInfo() {
        echo "Informasi Elektronik:\n";
        echo "Merk: " . $this->merk . "\n";
        echo "Harga: Rp " . $this->harga . "\n";
    }

    public static function informasiUmum() {
        echo "Elektronik adalah perangkat listrik yang memanfaatkan aliran elektron.\n";
    }
}

class Televisi extends Elektronik {
    private $ukuranLayar;

    public function __construct($merk, $harga, $ukuranLayar) {
        parent::__construct($merk, $harga);
        $this->ukuranLayar = $ukuranLayar;
    }

    public function getUkuranLayar() {
        return $this->ukuranLayar;
    }

    public function setUkuranLayar($newSize) {
        $this->ukuranLayar = $newSize;
    }

    public function tampilkanInfo() {
        echo "Televisi " . $this->getMerk() . " dengan harga Rp " . $this->getHarga() . " dan ukuran layar " . $this->getUkuranLayar() . " inci.\n";
    }
    

    public static function informasiUmum() {
        echo "Televisi adalah perangkat elektronik untuk menonton gambar dan suara.\n";
    }
    
}

class Laptop extends Elektronik {
    private $jenisProcessor;

    public function __construct($merk, $harga, $jenisProcessor) {
        parent::__construct($merk, $harga);
        $this->jenisProcessor = $jenisProcessor;
    }

    public function getJenisProcessor() {
        return $this->jenisProcessor;
    }

    public function setJenisProcessor($newProcessor) {
        $this->jenisProcessor = $newProcessor;
    }

    public function tampilkanInfo() {
        echo "Laptop " . $this->getMerk() . " dengan harga Rp " . $this->getHarga() . " dan menggunakan processor " . $this->getJenisProcessor() . ".\n";
    }
    

    public static function informasiUmum() {
        echo "Laptop adalah perangkat komputasi portabel.\n";
    }
    
}

class Kipas extends Elektronik {
    private $jumlahBalingBaling;

    public function __construct($merk, $harga, $jumlahBalingBaling) {
        parent::__construct($merk, $harga);
        $this->jumlahBalingBaling = $jumlahBalingBaling;
    }

    public function getJumlahBalingBaling() {
        return $this->jumlahBalingBaling;
    }

    public function setJumlahBalingBaling($newJumlah) {
        $this->jumlahBalingBaling = $newJumlah;
    }

    public function tampilkanInfo() {
        echo "Kipas " . $this->getMerk() . " dengan harga Rp " . $this->getHarga() . " dan memiliki " . $this->getJumlahBalingBaling() . " baling-baling.\n";
    }
    

    public static function informasiUmum() {
        echo "Kipas adalah perangkat untuk menghasilkan angin.\n";
    }
    
}
            // Membuat objek dari masing-masing kelas
        $tv = new Televisi("Samsung", 5000000, 42);
        $laptop = new Laptop("HP", 8000000, "Intel Core i5");
        $kipas = new Kipas("Panasonic", 300000, 3);

        // Menampilkan informasi masing-masing objek
        $tv->tampilkanInfo();
        $laptop->tampilkanInfo();
        $kipas->tampilkanInfo();

        // Memanggil metode static untuk overloading
        Elektronik::informasiUmum();
        Televisi::informasiUmum("dalam resolusi 4K");
        Laptop::informasiUmum(" untuk pekerjaan dan hiburan");
        Kipas::informasiUmum(" untuk pendingin udara");
    ?>