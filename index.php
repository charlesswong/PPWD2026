<?php

class Ruangan {
    private string $namaRuangan; 
    private string $namapeminjaman;
    private int $kapasitas;
    private bool $statusTerpinjam = false;

    public function setNamamhs($namamhs) : void {
        $this->namapeminjaman = $namamhs;
    }

    public function getNamamhs() : string {
        return $this->namapeminjaman;
    }

    public function setInformasiruangan ($nama, $kapasitas) : void {
        $this->namaRuangan = $nama;
        $this->kapasitas = $kapasitas;
    }
    public function getNamaruangan() : string {
        return $this->namaRuangan;
    }
    public function getKapasitas() : int {
        return $this->kapasitas;
    }
    public function pinjamRuangan() : string {
        if ($this->statusTerpinjam == false) {
            $this->statusTerpinjam = true;
            return "Berhasil meminjam ruangan [{$this->namaRuangan}]";
        } else {
            return "Maaf, ruanagn [{$this->namaRuangan}] sedang digunakan";    
        }
    }

    public function bunyikanBEl() : void {
        echo "Teng teng teng! Waktu kuliah di ruangan[{$this->namaRuangan}] telah habis!";
    }
}

$ruangA = new Ruangan();
$ruangA->setNamamhs("Awa");
echo $ruangA->getNamamhs(). PHP_EOL;
$ruangA->setInformasiruangan("A", 150);
echo $ruangA->getNamaruangan(). PHP_EOL;
echo $ruangA->getKapasitas(). PHP_EOL;
echo $ruangA->pinjamRuangan(). PHP_EOL;
echo $ruangA->pinjamRuangan(). PHP_EOL;
$ruangA->bunyikanBEl();
