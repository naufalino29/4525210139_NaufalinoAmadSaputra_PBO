# Bukti Relasi — Komposisi dan Agregasi (Sesi 7)
 
## Mengubah koleksi internal Buku dari luar (Java)
 
Jika `getBab()` mengembalikan list `bab` apa adanya, pemanggil bisa menjalankan
`buku.getBab().clear()` dan mengosongkan bab milik `Buku` dari luar. Itu melanggar
komposisi, karena bagian seharusnya hanya dikelola induknya.
 
Setelah diubah menjadi `List.copyOf(this.bab)`, `clear()` melempar
`UnsupportedOperationException` dan isi bab di dalam `Buku` tetap aman.

## Catatan PHP — disiplin komposisi
 
PHP tidak punya nested class seperti Java, jadi constructor `Bab` harus `public` agar
`Buku` bisa membuatnya. Akibatnya, kode lain secara teknis juga bisa menulis `new Bab(...)`.
Komposisi di PHP karena itu dijaga **lewat konvensi**: `Bab` hanya dibuat dari dalam
`Buku::tambahBab()`, dan `Buku` tidak punya method yang menerima objek `Bab` dari luar.