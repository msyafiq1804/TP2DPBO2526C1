public class Sayuran extends Tanaman {
    private String kategori;
    private int masaPanen;
    private String kandunganGizi;

    public Sayuran(String id, String nama, String asalDaerah, String kategori, int masaPanen, String kandunganGizi) {
        super(id, nama, asalDaerah);
        this.kategori = kategori;
        this.masaPanen = masaPanen;
        this.kandunganGizi = kandunganGizi;
    }

    public String getKategori() { return kategori; }
    public void setKategori(String kategori) { this.kategori = kategori; }

    public int getMasaPanen() { return masaPanen; }
    public void setMasaPanen(int masaPanen) { this.masaPanen = masaPanen; }

    public String getKandunganGizi() { return kandunganGizi; }
    public void setKandunganGizi(String kandunganGizi) { this.kandunganGizi = kandunganGizi; }
}