#include <iostream>
#include <string>
#include "Tanaman.cpp" // Include file .cpp sesuai modul

using namespace std;

class Sayuran : public Tanaman {
private:
    string kategori;
    int masa_panen;
    string kandungan_gizi;

public:
    Sayuran(string id_t = "", string nama_t = "", string asal = "", 
            string kat = "", int panen = 0, string gizi = "")
        : Tanaman(id_t, nama_t, asal) {
        this->kategori = kat;
        this->masa_panen = panen;
        this->kandungan_gizi = gizi;
    }

    string get_kategori() { return kategori; }
    void set_kategori(string kat) { this->kategori = kat; }

    int get_masa_panen() { return masa_panen; }
    void set_masa_panen(int panen) { this->masa_panen = panen; }

    string get_kandungan_gizi() { return kandungan_gizi; }
    void set_kandungan_gizi(string gizi) { this->kandungan_gizi = gizi; }
};