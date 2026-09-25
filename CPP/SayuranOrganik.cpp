#include <iostream>
#include <string>
#include "Sayuran.cpp" 

using namespace std;

class SayuranOrganik : public Sayuran {
private:
    string jenis_pupuk;
    string sertifikasi;
    int harga_per_kg;

public:
    SayuranOrganik(string id_t = "", string nama_t = "", string asal = "", 
                   string kat = "", int panen = 0, string gizi = "", 
                   string pupuk = "", string sertif = "", int harga = 0)
        : Sayuran(id_t, nama_t, asal, kat, panen, gizi) {
        this->jenis_pupuk = pupuk;
        this->sertifikasi = sertif;
        this->harga_per_kg = harga;
    }

    string get_jenis_pupuk() { return jenis_pupuk; }
    void set_jenis_pupuk(string pupuk) { this->jenis_pupuk = pupuk; }

    string get_sertifikasi() { return sertifikasi; }
    void set_sertifikasi(string sertif) { this->sertifikasi = sertif; }

    int get_harga_per_kg() { return harga_per_kg; }
    void set_harga_per_kg(int harga) { this->harga_per_kg = harga; }
};