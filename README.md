
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
git clone https://github.com/username/sistem-informasi-nilai-backeend.git backend
cd backend
```

### 2. Install Dependency Backend

```bash
composer install
```

### 3. Mengcopy File Environment
```bash
cp env example .env
```


### 4. Import database 
- Link Repositopory
https://github.com/HanaKurnia/database_pbf

💾 Cara Download File SQL dari GitHub

Untuk mengimpor database, kamu perlu file .sql yang bisa didownload dari GitHub. Berikut langkah-langkahnya:
1. Buka link repository database di browser:
https://github.com/HanaKurnia/database_pbf
2. Cari file SQL, misalnya nilai_db.sql.
3. Klik nama file nilai_db.sql untuk membukanya.
4. Setelah file terbuka, klik tombol "Download raw file" atau:
5. Simpan file tersebut di komputermu (misalnya di folder Downloads atau langsung ke folder C:\laragon\).
6. Setelah itu, lanjutkan proses import database melalui phpMyAdmin.

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
- 
### 5. Jalankan backend

```bash
php spark serve
```
lalu cek dibrowser dengan link berikut: (http://localhost:8080)


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

## Langkah Buat Project laravel 

### 1. Buka Laragon
- Jalankan Laragon
- Klik kanan ikon **Laragon** di system tray
- Pilih **Quick App > Laravel**
atau lewat terminal
```bash
composer create-priject laravel/laravel (nama-projek)
```
### 2. Tambahkan Nama Folder (Opsional)
Misalnya tambah jadi `FrontEnd`

### 3. Ubah Session Driver di env 
menjadi 
```bash
SESSION_DRIVER=file
```
## 4. Membuat View dashboard
A. Jalankan perintah untuk membuat file view. Di terminal (Laragon atau VS Code):
```bash
php artisan make:view dashboard
php artisan make:view kelas 
```
Ini akan otomatis membuat file: resources/views/dashboard.blade.php dan resources/views/kelas.blade.php
Kalau tidak berhasil, kamu bisa buat manual:
File baru: resources/views/dashboard.blade.php

B. Isi file dashboard.blade.php dengan kode berikut
```blade
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-gray-100 font-sans min-h-screen flex">

  <!-- Sidebar (pakai persis class & struktur kamu) -->
 <aside class="w-64 bg-blue-800 min-h-screen text-white p-5 flex flex-col">
  <div class="flex items-center gap-2 mb-6">
    <!-- Ikon topi beasiswa SVG -->
    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.84 4.906c0 3.042-1.129 5.824-3.16 7.416a6.987 6.987 0 01-6.16 0c-2.031-1.592-3.16-4.374-3.16-7.416a12.083 12.083 0 01.84-4.906L12 14z" />
    </svg>
    <h1 class="text-2xl font-bold text-blue-100">Sistem Informasi Nilai</h1>
  </div>

    <div class="mb-6">
      <p class="font-semibold text-white">ADMINISTRATOR</p>
      <p class="text-green-300 text-sm">● Online</p>
    </div>

    <nav class="space-y-3">
  <a href="/" class="flex items-center gap-3 px-3 py-2 rounded bg-white text-blue-800 font-semibold">
    <i data-feather="home"></i>
    <span>Dashboard</span>
  </a>
  <a href="{{ route('mahasiswa.index') }}" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-blue-600 text-blue-100">
    <i data-feather="user-check"></i>
    <span>Data Mahasiswa</span>
  </a>
  <a href="{{ route('kelas.index') }}" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-blue-600 text-blue-100">
    <i data-feather="users"></i>
    <span>Data Kelas</span>
  </a>
  <a href="{{ route('prodi.index') }}" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-blue-600 text-blue-100">
    <i data-feather="book"></i>
    <span>Data Prodi</span>
  </a>
