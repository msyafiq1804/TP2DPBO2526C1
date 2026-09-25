TUGAS PRAKTIKUM 2 DPBO

JANJI : 
Saya Muhammad Syafiq A dengan NIM 2500254 mengerjakan TP 1 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

DESKRIPSI :
Program ini mengimplementasikan konsep multilevel inheritance dalam kasus Toko Sayuran Organik pada OOP.
Terdapat 3 class:
1. Tanaman, memiliki atribut paling umum (seperti ID, nama, dan asal daerah).
2. Sayuran, turunan class tanaman, menambahkan atribut yang mulai spesifik dimiliki oleh sayur-sayuran (seperti kategori, masa panen, dan kandungan gizi).
3. SayuranOrganik, turunan class sayuran, menambahkan atribut yang mulai khusus ada pada sayuran organik yang dijual (seperti jenis pupuk, sertifikasi, dan harga per kg).

DIAGRAM KONSEP : 
<img width="895" height="1384" alt="desain tp2 drawio" src="https://github.com/user-attachments/assets/11166944-172f-445b-af0c-9242b8a05dd0" />
Alasan pemilihan class :
1. Tanaman: Tanaman merupakan class paling umum dalam dunia pertanian, bukan hanya tanaman pangan saja, tanaman juga bisa berupa tanaman hias atau tanaman obat. Oleh karena itu, saya lebih memilih memberi atribut kandungan_gizi dan masa_panen pada class Sayuran saja, karena jika ada tanaman hias di sini tentu tidak relevan jika memakai atribut kandungan gizi.
2. Sayuran: Kategori yang lebih spesifik dari tanaman, yaitu tumbuhan yang dikhususkan untuk konsumsi manusia. Atribut terkait bahan pangan (seperti gizi dan masa panen) baru ditambahkan pada tahap ini.
3. SayuranOrganik: Turunan paling akhir yang merepresentasikan produk spesifik untuk dijual. Atribut khusus bisnis dan budidaya (seperti sertifikasi dan harga) diletakkan di sini. Kedepannya, turunan lain bisa dengan mudah ditambahkan dari class Sayuran, seperti SayuranHidroponik atau SayuranKonvensional.

Class & Atribut :
Tanaman id : string  nama : string  asal_daerah : string
Sayuran (extends Tanaman) kategori : string  masa_panen : int (hari)  kandungan_gizi : string
SayuranOrganik (extends Sayuran) jenis_pupuk : string  sertifikasi : string  harga_per_kg : int (Rupiah)
