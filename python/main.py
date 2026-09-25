from SayuranOrganik import SayuranOrganik

def print_border():
    print("+-------+--------------+------------+--------------+-------+--------------+------------+------------+------------+")

def tampilkan_tabel(daftar_sayur):
    print("\n=== DAFTAR SAYURAN ORGANIK ===")
    print_border()
    print(f"| {'ID':<5} | {'Nama':<12} | {'Asal':<10} | {'Kategori':<12} | {'Panen':<5} | {'Gizi':<12} | {'Pupuk':<10} | {'Sertifikat':<10} | {'Harga/kg':<10} |")
    print_border()
    for s in daftar_sayur:
        panen_str = f"{s.get_masa_panen()} hr"
        harga_str = f"Rp{s.get_harga_per_kg()}"
        print(f"| {s.get_id():<5} | {s.get_nama():<12} | {s.get_asal_daerah():<10} | {s.get_kategori():<12} | {panen_str:<5} | {s.get_kandungan_gizi():<12} | {s.get_jenis_pupuk():<10} | {s.get_sertifikasi():<10} | {harga_str:<10} |")
    print_border()

def main():
    data = [
        SayuranOrganik("SY01", "Bayam", "Bogor", "Sayur Daun", 30, "Zat Besi", "Kompos", "ORG-001", 15000),
        SayuranOrganik("SY02", "Wortel", "Cianjur", "Sayur Akar", 90, "Vitamin A", "Kasgot", "ORG-002", 20000),
        SayuranOrganik("SY03", "Tomat", "Garut", "Sayur Buah", 60, "Vitamin C", "Kandang", "ORG-003", 18000),
        SayuranOrganik("SY04", "Brokoli", "Lembang", "Sayur Bunga", 75, "Kalsium", "Kompos", "ORG-004", 35000),
        SayuranOrganik("SY05", "Kangkung", "Sukabumi", "Sayur Daun", 25, "Vitamin A", "Kasgot", "ORG-005", 12000),
    ]

    while True:
        print("\n=== MENU TOKO SAYURAN ORGANIK ===")
        print("1. Tampilkan Daftar Sayuran")
        print("2. Tambah Sayuran Baru")
        print("3. Keluar")
        try:
            pilihan = input("Pilih menu: ").strip()
        except EOFError:
            break

        if pilihan == "1":
            tampilkan_tabel(data)
        elif pilihan == "2":
            print()
            try:
                id_t = input("Id          : ")
                nama = input("Nama        : ")
                asal = input("Asal Daerah : ")
                kat = input("Kategori    : ")
                panen = int(input("Masa Panen  : "))
                gizi = input("Gizi        : ")
                pupuk = input("Jenis Pupuk : ")
                sertif = input("Sertifikasi : ")
                harga = int(input("Harga/kg    : "))

                data.append(SayuranOrganik(id_t, nama, asal, kat, panen, gizi, pupuk, sertif, harga))
                print("\n Sayuran berhasil ditambahkan!")
            except EOFError:
                break
        elif pilihan == "3":
            print("Terima kasih!")
            break
        else:
            print("Pilihan tidak valid!")

if __name__ == "__main__":
    main()