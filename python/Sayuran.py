from Tanaman import Tanaman

class Sayuran(Tanaman):
    def __init__(self, id_t="", nama="", asal_daerah="", kategori="", masa_panen=0, kandungan_gizi=""):
        super().__init__(id_t, nama, asal_daerah)
        self.__kategori = kategori
        self.__masa_panen = masa_panen
        self.__kandungan_gizi = kandungan_gizi

    def get_kategori(self) -> str: return self.__kategori
    def set_kategori(self, kat: str) -> None: self.__kategori = kat

    def get_masa_panen(self) -> int: return self.__masa_panen
    def set_masa_panen(self, panen: int) -> None: self.__masa_panen = panen

    def get_kandungan_gizi(self) -> str: return self.__kandungan_gizi
    def set_kandungan_gizi(self, gizi: str) -> None: self.__kandungan_gizi = gizi