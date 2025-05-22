
## Sistem Informasi Nilai

## 🧾 Prasyarat

Pastikan kamu sudah meng-install:

- **Laragon** (Download di: https://laragon.org)
- **Git** (terpasang otomatis di Laragon)
- **Composer** (terpasang otomatis di Laragon)
- Browser (Chrome/Edge)

## 📥 Cara Clone & Install BackEnd

Ikuti langkah-langkah di bawah ini untuk mulai menggunakan BackEnd dari Sistem Informasi Nilai:

### 1. Clone Repositori

```bash
git clone https://github.com/username/sistem-informasi-nilai-backeend.git
cd sistem-informasi-nilai-
```

### 2. Install Dependency Backend

```bash
composer install
```

### 3. Jalankan backend

```bash
php spark serve
```
lalu cek dibrowser dengan link berikut: (http://localhost:8080)
### 4. Import database 
- Link Repositopory
https://github.com/HanaKurnia/database_pbf

🗃️ Langkah Import Database

Ikuti langkah berikut untuk mengimpor database agar backend Laravel bisa langsung digunakan:

1. Buka phpMyAdmin
- Jalankan Laragon
- Klik kanan ikon Laragon di system tray
- Pilih Database > phpMyAdmin

2. Buat Database Baru
- Klik New di sidebar kiri
- Masukkan nama database, misalnya: sinilai2
- Klik Create

3. Import File SQL
- Setelah database dibuat, klik database nilai_db
- Pilih tab Import
- Klik Choose File dan pilih file SQL kamu (misalnya nilai_db.sql)
- Klik Go

📡 Cara Cek Endpoint API Laravel via Postman
- Dosen

GET http://localhost:8080/dosen

POST http://localhost:8080/dosen/{id dosen}

DEL http://localhost:8080/dosen/{id dosen}

PUT http://localhost:8080/dosen/{id dosen}

- Mahasiswa

GET http://localhost:8080/mahasiswa

POST http://localhost:8080/mahasiswa/{id mahasiswa}

DEL http://localhost:8080/mahasiswa/{id mahasiswa}

PUT http://localhost:8080/mahasiswa/{id mahasiswa}

- Kelas

GET http://localhost:8080/kelas

POST http://localhost:8080/kelas/{id kelas}

DEL http://localhost:8080/kelas/{id kelas}

PUT http://localhost:8080/kelas/{id kelas}

- Mata Kuliah

GET http://localhost:8080/matakuliah

POST http://localhost:8080/matakuliah/{id mata kuliah}

DEL http://localhost:8080/matakuliah/{id mata kuliah}

PUT http://localhost:8080/matakuliah/{id mata kuliah}

- Nilai

GET http://localhost:8080/nilai

POST http://localhost:8080/nilai/{id nilai}

DEL http://localhost:8080/nilai/{id nilai}

PUT http://localhost:8080/nilai/{id nilai}

- Prodi

GET http://localhost:8080/prodi

POST http://localhost:8080/prodi/{id prodi}

DEL http://localhost:8080/prodi/{id prodi}

PUT http://localhost:8080/prodi/{id prodi}



## 🌐 Setup Frontend

Langkah Buat Project laravel 

### 1. Buka Laragon
- Jalankan Laragon
- Klik kanan ikon **Laragon** di system tray
- Pilih **Quick App > Laravel**
- 
### 2. Tambahkan Nama Folder (Opsional)
Misalnya tambah jadi `sistem-informasi-nilai-frontEnd`

### 3. Jalankan Laravel frontend
```bash
php artisan serve
```
setelah menjalankan laravel frontend, akan muncul output: Server running on [http://127.0.0.1:8000]. lalu Press Ctrl+C to stop the server

## 📦 Membuat Controller, Model, Migration sekaligus (contoh: Dashboard)
- Di terminal (Laragon atau VS Code), jalankan:
```bash
php artisan make:model dashboard -mcr
```
-m : buat migration file
-c : buat controller
-r : buat controller resource (CRUD)

## 🧭 Tambahkan Routes dalam file web.php 
- Buka file routes/web.php dan tambahkan:
```bash
Route::get('/', function () {
    return view('dashboard');
});
```

## 🖼️ Membuat View
- Di terminal (Laragon atau VS Code), jalankan:
```bash
php artisan make:view dashboard 
```

