<?php
require_once __DIR__ . "/Tanaman.php";

class Sayuran extends Tanaman {
    private string $kategori;
    private int $masaPanen;
    private string $kandunganGizi;

    public function __construct(string $id = "", string $nama = "", string $asal = "", string $kat = "", int $panen = 0, string $gizi = "") {
        parent::__construct($id, $nama, $asal);
        $this->kategori = $kat;
        $this->masaPanen = $panen;
        $this->kandunganGizi = $gizi;
    }

    public function getKategori(): string { return $this->kategori; }
    public function setKategori(string $kat): void { $this->kategori = $kat; }

    public function getMasaPanen(): int { return $this->masaPanen; }
    public function setMasaPanen(int $panen): void { $this->masaPanen = $panen; }

    public function getKandunganGizi(): string { return $this->kandunganGizi; }
    public function setKandunganGizi(string $gizi): void { $this->kandunganGizi = $gizi; }
}
?>