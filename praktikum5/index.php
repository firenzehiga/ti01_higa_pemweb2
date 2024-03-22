<?php

class Manusia {
    public $nama;
    public $umur;

    public function setNama ($nama)
    {
        $this->nama = $nama;
        
    }

    public function setUmur ($umur)
    {
        $this->umur = $umur;
        
    }

    public function getInfo()
    {
        return "Nama:". $this->nama .", Umur:  " .  $this->umur ; 
    }
    
}

#Membuat Object
$higa =  new Manusia(); 
$higa ->setNama("Firenze Higa");   #Menampilkan Nama Higa
$higa ->setUmur(18);   #Menampilkan Nama Higa
echo "<br>".$higa->getInfo()."<br>";      # Menampilkan Info Higa      

    $dwiyana= new Manusia();
    $dwiyana->setNama("Dwiyana");
    $dwiyana->setUmur(20);
    echo "<br>".$dwiyana->getInfo() . "<br>";


