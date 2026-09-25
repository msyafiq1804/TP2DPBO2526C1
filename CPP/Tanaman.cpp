#include <iostream>
#include <string>

using namespace std;

class Tanaman {
private:
    string id;
    string nama;
    string asal_daerah;

public:
    Tanaman(string id_t = "", string nama_t = "", string asal = "") {
        this->id = id_t;
        this->nama = nama_t;
        this->asal_daerah = asal;
    }

    string get_id() { return id; }
    void set_id(string id_t) { this->id = id_t; }

    string get_nama() { return nama; }
    void set_nama(string nama_t) { this->nama = nama_t; }

    string get_asal_daerah() { return asal_daerah; }
    void set_asal_daerah(string asal) { this->asal_daerah = asal; }
};