</nav>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8 min-h-screen overflow-auto">
    <!-- Dashboard -->
    <section id="dashboard" class="page-content block">
      <h2 class="text-3xl font-bold text-gray-700 flex items-center gap-2 mb-6">
        <i data-feather="home" class="text-blue-600"></i> Dashboard
      </h2>

        <!-- Kotak selamat datang -->
  <div class="bg-white rounded-xl shadow-md p-6 mb-8 text-center">
    <h3 class="text-3xl font-bold text-gray-800 mb-2">✨Selamat Datang di Sistem Informasi Nilai✨</h3>
    <p class="text-gray-600 text-lg">Kelola data mahasiswa, kelas, dan program studi dengan mudah.</p>
  </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
  <!-- Mahasiswa -->
  <div class="bg-blue-400 text-white p-6 rounded-xl shadow hover:shadow-md transition">
    <div class="flex items-center justify-between">
      <div>
        <p class="text-3xl font-bold">2</p>
        <p class="mt-1">Mahasiswa</p>
      </div>
      <div class="text-4xl">🎓</div>
    </div>
  </div>

  <!-- Kelas -->
  <div class="bg-indigo-400 text-white p-6 rounded-xl shadow hover:shadow-md transition">
    <div class="flex items-center justify-between">
      <div>
        <p class="text-3xl font-bold">1</p>
        <p class="mt-1">Kelas</p>
      </div>
      <div class="text-4xl">🏫</div>
    </div>
  </div>

  <!-- Program Studi -->
  <div class="bg-cyan-400 text-white p-6 rounded-xl shadow hover:shadow-md transition">
    <div class="flex items-center justify-between">
      <div>
        <p class="text-3xl font-bold">3</p>
        <p class="mt-1">Program Studi</p>
      </div>
      <div class="text-4xl">📚</div>
    </div>
  </div>
</div>

    </section>

    <!-- Data Mahasiswa
    <section id="mahasiswa" class="page-content hidden">
      <h2 class="text-3xl font-bold text-gray-700 mb-6">Data Mahasiswa Terbaru</h2>
      <div class="bg-white p-6 rounded-xl shadow">
        <div class="flex justify-between items-center mb-4">
          <h3 class="text-xl font-semibold text-gray-700">Data Mahasiswa Terbaru</h3>
          <a href="tambah.html" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">+ Tambah</a>
        </div>
        <table class="w-full table-auto text-sm text-left border">
          <thead class="bg-blue-50">
            <tr>
              <th class="p-2">No</th>
              <th class="p-2">Nama</th>
              <th class="p-2">Username</th>
              <th class="p-2">Email</th>
              <th class="p-2">Jenis Kelamin</th>
              <th class="p-2">Telp</th>
              <th class="p-2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-t hover:bg-gray-50">
              <td class="p-2">1</td>
              <td class="p-2">ROHMAN</td>
              <td class="p-2">rohman</td>
              <td class="p-2">rohman@gmail.com</td>
              <td class="p-2">Pria</td>
              <td class="p-2">081212341234</td>
              <td class="p-2">
                <a href="edit.html" class="text-blue-600 hover:underline">Edit</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </section> -->

    <!-- Data Dosen
    <section id="dosen" class="page-content hidden">
      <h2 class="text-3xl font-bold text-gray-700 mb-6">Data Dosen</h2>
      <p class="text-gray-600">Konten data dosen akan muncul di sini.</p>
    </section> -->
  </main>

  <!-- <script>
    feather.replace();

    const navLinks = document.querySelectorAll(".nav-link");
    const pages = document.querySelectorAll(".page-content");

    function setActivePage(pageId) {
      pages.forEach(page => {
        if (page.id === pageId) {
          page.classList.remove("hidden");
          page.classList.add("block");
        } else {
          page.classList.add("hidden");
          page.classList.remove("block");
        }
      });

      navLinks.forEach(link => {
        if (link.dataset.page === pageId) {
          // kasih efek background putih & teks biru gelap saat aktif
          link.classList.add("bg-white", "text-blue-800", "font-semibold");
          link.classList.remove("text-blue-100");
        } else {
          link.classList.remove("bg-white", "text-blue-800", "font-semibold");
          link.classList.add("text-blue-100");
        }
      });
    }

    // Default aktif Dashboard
    setActivePage("dashboard");

    navLinks.forEach(link => {
      link.addEventListener("click", e => {
        e.preventDefault();
        const page = link.dataset.page;
        setActivePage(page);
      });
    });
  </script> -->
    <script>
    feather.replace();
  </script>
