class Tanaman:
    def __init__(self, id_t="", nama="", asal_daerah=""):
        self.__id = id_t
        self.__nama = nama
        self.__asal_daerah = asal_daerah

    def get_id(self) -> str: return self.__id
    def set_id(self, id_t: str) -> None: self.__id = id_t

    def get_nama(self) -> str: return self.__nama
    def set_nama(self, nama: str) -> None: self.__nama = nama

    def get_asal_daerah(self) -> str: return self.__asal_daerah
    def set_asal_daerah(self, asal: str) -> None: self.__asal_daerah = asal