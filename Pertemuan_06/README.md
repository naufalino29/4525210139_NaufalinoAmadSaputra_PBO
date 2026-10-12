# LAPORAN PRAKTIKUM PEMROGRAMAN BERBASIS OBJEK
| Informasi Praktikan | Keterangan |
| :--- | :---: |
| Nama | Naufalino Ahmad saputra |
| NPM  | 4525210139 |
|Kelas | A |
|Mata Kuliah|Pemrograman Berbasis Objek (PBO) | 
|Pertemuan | 06 - Abstract Class, Interface, dan Enum |
| Tanggal | Kamis 8 Oktober 2026 | 

## Implementasi Java

<b> 1.1. file `main.java` </b>

### Penjelasan Kode

> File ini berfungsi sebagai program utama untuk menguji seluruh kelas lain. Objek-objek yang dapat bergerak dikumpulkan dalam satu daftar bertipe Movable. Pengisian bahan bakar dilakukan lewat tipe Fuelable.

**Bukti Eksekusi (Screenshot):**

<li> <b>Before </b>

![Bukti Eksekusi](Dokumentasi/MainJavaBefore.png)

<li> <b>After </b>

![Bukti Eksekusi](Dokumentasi/MainJavaAfter.png)

<b> 1.2. file `Kendaraan.java` </b>

> Kendaraan adalah abstract class yang menjadi induk bagi semua jenis kendaraan. Kelas ini menyimpan atribut dan perilaku yang dimiliki semua kendaraan, serta mendeklarasikan method abstrak untuk jumlah roda yang wajib diimplementasikan oleh setiap kelas turunannya.

**Bukti Eksekusi (Screenshot):**

<li> <b>Before </b>

![Bukti Eksekusi](Dokumentasi/Kendaraanbefore.png)

<li> <b>After </b>

![Bukti Eksekusi](Dokumentasi/Kendaraanafter.png)

<b> 1.3. file `Mobil.java` </b>

> Mobil merupakan turunan dari Kendaraan yang menerapkan dua interface sekaligus, yaitu Movable dan Fuelable. Karena itu Mobil mampu bergerak dan diisi bahan bakar, serta menyediakan data kapasitas tangki dan jenis bahan bakar yang digunakan.

**Bukti Eksekusi (Screenshot):**

<li> <b>Before </b>

![Bukti Eksekusi](Dokumentasi/Mobilbefore.png)

<li> <b>After </b>

![Bukti Eksekusi](Dokumentasi/MobilAfter.png)

<b> 1.4. file `Sepeda.java` </b>

> Sepeda juga turunan dari Kendaraan, tetapi hanya mengimplementasikan Movable. Kelas ini bisa bergerak, namun tidak memiliki kemampuan diisi bahan bakar karena tidak menerapkan Fuelable.

**Bukti Eksekusi (Screenshot):**

![Bukti Eksekusi](Dokumentasi/Sepeda.png)

<b> 1.5. file `Movable.java` </b>

> Movable adalah interface yang menetapkan kemampuan bergerak beserta kecepatan maksimum yang harus dimiliki kelas pengimplementasinya. Interface ini juga memuat default method yang menghasilkan ringkasan informasi gerak tanpa perlu ditulis ulang di tiap kelas.

**Bukti Eksekusi (Screenshot):**

<li> <b>Before </b>

![Bukti Eksekusi](Dokumentasi/MovableBefore.png)

<li> <b>After </b>

![Bukti Eksekusi](Dokumentasi/MovableAfter.png)

<b> 1.6. file `Fuelable.java` </b>

> Fuelable adalah interface yang menetapkan aturan bagi objek yang dapat diisi bahan bakar, meliputi proses pengisian, kapasitas tangki, dan jenis bahan bakar yang dipakai.

**Bukti Eksekusi (Screenshot):**

![Bukti Eksekusi](Dokumentasi/fuelable.png)


<b> 1.7. file `TipeBahanBakar.java` </b>

> TipeBahanBakar adalah enum yang membatasi pilihan bahan bakar hanya pada nilai yang telah ditentukan. Setiap pilihan memiliki label, harga per satuan, method untuk menghitung biaya pengisian, dan keterangan apakah bahan bakar tersebut ramah lingkungan.

**Bukti Eksekusi (Screenshot):**

<li> <b>Before </b>

![Bukti Eksekusi](Dokumentasi/TipeBahanbakar.png)

<li> <b>After </b>

![Bukti Eksekusi](Dokumentasi/TipeBahanbakarAfter.png)

### output
![Hasil Output](Dokumentasi/OutputJava.png)

## Implementasi PHP

<b> 2.1. file `main.php` </b> 

**Penjelasan Kode**

> File ini adalah program utama versi PHP. Di dalamnya dibuat objek-objek kendaraan, pengisian bahan bakar dilakukan melalui tipe Fuelable, nilai enum diuji, dan penggunaan trait diperlihatkan lewat fitur pencatatan log.

** Bukti Eksekusi (Screenshot): **

<li> <b>Before </b>

![Bukti Eksekusi](Dokumentasi/BeforePHP.png)

<li> <b>After </b>

![Bukti Eksekusi](Dokumentasi/AfterPHP.png)

<b> 2.2. file `abstraksi.php` </b> 


**Penjelasan Kode**

> File ini menghimpun semua komponen abstraksi dalam PHP: interface Movable dan Fuelable, enum TipeBahanBakar, serta trait Loggable yang memungkinkan beberapa kelas memakai perilaku pencatatan log yang sama. Kelas-kelas pendukung juga didefinisikan di file ini.

** Bukti Eksekusi (Screenshot): **

<li> <b>Before </b>

![Bukti Eksekusi](Dokumentasi/BeforeAbstraksiPHP.png)

<li> <b>After </b>

![Bukti Eksekusi](Dokumentasi/AfterAbstraksiPHP.png)

### output
![Hasil Output](Dokumentasi/OutputPHP.png)


## Kesimpulan

> Dari praktikum ini dapat disimpulkan bahwa abstract class, interface, dan enum memiliki peran yang saling melengkapi. Abstract class cocok dipakai sebagai kerangka dasar, karena dapat menyimpan atribut dan perilaku bersama sekaligus mewajibkan kelas turunan mengimplementasikan method abstrak, seperti jumlah roda pada Kendaraan. Interface digunakan untuk menetapkan kemampuan tertentu yang dapat dimiliki oleh kelas yang tidak berhubungan, misalnya Movable dan Fuelable, sehingga satu kelas dapat memenuhi beberapa kontrak sekaligus. Enum membatasi suatu nilai hanya pada pilihan yang sah, seperti TipeBahanBakar, sehingga kesalahan input dapat dihindari sejak awal. Dengan memisahkan kontrak ke dalam interface yang kecil, program menjadi lebih aman dan terstruktur: fungsi isiPenuh hanya menerima objek yang benar-benar mendukung pengisian bahan bakar, sehingga Sepeda otomatis ditolak oleh compiler. Pada implementasi PHP, konsep yang sama dapat diterapkan, dan trait menambahkan cara berbagi perilaku antar kelas tanpa pewarisan.