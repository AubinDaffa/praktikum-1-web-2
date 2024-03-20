<?php
class Lingkaran{
    // properti / atribut
    private $jari;
    const PHI = 3.14;

    // method: function yg ada dalam class
    public function __construct($r)
    {
        // isi atribut jari saat pembuatan object
        $this->jari = $r;
    }

    public function getLuas(){
        return 0.5 * self::PHI * $this->jari * $this->jari;
    }

    public function getKeliling()
    {
        return 2 * self::PHI * $this->jari;
    }

}