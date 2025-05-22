<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tambah mahasiswa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-gray-100 font-sans min-h-screen flex items-center justify-center">

  <div class="bg-white w-full max-w-2xl p-6 rounded-xl shadow-md">
    <h2 class="text-2xl font-bold text-gray-700 mb-6 flex items-center gap-2">
      <i data-feather="plus-circle" class="text-blue-600"></i> Tambah mahasiswa
    </h2>

    <form action="{{ route('mahasiswa.store') }}" method="POST" class="space-y-4">
      @csrf

      <div>
        <label class="block text-sm font-semibold text-gray-600 mb-1">NPM</label>
        <input type="text" name="npm" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-400" required>
      </div>

      <div>
        <label class="block text-sm font-semibold text-gray-600 mb-1">Nama mahasiswa</label>
        <input type="text" name="nama_mhs" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-400" required>
      </div>
    <div>
  <label for="kelas" class="block text-sm font-semibold text-gray-600 mb-1">Nama Kelas</label>
  <select name="kode_kelas" id="kelas" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-400" required>
    <option value="" disabled selected>-- Pilih Kelas --</option>
    @foreach ($kelas as $row)
      <option value="{{ $row['kode_kelas'] }}">{{ $row['kode_kelas'] }}</option>
    @endforeach
  </select>
    </div>

<div>
  <label for="prodi" class="block text-sm font-semibold text-gray-600 mb-1">Nama Prodi</label>
  <select name="id_prodi" id="prodi" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-400" required>
    <option value="" disabled selected>-- Pilih Prodi --</option>
    @foreach ($prodi as $row)
      <option value="{{ $row['id_prodi'] }}">{{ $row['id_prodi'] }}</option>
    @endforeach
  </select>
</div>

      
      <div class="flex justify-end gap-3 mt-6">
        <a href="{{ route('mahasiswa.index') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400">Batal</a>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Simpan</button>
      </div>
    </form>
  </div>

  <script>
    feather.replace();
  </script>
</body>
</html>