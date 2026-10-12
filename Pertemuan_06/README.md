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

> Program uji yang menggunakan daftar objek Movable, mengisi bahan bakar melalui kontrak Fuelable, dan menampilkan perilaku enum TipeBahanBakar. Pemanggilan isiPenuh menjadi contoh kesalahan tipe karena Sepeda tidak mengimplementasikan Fuelable.

**Bukti Eksekusi (Screenshot):**

<li> <b>Before </b>

![Bukti Eksekusi](Dokumentasi/MainJavaBefore.png)

<li> <b>After </b>

![Bukti Eksekusi](Dokumentasi/MainJavaAfter.png)

<b> 1.2. file `Kendaraan.java` </b>

> Kelas abstrak yang menyimpan data umum kendaraan, menyediakan perilaku bersama, dan mewajibkan kelas turunan mendefinisikan jumlah roda.

**Bukti Eksekusi (Screenshot):**

<li> <b>Before </b>

![Bukti Eksekusi](Dokumentasi/Kendaraanbefore.png)

<li> <b>After </b>

![Bukti Eksekusi](Dokumentasi/Kendaraanafter.png)

<b> 1.3. file `Mobil.java` </b>

> Kelas turunan Kendaraan yang mengimplementasikan Movable dan Fuelable, menyediakan informasi kapasitas tangki serta tipe bahan bakar.

**Bukti Eksekusi (Screenshot):**

<li> <b>Before </b>

![Bukti Eksekusi](Dokumentasi/Mobilbefore.png)

<li> <b>After </b>

![Bukti Eksekusi](Dokumentasi/MobilAfter.png)

<b> 1.4. file `Sepeda.java` </b>

> Kelas turunan Kendaraan yang mengimplementasikan Movable. Sepeda dapat bergerak, tetapi tidak memenuhi kontrak Fuelable.

**Bukti Eksekusi (Screenshot):**

![Bukti Eksekusi](Dokumentasi/Sepeda.png)

<b> 1.5. file `Movable.java` </b>

> Interface yang mendefinisikan kontrak bergerak dan kecepatan maksimum, termasuk default method untuk ringkasan gerak.

**Bukti Eksekusi (Screenshot):**

<li> <b>Before </b>

![Bukti Eksekusi](Dokumentasi/MovableBefore.png)

<li> <b>After </b>

![Bukti Eksekusi](Dokumentasi/MovableAfter.png)

<b> 1.6. file `Fuelable.java` </b>

> Interface yang mendefinisikan kontrak pengisian bahan bakar, kapasitas tangki, dan tipe bahan bakar.

**Bukti Eksekusi (Screenshot):**

![Bukti Eksekusi](Dokumentasi/fuelable.png)


<b> 1.7. file `TipeBahanBakar.java` </b>

> Enum berisi pilihan bahan bakar yang valid beserta label, harga per satuan, perhitungan biaya pengisian, dan informasi ramah lingkungan.

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

> Program PHP yang menjalankan objek kendaraan, mengisi bahan bakar melalui tipe Fuelable, menguji enum, dan memperlihatkan penggunaan trait.

** Bukti Eksekusi (Screenshot): **

<li> <b>Before </b>

![Bukti Eksekusi](Dokumentasi/BeforePHP.png)

<li> <b>After </b>

![Bukti Eksekusi](Dokumentasi/AfterPHP.png)

<b> 2.2. file `abstraksi.php` </b> 


**Penjelasan Kode**

> Berisi interface Movable dan Fuelable, enum TipeBahanBakar, serta trait Loggable untuk berbagi perilaku log. File ini juga menjadi tempat definisi abstraksi dan kelas pendukung PHP.

** Bukti Eksekusi (Screenshot): **

<li> <b>Before </b>

![Bukti Eksekusi](Dokumentasi/BeforeAbstraksiPHP.png)

<li> <b>After </b>

![Bukti Eksekusi](Dokumentasi/AfterAbstraksiPHP.png)

### output
![Hasil Output](Dokumentasi/OutputPHP.png)


## Kesimpulan

>Abstract class digunakan untuk berbagi keadaan dan perilaku dasar sekaligus memaksa kelas turunan melengkapi method abstrak. Interface mendefinisikan kemampuan yang harus dimiliki kelas, sedangkan enum membatasi pilihan nilai yang sah. Pemisahan kontrak membuat fungsi seperti isiPenuh hanya menerima objek yang benar-benar mendukung pengisian bahan bakar.
