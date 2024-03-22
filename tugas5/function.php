<?php

class BeratIdeal {
    public $nama;
    public $berat;
    public $tinggi;

    public function __construct($nama, $berat, $tinggi)
    {
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }
    

    public function kategori()
    {
        $bmi = $this->berat / ($this->tinggi / 100) ** 2;

        if ($bmi < 18.5) {
            return "Kurus";
        } elseif ($bmi >=  18.5 && $bmi < 25) {
            return "Berat Normal";
        } elseif ($bmi >= 25 && $bmi < 30) {
            return "Kelebihan Berat";
        } else {
            return "Obesitas";
        }
    }

    public function targetBerat()
    {
        $kategori  = $this->kategori();
        $bmi = $this->berat / ($this->tinggi / 100) ** 2;
        $targetBmi = 22.9; // BMI ideal source: google
        $targetBerat = floor($targetBmi * ($this->tinggi / 100) ** 2);

        if ($bmi < $targetBmi OR $kategori == 'kurus' ) {
            return "Berat badan harus ditambah " . ($targetBerat - $this->berat) . " kg";

        } elseif ($bmi > $targetBmi OR $kategori == 'Kelebihan Berat') {
            return "Berat badan harus dikurangi " . ($this->berat - $targetBerat) . " kg";

        } elseif ($bmi > $targetBmi OR $kategori == 'Obesitas') {
        return "Berat badan harus dikurangi " . ($this->berat - $targetBerat) . " kg";
        
        } else {
            return "Berat badan sudah ideal";
        }
    }


}



?>