<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Mahasiswa</title>
  <style>
    body { font-family: sans-serif; font-size: 12px; }
    table { width: 100%; border-collapse: collapse; margin-top: 20px; }
    th, td { border: 1px solid #000; padding: 6px; text-align: left; }
    th { background-color: #eee; }
  </style>
</head>
<body>
  <h2 style="text-align: center;">Laporan Data Mahasiswa</h2>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Kode Kelas</th>
        <th>ID Prodi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($mahasiswa as $index => $mhs)
      <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $mhs['npm'] }}</td>
        <td>{{ $mhs['nama_mhs'] }}</td>
        <td>{{ $mhs['kode_kelas'] }}</td>
        <td>{{ $mhs['id_prodi'] }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
