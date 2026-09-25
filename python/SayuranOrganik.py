from Sayuran import Sayuran

class SayuranOrganik(Sayuran):
    def __init__(self, id_t="", nama="", asal_daerah="", kategori="", masa_panen=0, kandungan_gizi="", jenis_pupuk="", sertifikasi="", harga_per_kg=0):
        super().__init__(id_t, nama, asal_daerah, kategori, masa_panen, kandungan_gizi)
        self.__jenis_pupuk = jenis_pupuk
        self.__sertifikasi = sertifikasi
        self.__harga_per_kg = harga_per_kg

    def get_jenis_pupuk(self) -> str: return self.__jenis_pupuk
    def set_jenis_pupuk(self, pupuk: str) -> None: self.__jenis_pupuk = pupuk

    def get_sertifikasi(self) -> str: return self.__sertifikasi
    def set_sertifikasi(self, sertif: str) -> None: self.__sertifikasi = sertif

    def get_harga_per_kg(self) -> int: return self.__harga_per_kg
    def set_harga_per_kg(self, harga: int) -> None: self.__harga_per_kg = harga