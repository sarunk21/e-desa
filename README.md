
# E Desa

![Logo](https://e-desa.up.railway.app/img/logo.png)

Project UAS Website Desa Sukamaju (Website layanan masyarakat desa sukamaju dalam mempermudah poses pelayanan seperti pembuatan dokumen identitas, pembuatan surat, dan pengaduan masyarakat desa sukamaju)



Untuk Menjalakan Website di lokal :
## Requirements
 - [Git](https://git-scm.com/)
 - [Composer](https://getcomposer.org/)
 - [Web Server](https://www.apachefriends.org/)
 - [PHP ^8.1](https://www.php.net/)

## Langkah - Langkah Instalasi
- Download source code atau clone github
- Buka terminal pada folder
- Selanjutnya masukkan perintah ini
```bash
  composer install --no-dev
  cp .example.env .env
  php artisan key:generate
```
- Kemudian buat database dan sesuikan database pada file .env
```bash
  php artisan migrate
  php artisan optimize:clear
  php artisan serve
```
- server berhasil dijalankan
## Online Demo

[E Desa](https://e-desa.up.railway.app/)

