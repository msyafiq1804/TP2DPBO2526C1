import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    public static void printBorder() {
        System.out.println("+-------+--------------+------------+--------------+-------+--------------+------------+------------+------------+");
    }

    public static void tampilkanTabel(ArrayList<SayuranOrganik> daftarSayur) {
        System.out.println("\n=== DAFTAR SAYURAN ORGANIK ===");
        printBorder();
        System.out.printf("| %-5s | %-12s | %-10s | %-12s | %-5s | %-12s | %-10s | %-10s | %-10s |%n", 
            "ID", "Nama", "Asal", "Kategori", "Panen", "Gizi", "Pupuk", "Sertifikat", "Harga/kg");
        printBorder();
        for (SayuranOrganik s : daftarSayur) {
            String panenStr = s.getMasaPanen() + " hr";
            String hargaStr = "Rp" + s.getHargaPerKg();
            System.out.printf("| %-5s | %-12s | %-10s | %-12s | %-5s | %-12s | %-10s | %-10s | %-10s |%n",
                s.getId(), s.getNama(), s.getAsalDaerah(), s.getKategori(), panenStr, s.getKandunganGizi(), s.getJenisPupuk(), s.getSertifikasi(), hargaStr);
        }
        printBorder();
    }

    public static void main(String[] args) {
        ArrayList<SayuranOrganik> data = new ArrayList<>();
        data.add(new SayuranOrganik("SY01", "Bayam", "Bogor", "Sayur Daun", 30, "Zat Besi", "Kompos", "ORG-001", 15000));
        data.add(new SayuranOrganik("SY02", "Wortel", "Cianjur", "Sayur Akar", 90, "Vitamin A", "Kasgot", "ORG-002", 20000));
        data.add(new SayuranOrganik("SY03", "Tomat", "Garut", "Sayur Buah", 60, "Vitamin C", "Kandang", "ORG-003", 18000));
        data.add(new SayuranOrganik("SY04", "Brokoli", "Lembang", "Sayur Bunga", 75, "Kalsium", "Kompos", "ORG-004", 35000));
        data.add(new SayuranOrganik("SY05", "Kangkung", "Sukabumi", "Sayur Daun", 25, "Vitamin A", "Kasgot", "ORG-005", 12000));

        Scanner scanner = new Scanner(System.in);

        while (true) {
            System.out.println("\n=== MENU TOKO SAYURAN ORGANIK ===");
            System.out.println("1. Tampilkan Daftar Sayuran");
            System.out.println("2. Tambah Sayuran Baru");
            System.out.println("3. Keluar");
            System.out.print("Pilih menu: ");
            
            if (!scanner.hasNextLine()) break;
            String pilihan = scanner.nextLine().trim();

            if (pilihan.equals("1")) {
                tampilkanTabel(data);
            } else if (pilihan.equals("2")) {
                System.out.println();
                try {
                    System.out.print("Id          : ");
                    String id = scanner.nextLine();
                    System.out.print("Nama        : ");
                    String nama = scanner.nextLine();
                    System.out.print("Asal Daerah : ");
                    String asal = scanner.nextLine();
                    System.out.print("Kategori    : ");
                    String kat = scanner.nextLine();
                    System.out.print("Masa Panen  : ");
                    int panen = Integer.parseInt(scanner.nextLine());
                    System.out.print("Gizi        : ");
                    String gizi = scanner.nextLine();
                    System.out.print("Jenis Pupuk : ");
                    String pupuk = scanner.nextLine();
                    System.out.print("Sertifikasi : ");
                    String sertif = scanner.nextLine();
                    System.out.print("Harga/kg    : ");
                    int harga = Integer.parseInt(scanner.nextLine());

                    data.add(new SayuranOrganik(id, nama, asal, kat, panen, gizi, pupuk, sertif, harga));
                    System.out.println("\n Sayuran berhasil ditambahkan!");
                } catch (Exception e) {
                    System.out.println("Input tidak valid!");
                }
            } else if (pilihan.equals("3")) {
                System.out.println("Terima kasih!");
                break;
            } else {
                System.out.println("Pilihan tidak valid!");
            }
        }
        scanner.close();
    }
}