</body>
</html>
```
C. Isi file kelas.blade.php dengan kode berikut
```bash
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Data Kelas - Sistem Akademik</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-gray-100 font-sans min-h-screen flex">

  <!-- Sidebar -->
  <aside class="w-64 bg-blue-800 min-h-screen text-white p-5 flex flex-col">
    <div class="flex items-center gap-2 mb-6">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.84 4.906c0 3.042-1.129 5.824-3.16 7.416a6.987 6.987 0 01-6.16 0c-2.031-1.592-3.16-4.374-3.16-7.416a12.083 12.083 0 01.84-4.906L12 14z" />
      </svg>
      <h1 class="text-2xl font-bold text-blue-100">Sistem Informasi Nilai</h1>
    </div>

    <div class="mb-6">
      <p class="font-semibold text-white">ADMINISTRATOR</p>
      <p class="text-green-300 text-sm">● Online</p>
    </div>

       <nav class="space-y-3">
  <a href="/" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-blue-600 text-blue-100">
    <i data-feather="home"></i>
    <span>Dashboard</span>
  </a>
  <a href="{{ route('mahasiswa.index') ?? '#' }}" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-blue-600 text-blue-100">
    <i data-feather="user-check"></i>
    <span>Data Mahasiswa</span>
  </a>
  <a href="{{ route('kelas.index') }}" class="flex items-center gap-3 px-3 py-2 rounded bg-white text-blue-800 font-semibold">
    <i data-feather="users"></i>
    <span>Data Kelas</span>
  </a>
  <a href="{{ route('prodi.index') ?? '#' }}" class="flex items-center gap-3 px-3 py-2 rounded hover:bg-blue-600 text-blue-100">
    <i data-feather="book"></i>
    <span>Data Prodi</span>
  </a>
</nav>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8 min-h-screen overflow-auto">
    <section>
      <h2 class="text-3xl font-bold text-gray-700 mb-6 flex items-center gap-2">
        <i data-feather="users" class="text-blue-600"></i> Data Kelas
      </h2>

      <!-- Tombol Tambah & Search -->
      <div class="flex justify-between items-center mb-4">
        <a href="{{ route('kelas.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
          + Tambah Data
        </a>
       <form method="GET" action="{{ route('kelas.index') }}" class="relative w-64">
  <input 
    id="searchInput" 
    type="text" 
    name="search"
    placeholder="Cari kelas..." 
    value="{{ request('search') }}"
    class="pl-10 pr-4 py-2 w-full border rounded-md focus:outline-none focus:ring focus:ring-indigo-300 text-sm"
  />
  <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
  </svg>
</form>

      </div>
  
      <!-- Tabel -->
      <div class="bg-white rounded-xl shadow p-4 overflow-auto">
        <table class="min-w-full table-auto border border-gray-300">
          <thead>
            <tr class="bg-blue-100 text-left text-gray-700 text-sm uppercase">
              <th class="py-3 px-4 border border-gray-300">No</th>
              <th class="py-3 px-4 border border-gray-300">Kode Kelas</th>
              <th class="py-3 px-4 border border-gray-300">Nama Kelas</th>
              <th class="py-3 px-4 border border-gray-300 text-center">Aksi</th>
            </tr>
          </thead>
          <tbody id="kelasTableBody">
            @foreach ($kelas as $index => $kls)
              <tr class="hover:bg-gray-50">
                <td class="py-2 px-4 border border-gray-300 text-center">{{ $index + 1 }}</td>
                <td class="py-2 px-4 border border-gray-300">{{ $kls['kode_kelas'] }}</td>
                <td class="py-2 px-4 border border-gray-300">{{ $kls['nama_kelas'] }}</td>
                <td class="py-2 px-4 border border-gray-300 text-center">
                  <a href="{{ route('kelas.edit', $kls['kode_kelas']) }}" class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">Edit</a>
                  <form action="{{ route('kelas.destroy', $kls['kode_kelas']) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600">Hapus</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </section>
  </main>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Ganti ikon Feather
    feather.replace();

    // Live search di tabel kelas
    const searchInput = document.getElementById("searchInput");
    const tableBody = document.getElementById("kelasTableBody");

    searchInput.addEventListener("input", function () {
      const keyword = this.value.toLowerCase();
      const rows = tableBody.getElementsByTagName("tr");

      Array.from(rows).forEach((row) => {
        const rowText = row.textContent.toLowerCase();
        row.style.display = rowText.includes(keyword) ? "" : "none";
      });
    });
  });
  </script>
</body>
</html>
```

## 5. Membuat Controller, Model, Migration sekaligus (contoh: Prodi)
- Di terminal (Laragon atau VS Code), jalankan:
```bash
php artisan make:model prodi -mcr
```
-m : buat migration file
-c : buat controller
-r : buat controller resource (CRUD)

📂 File yang akan dibuat secara otomatis:
app/Models/Prodi.php

database/migrations/xxxx_xx_xx_create_prodis_table.php

app/Http/Controllers/ProdiController.php

B. Isi file ProdiController.php dengan kode berikut
```bash
<?php

