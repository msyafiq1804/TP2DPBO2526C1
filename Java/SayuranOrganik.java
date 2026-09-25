public class SayuranOrganik extends Sayuran {
    private String jenisPupuk;
    private String sertifikasi;
    private int hargaPerKg;

    public SayuranOrganik(String id, String nama, String asalDaerah, String kategori, int masaPanen, String kandunganGizi, String jenisPupuk, String sertifikasi, int hargaPerKg) {
        super(id, nama, asalDaerah, kategori, masaPanen, kandunganGizi);
        this.jenisPupuk = jenisPupuk;
        this.sertifikasi = sertifikasi;
        this.hargaPerKg = hargaPerKg;
    }

    public String getJenisPupuk() { return jenisPupuk; }
    public void setJenisPupuk(String jenisPupuk) { this.jenisPupuk = jenisPupuk; }

    public String getSertifikasi() { return sertifikasi; }
    public void setSertifikasi(String sertifikasi) { this.sertifikasi = sertifikasi; }

    public int getHargaPerKg() { return hargaPerKg; }
    public void setHargaPerKg(int hargaPerKg) { this.hargaPerKg = hargaPerKg; }
}