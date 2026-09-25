<?php
class SayuranOrganik {
    private $id;
    private $nama;
    private $asalDaerah;
    private $kategori;
    private $masaPanen;
    private $kandunganGizi;
    private $jenisPupuk;
    private $sertifikasi;
    private $hargaPerKg;
    private $gambar;

    public function __construct($id, $nama, $asalDaerah, $kategori, $masaPanen, $kandunganGizi, $jenisPupuk, $sertifikasi, $hargaPerKg, $gambar = '') {
        $this->id = $id;
        $this->nama = $nama;
        $this->asalDaerah = $asalDaerah;
        $this->kategori = $kategori;
        $this->masaPanen = (int)$masaPanen;
        $this->kandunganGizi = $kandunganGizi;
        $this->jenisPupuk = $jenisPupuk;
        $this->sertifikasi = $sertifikasi;
        $this->hargaPerKg = (int)$hargaPerKg;
        $this->gambar = !empty($gambar) ? $gambar : 'images/bayam.png';
    }

    public function getId() { return $this->id; }
    public function getNama() { return $this->nama; }
    public function getAsalDaerah() { return $this->asalDaerah; }
    public function getKategori() { return $this->kategori; }
    public function getMasaPanen() { return $this->masaPanen; }
    public function getKandunganGizi() { return $this->kandunganGizi; }
    public function getJenisPupuk() { return $this->jenisPupuk; }
    public function getSertifikasi() { return $this->sertifikasi; }
    public function getHargaPerKg() { return $this->hargaPerKg; }
    public function getGambar() { return $this->gambar; }
}