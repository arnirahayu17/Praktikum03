<?php

$nama=$_POST['nama'];
$umur=$_POST['umur'];
$berat_badan=$_POST['berat'];
$tinggi_badan=$_POST['tinggi'];
$kelamin=$_POST['kelamin'];
$nomor=1;


class BmiPasien {
    public $nama;
    public $umur;
    public $jenis_kelamin;
    public $berat;
    public $tinggi;

    function __construct($nama, $umur, $jenis_kelamin, $berat, $tinggi){
        $this->nama = $nama;
        $this->umur = $umur;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }


    public function hasilBMI(){
        $tinggi_meter = $this->tinggi/100;
        $this->bmi = round($this->berat / pow($tinggi_meter,2));
        return $this->bmi;
    }

    public function statusBMI(){
        if($this->bmi < 18.5){
            return "Kekurangan berat badan";
        }elseif($this->bmi < 24.9){
            return "Normal (ideal)";
        }elseif($this->bmi < 29.9){
            return "Kelebihan berat badan";
        }else{
            return "Kegemukan (Obesitas)";
        }
    }

}

$bmi1 = new BmiPasien ($nama, $umur, $jenis_kelamin, $berat_badan, $tinggi_badan);

?>