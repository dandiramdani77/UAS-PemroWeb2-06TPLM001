UAS - 06TPLM001 - KELOMPOK 2 - 181011401732 - Arnold Agusti Pratama
UAS - 06TPLM001 - KELOMPOK 2 - 181011400220 - Dandi Ramdani
UAS - 06TPLM001 - KELOMPOK 2 - 181011400362 - Arfira Trisna Devi

Repository Jawaban UAS Mata Kuliah Pemrograman Web 2 Kelas 06TPLM001

Disusun Oleh:
1	181011400362	ARFIRA TRISNA DEVI
2	181011401013	ARIF FIANSYAH
3	181011401251	ARINDA CHINTYA SARI
4	181011401732	ARNOLD AGUSTI PRATAMA
5	171011402024	CUCU TRI RAMDANI
6	181011400220	DANDI RAMDANI
7	181011401120	DEDE AHMAD SOLIHIN
8	171011401714	DEIA IQBAL AFZANI
9	181011402409	DIAN NOVIYANTO

Link Website Aplikasi Data Relawan Covid19 : https://pemwebkelompok2.000webhostapp.com/index.php
Username : kelompok2
Password : kelompok2

Aplikasi Data Relawan Covid19 adalah aplikasi untuk mendata relawan covid19 berbasis web yang dibuat dan dikembangkan menggunakan bahasa pemrograman PHP, HTML, CSS, Java Script, template adminBSB-Material Design dengan framework Bootstrap, dan menyimpan data pada Database MySQL. Aplikasi ini bertujuan untuk memenuhi tugas akhir UAS Pemrograman Web 2 oleh Bapak Dosen Sonasa Rinusantoro S.Kom., M.A.

Pada Aplikasi Web ini diterapkan operasi CRUD (Create, Read, Update, dan Delete) menggunakan PHP sederhana dan disimpan kedalam database MySQL. 

Adapun fungsi php dari tiap fitur pada aplikasi Data Relawan Covid19 adalah sebagai berikut:

1. config.php
config.php adalah file yang digunakan untuk aplikasi web dapat terhubung dengan database MySQL sehingga dapat melakukan operasi data dasar yakni CRUD. Di dalam file ini terdapat fungsi mysqli_connect() yang digunakan untuk membuka koneksi ke server MySQL dan memilih database yang akan digunakan Adapun beberapa komponen yang terdapat pada file ini di antaranya adalah nama host, nama database, username database, serta password database. 

2. waktu.php
waktu.php adalah file yang digunakan untuk menampilkan tanggal dan waktu saat ini sesuai dengan format yang di definisikan. Di dalam PHP format tanggal dan waktu defaultnya adalah bahasa inggris maka pada file ini akan dilakukan pengubahan ke bahasa indonesia dan mengatur zona waktu menjadi Asia/Jakarta.

3. login.php
login.php adalah halaman website yang tampil terlebih dahulu saat kita mengakses link. Halaman ini menyajikan 2 buah kolom kosong, yaitu kolom "username" dan kolom "password". Fungsinya untuk membatasi hak akses para pengunjung website, dapat dikatakan bahwa hanya member terdaftar di database pada tabel tb_user saja yang bisa mengakses. Terdapat fungsi mysqli_query yang digunakan untuk mengirimkan perintah SQL ke server MySQL untuk melakukan aktivitas CRUD. Seperti Pada saat kita klik tombol login maka sintax mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'"); akan di jalankan. Apabila terdapat data user pada database maka session_start() diarahkan ke halaman index, jika tidak maka akan ditampilkan sebuah alert yang memberikan peringatan bahwa username dan password yang dimasukkan salah. 

4. index.php
index.php adalah halaman website yang tampil setelah kita berhasil login. halaman ini menampilkan menu navigasi seperti home dan data relawan. File ini akan otomatis berisikan home.php yang menjadi default. Saat tab relawan diklik maka index.php akan berisikan halaman relawan.php.

5. home.php
home.php adalah file yang digunakan untuk menampilkan jumlah data relawan covid19, jumlah data kelompok, dan tabel tentang informasi data anggota dari kelompok 2 berupa nama dan nim mahasiswa masing masing. 

6. relawan.php
relawan.php adalah file yang digunakan untuk menampilkan data relawan covid19, pada halaman ini user dapat melakukan tambah data dengan cara menekan tombol Tambah yang akan diarahkan menuju halaman tambah.php, pencetakan laporan data relawan covid19 dalam format PDF dengan menekan tombol Cetak yang akan diarahkan ke cetak.php. Pada halaman ini juga dilengkapi fitur ubah maupun fitur hapus data terhadap data relawan covid19, apabila user menekan tombol Ubah maka user akan diarahkan menuju halaman ubah.php untuk selanjutnya dapat melakukan perubahan terhadap suatu data relawan covid19, jika user menekan tombol Hapus maka menampilkan confirm dialog saat menekan tombol Ok data yang dipilih tersebut akan terhapus dari database.


7. Tambah.php
tambah.php adalah file yang digunakan untuk menambahkan data kedalam database yang didalamnya terdapat form input yang terdiri dari beberapa textfield dan satu select box provinsi yang mengambil datanya dari database tabel tb_provinsi. Terdapat sintax mysqli_query($koneksi, "INSERT INTO tb_relawan values(NULL,'$nama','$alamat','$provinsi','$email','$nohp','$keahlian')");
yang befungsi untuk mengirimkan perintah SQL dan menambah data di tabel tb_relawan pada server MySQL. Setelah berhasil menyimpan data maka user akan diarahkan kembali ke halaman relawan.php.

8. Ubah.php
ubah.php adalah file yang digunakan untuk mengubah data relawan covid19 yang sudah diinput. pada halaman ini terdapat form ubah data dimana textfield dan select boxnya terdapat data yang sudah ada di dalam database kemudian user dapat melakukan perubahan pada data tersebut. Terdapat sintax  mysqli_query($koneksi, "UPDATE tb_relawan SET nama='$nama', alamat='$alamat', provinsi='$provinsi',email='$email', nohp='$nohp',keahlian='$keahlian' WHERE id_relawan='$kode2'"); yang berfungsi untuk mengirimkan perintah SQL dan memperbarui data di tabel tb_relawan pada server MySQL. Setelah berhasil melakukan perubahan, user akan diarahkan kembali ke halaman relawan.php.

9. Cetak.php
cetak.php adalah file yang digunakan untuk mencetak semua data relawan covid19 menjadi sebuah dokumen dalam format PDF. Terdapat  sintax window.print(); yang digunakan untuk mencetak sebuah halaman website.

10. Hapus.php
hapus.php adalah file yang digunakan untuk menghapus data relawan covid19 yang dipilih oleh user. Terdapat sintax mysqli_query($koneksi, "DELETE FROM tb_relawan WHERE id_relawan ='$kode'"); yang digunakan untuk mengirimkan perintah SQL dan menghapus data berdasarkan id_relawan di tabel tb_relawan pada server MySQL. Setelah berhasil melakukan penghapusan, user akan diarahkan kembali ke halaman relawan.php.

11. Logout.php
logout.php adalah file yang digunakan untuk proses keluar dari sistem. Logout ini bertujuan untuk menjaga keamanan sebuah akun agar tidak digunakan oleh orang lain. Terdapat sintax session_destroy(); yang berfungsi untuk  menghapus semua session data di server. Setelah berhasil melakukan logout, user akan diarahkan kembali ke halaman login.php.

