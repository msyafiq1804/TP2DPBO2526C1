#include <iostream>
#include <vector>
#include <string>
#include <iomanip>
#include "SayuranOrganik.cpp" 

using namespace std;

void print_border() {
    cout << "+-------+--------------+------------+--------------+-------+--------------+------------+------------+------------+" << endl;
}

void tampilkan_tabel(vector<SayuranOrganik>& daftar_sayur) {
    cout << "\n=== DAFTAR SAYURAN ORGANIK ===" << endl;
    print_border();
    cout << "| " << left << setw(5) << "ID" 
         << " | " << left << setw(12) << "Nama" 
         << " | " << left << setw(10) << "Asal" 
         << " | " << left << setw(12) << "Kategori" 
         << " | " << left << setw(5) << "Panen" 
         << " | " << left << setw(12) << "Gizi" 
         << " | " << left << setw(10) << "Pupuk" 
         << " | " << left << setw(10) << "Sertifikat" 
         << " | " << left << setw(10) << "Harga/kg" << " |" << endl;
    print_border();
    
    for (auto& s : daftar_sayur) {
        string panen_str = to_string(s.get_masa_panen()) + " hr";
        string harga_str = "Rp" + to_string(s.get_harga_per_kg());
        
        cout << "| " << left << setw(5) << s.get_id()
             << " | " << left << setw(12) << s.get_nama()
             << " | " << left << setw(10) << s.get_asal_daerah()
             << " | " << left << setw(12) << s.get_kategori()
             << " | " << left << setw(5) << panen_str
             << " | " << left << setw(12) << s.get_kandungan_gizi()
             << " | " << left << setw(10) << s.get_jenis_pupuk()
             << " | " << left << setw(10) << s.get_sertifikasi()
             << " | " << left << setw(10) << harga_str << " |" << endl;
    }
    print_border();
}

int main() {
    // 5 Objek awal
    vector<SayuranOrganik> data = {
        SayuranOrganik("SY01", "Bayam", "Bogor", "Sayur Daun", 30, "Zat Besi", "Kompos", "ORG-001", 15000),
        SayuranOrganik("SY02", "Wortel", "Cianjur", "Sayur Akar", 90, "Vitamin A", "Kasgot", "ORG-002", 20000),
        SayuranOrganik("SY03", "Tomat", "Garut", "Sayur Buah", 60, "Vitamin C", "Kandang", "ORG-003", 18000),
        SayuranOrganik("SY04", "Brokoli", "Lembang", "Sayur Bunga", 75, "Kalsium", "Kompos", "ORG-004", 35000),
        SayuranOrganik("SY05", "Kangkung", "Sukabumi", "Sayur Daun", 25, "Vitamin A", "Kasgot", "ORG-005", 12000)
    };

    while (true) {
        cout << "\n=== MENU TOKO SAYURAN ORGANIK ===" << endl;
        cout << "1. Tampilkan Daftar Sayuran" << endl;
        cout << "2. Tambah Sayuran Baru" << endl;
        cout << "3. Keluar" << endl;
        cout << "Pilih menu: ";
        
        string pilihan;
        if (!getline(cin, pilihan)) break;

        if (pilihan == "1") {
            tampilkan_tabel(data);
        } 
        else if (pilihan == "2") {
            cout << endl;
            try {
                string id, nama, asal, kat, gizi, pupuk, sertif;
                int panen, harga;

                cout << "Id          : "; getline(cin, id);
                cout << "Nama        : "; getline(cin, nama);
                cout << "Asal Daerah : "; getline(cin, asal);
                cout << "Kategori    : "; getline(cin, kat);
                
                cout << "Masa Panen  : "; 
                cin >> panen; cin.ignore();
                
                cout << "Gizi        : "; getline(cin, gizi);
                cout << "Jenis Pupuk : "; getline(cin, pupuk);
                cout << "Sertifikasi : "; getline(cin, sertif);
                
                cout << "Harga/kg    : "; 
                cin >> harga; cin.ignore();

                data.push_back(SayuranOrganik(id, nama, asal, kat, panen, gizi, pupuk, sertif, harga));
                cout << "\n Sayuran berhasil ditambahkan!" << endl;
            } catch (...) {
                cout << "Input tidak valid!" << endl;
                cin.clear();
            }
        } 
        else if (pilihan == "3") {
            cout << "Terima kasih!" << endl;
            break;
        } 
        else {
            cout << "Pilihan tidak valid!" << endl;
        }
    }

    return 0;
}