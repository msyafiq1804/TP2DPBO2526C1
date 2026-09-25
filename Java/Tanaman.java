public class Tanaman {
    private String id;
    private String nama;
    private String asalDaerah;

    public Tanaman(String id, String nama, String asalDaerah) {
        this.id = id;
        this.nama = nama;
        this.asalDaerah = asalDaerah;
    }

    public String getId() { return id; }
    public void setId(String id) { this.id = id; }

    public String getNama() { return nama; }
    public void setNama(String nama) { this.nama = nama; }

    public String getAsalDaerah() { return asalDaerah; }
    public void setAsalDaerah(String asalDaerah) { this.asalDaerah = asalDaerah; }
}