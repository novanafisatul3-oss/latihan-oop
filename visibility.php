<?php
class Contoh
{
    public string $nama = "Andi";
    protected string $pass = "x123";
    private string $kunci = "SANGAT-RAHASIA";
    public function lihatKunci(): string // method PUBLIC boleh dibaca dari luar
    {
        return $this->kunci; // private HANYA boleh diakses dari dalam
    }
}
$c = new Contoh();
echo $c->nama; // OK => Andi
// echo $c->pass; // Fatal Error: Cannot access protected property
// echo $c->kunci; // Fatal Error: Cannot access private property
echo $c->lihatKunci(); // OK => SANGAT-RAHASIA (lewat method)