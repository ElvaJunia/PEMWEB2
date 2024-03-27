<?php
class Persegipanjang
{
    /**
     * Access Modifier :
     * 1. public (dapat diakses kapanpun)
     * 2. private (dapat diakses di class tersebut saja)
     * 3. protected (mirip pvt tapi dapat diakses juga oleh child class)
     */
    // properti
    private $panjang;
    private $lebar;


    //method (function dalam class)
    //constr adalah method yang otomatis jalan ketika objek dibuat
    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function getLuas()
    {
        return $this->panjang * $this->lebar;
    }

    public function getKeliling()
    {
        return 2 * ($this->panjang + $this->lebar);
    }
}