namespace App\Http\Controllers;

use App\Models\prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $response = Http::get('http://localhost:8080/prodi');
        if ($response->successful()) {
            $prodi = $response->json();
            return view('prodi', ['prodi' => $prodi]);
        }
        return view('prodi', ['prodi' => [], 'error' => 'Gagal mengambil data prodi']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah_prodi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
        'id_prodi' => 'required|string|max:255',
        'nama_prodi' => 'required|string|max:20',
    ]);

    $response = Http::post('http://localhost:8080/prodi', $validated);

    if ($response->successful()) {
        return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil ditambahkan!');
    } else {
        return back()->withErrors('Gagal menyimpan data prodi. Silakan coba lagi.');
    }
    }
    /**
     * Display the specified resource.
     */
    public function show(prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_prodi)
    {
          $response = Http::get("http://localhost:8080/prodi/{$id_prodi}");
    if ($response->successful()) {
        $prodi = (object) $response->json(); // <- ubah di sini
        // dd($prodi);
        return view('edit_prodi', ['prodi' => $prodi]);
    }
    return redirect()->route('prodi.index')->with('error', 'Data prodi tidak ditemukan.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_prodi)
    {
         $validatedData = $request->validate([
        'id_prodi' => 'required|string|max:255',
        'nama_prodi' => 'required|string|max:20',
    ]);

    $response = Http::put("http://localhost:8080/prodi/{$id_prodi}", $validatedData);

    if ($response->successful()) {
        return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil diperbarui.');
    }

    return redirect()->back()->withErrors('Gagal memperbarui data prodi.')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_prodi)
    {
         $response = Http::delete("http://localhost:8080/prodi/{$id_prodi}");

    if ($response->successful()) {
        return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil dihapus.');
    }

    return redirect()->route('prodi.index')->with('error', 'Gagal menghapus data prodi.');
    }
}
```

## 6. 🧭 Tambahkan Routes dalam file web.php 
- Buka file routes/web.php dan tambahkan:
```bash
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ProdiController;

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('kelas', KelasController::class);
Route::resource('prodi', ProdiController::class);
```

## 7. Jalankan Laravel frontend
```bash
php artisan serve
```
setelah menjalankan laravel frontend, akan muncul output: Server running on [http://127.0.0.1:8000]. lalu Press Ctrl+C to stop the server


## Export PDF
1. Install package DOMPDF:

```bash
composer require barryvdh/laravel-dompdf
```
2. tambahkan route pdf di routes web.php
```bash
use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa/export-pdf', [MahasiswaController::class, 'exportPdf'])->name('mahasiswa.exportPdf');
```
3. Tambahkan Method exportPdf di MahasiswaController.php
```bash
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Http;

public function exportPdf()
{
    $response = Http::get('http://localhost:8080/mahasiswa');
    if (!$response->successful()) {
        return back()->withErrors(['msg' => 'Gagal mengambil data mahasiswa']);
    }

    $mahasiswa = $response->json();

    $pdf = Pdf::loadView('mahasiswa_pdf', ['mahasiswa' => $mahasiswa]);
    return $pdf->download('data_mahasiswa.pdf');
}
```
4. Buat View di resources/views/mahasiswa_pdf.blade.php
```bash
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <style>
    body { font-family: sans-serif; font-size: 12px; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #000; padding: 6px; text-align: left; }
    th { background: #f0f0f0; }
  </style>
</head>
<body>
  <h2>Data Mahasiswa</h2>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Prodi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($mahasiswa as $i => $mhs)
      <tr>
        <td>{{ $i + 1 }}</td>
        <td>{{ $mhs['npm'] }}</td>
        <td>{{ $mhs['nama_mahasiswa'] }}</td>
        <td>{{ $mhs['nama_kelas'] ?? $mhs['id_kelas'] }}</td>
        <td>{{ $mhs['nama_prodi'] ?? $mhs['kode_prodi'] }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
```

5. Tambahkan Tombol Export di View (misalnya dashboard.blade.php)
```bash
<a href="{{ route('mahasiswa.exportPdf') }}" target="_blank" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 inline-block">
  📄 Export PDF
</a>
```
