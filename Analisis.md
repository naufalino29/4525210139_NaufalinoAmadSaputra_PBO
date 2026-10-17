# Analisis Desain

## Layanan ke koleksi: agregasi atau komposisi?

**Agregasi.** `PerpustakaanService` tidak membuat `Buku`. Objek `Buku` dibuat di luar lalu
diserahkan lewat `tambahKoleksi(buku)`, dan layanan hanya menyimpan referensinya.
Koleksi tetap bermakna walaupun objek layanannya dibuang atau diganti. Ini sesuai tanda
agregasi: objek bagian datang dari luar dan tetap hidup setelah dilepas.