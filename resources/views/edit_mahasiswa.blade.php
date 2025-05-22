<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit mahasiswa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-gray-100 font-sans min-h-screen flex items-center justify-center">

  <div class="bg-white w-full max-w-2xl p-6 rounded-xl shadow-md">
    <h2 class="text-2xl font-bold text-gray-700 mb-6 flex items-center gap-2">
      <i data-feather="edit-2" class="text-yellow-500"></i> Edit mahasiswa
    </h2>

    @foreach($mahasiswa as $mhs)

    <form action="{{ route('mahasiswa.update', $mhs['npm']) }}" method="POST" class="space-y-4">
      @csrf
      @method('PUT')

      <div>
        <label class="block text-sm font-semibold text-gray-600 mb-1">npm</label>
        <input type="text" name="npm" value="{{ $mhs['npm'] }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-yellow-400" required readonly>
      </div>
      <div>
        <label class="block text-sm font-semibold text-gray-600 mb-1">Nama mahasiswa</label>
        <input type="text" name="nama_mhs" value="{{ $mhs['nama_mhs'] }}" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-yellow-400" required>
      </div>
 <div>
  <label for="kelas" class="block text-sm font-semibold text-gray-600 mb-1">Nama Prodi</label>
  <select id="kelas" name="kode_kelas" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-yellow-400" required>
    @foreach($prodi as $row)
      <option value="{{ $row['kode_kelas'] }}" {{ $mahasiswa['kode_kelas'] == $row['kode_kelas'] ? 'selected' : '' }}>
        {{ $row['kode_prodi'] }}
      </option>
    @endforeach
  </select>
</div>
 <div>
  <label for="prodi" class="block text-sm font-semibold text-gray-600 mb-1">Nama Prodi</label>
  <select id="prodi" name="id_prodi" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-yellow-400" required>
    @foreach($prodi as $row)
      <option value="{{ $row['id_prodi'] }}" {{ $mahasiswa['id_prodi'] == $row['id_prodi'] ? 'selected' : '' }}>
        {{ $row['id_prodi'] }}
      </option>
    @endforeach
  </select>
</div>
    </form>
    
    @endforeach
  </div>

  <script>
    feather.replace();
  </script>
</body>
</html>
