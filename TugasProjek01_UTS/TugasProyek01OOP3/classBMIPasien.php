<?php
require_once 'classBMI.php';
require_once 'classPasien.php';
class bmiPasien extends bmi
{   
    public $pasien;
    function __construct($id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $brt, $tng, $tanggal)
    {
        parent::__construct($brt, $tng);
        $this->tanggal = $tanggal;
        $this->pasien = new pasien($id, $kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender);
        
    }
}