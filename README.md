TUGAS PRAKTIKUM 2 DPBO

JANJI : 

Saya Muhammad Syafiq A dengan NIM 2500254 mengerjakan TP 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

DESKRIPSI :

Program ini mengimplementasikan konsep multilevel inheritance dalam kasus Toko Sayuran Organik pada OOP.
Terdapat 3 class:
1. Tanaman, memiliki atribut paling umum (seperti ID, nama, dan asal daerah).
2. Sayuran, turunan class tanaman, menambahkan atribut yang mulai spesifik dimiliki oleh sayur-sayuran (seperti kategori, masa panen, dan kandungan gizi).
3. SayuranOrganik, turunan class sayuran, menambahkan atribut yang mulai khusus ada pada sayuran organik yang dijual (seperti jenis pupuk, sertifikasi, dan harga per kg).

ALUR PROGRAM :
1. Inisialisasi Data Awal: Saat pertama kali dijalankan, program akan otomatis membuat 5 data objek SayuranOrganik bawaan (hardcode) dan menyimpannya ke dalam struktur data (seperti list, vector, atau ArrayList).
2. Menampilkan Menu: Program masuk ke dalam perulangan (infinite loop) untuk menampilkan menu interaktif yang berisi 3 opsi utama (Tampilkan, Tambah, Keluar) lalu menunggu inputan dari user.
3. Pilihan 1 (Tampilkan Daftar Sayuran): Program memanggil fungsi untuk membaca (looping) seluruh data di dalam list, lalu mencetak semua atribut (dari id hingga harga per kg) ke layar dalam format tabel teks yang rapi dan dinamis.
4. Pilihan 2 (Tambah Sayuran Baru): Program meminta user mengetikkan input untuk masing-masing atribut secara berurutan. Setelah semua input terkumpul, program akan menginstansiasi objek SayuranOrganik baru dan memasukannya ke dalam list data.
5. Pilihan 3 (Keluar): Perulangan dihentikan (break) dan program selesai tereksekusi. Jika user memasukkan pilihan di luar 1, 2, atau 3, program akan menampilkan pesan tidak valid dan kembali memunculkan menu.

Class & Atribut :
1. Tanaman id : string,  nama : string,  asal_daerah : string
2. Sayuran (extends Tanaman) kategori : string,  masa_panen : int (hari),  kandungan_gizi : string
3. SayuranOrganik (extends Sayuran) jenis_pupuk : string,  sertifikasi : string,  harga_per_kg : int (Rupiah)



DIAGRAM KONSEP : 


<img width="238" height="816" alt="tp2 drawio" src="https://github.com/user-attachments/assets/be9ee420-fd0a-4af5-9939-a1c35816dcef" />



Alasan pemilihan class :
1. Tanaman: Tanaman merupakan class paling umum dalam dunia pertanian, bukan hanya tanaman pangan saja, tanaman juga bisa berupa tanaman hias atau tanaman obat. Oleh karena itu, saya lebih memilih memberi atribut kandungan_gizi dan masa_panen pada class Sayuran saja, karena jika ada tanaman hias di sini tentu tidak relevan jika memakai atribut kandungan gizi.
2. Sayuran: Kategori yang lebih spesifik dari tanaman, yaitu tumbuhan yang dikhususkan untuk konsumsi manusia. Atribut terkait bahan pangan (seperti gizi dan masa panen) baru ditambahkan pada tahap ini.
3. SayuranOrganik: Turunan paling akhir yang merepresentasikan produk spesifik untuk dijual. Atribut khusus bisnis dan budidaya (seperti sertifikasi dan harga) diletakkan di sini. Kedepannya, turunan lain bisa dengan mudah ditambahkan dari class Sayuran, seperti SayuranHidroponik atau SayuranKonvensional.



DOKUMENTASI PROGRAM :

C++

<img width="1423" height="876" alt="Dokumentasi program cpp" src="https://github.com/user-attachments/assets/51a147df-ce32-414a-bab3-e5764534e2eb" />

JAVA 

<img width="1435" height="872" alt="Dokumentasi program java" src="https://github.com/user-attachments/assets/9c41a2b1-7629-4880-9314-9e493c394946" />

PYTHON 

<img width="1395" height="862" alt="Dokumentasi program python" src="https://github.com/user-attachments/assets/55748509-f53f-49b3-8c3d-f2f49ba5c1bc" />

PHP 

Tampilkan data : 

<img width="1882" height="860" alt="Tampilkan data php" src="https://github.com/user-attachments/assets/366b1276-bdaf-4df3-97cd-3b92e8af84a0" />

Tambah Data : 

<img width="1800" height="865" alt="Tambah data php" src="https://github.com/user-attachments/assets/76fd2c65-aa2d-4783-81ec-0a70b97df049" />





