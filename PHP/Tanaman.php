<?php
class Tanaman {
    private string $id;
    private string $nama;
    private string $asalDaerah;

    public function __construct(string $id = "", string $nama = "", string $asal = "") {
        $this->id = $id;
        $this->nama = $nama;
        $this->asalDaerah = $asal;
    }

    public function getId(): string { return $this->id; }
    public function setId(string $id): void { $this->id = $id; }

    public function getNama(): string { return $this->nama; }
    public function setNama(string $nama): void { $this->nama = $nama; }

    public function getAsalDaerah(): string { return $this->asalDaerah; }
    public function setAsalDaerah(string $asal): void { $this->asalDaerah = $asal; }
}
?>