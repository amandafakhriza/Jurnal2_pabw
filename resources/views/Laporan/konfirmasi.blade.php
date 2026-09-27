
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konfirmasi Laporan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Laporan Berhasil Diterima</h1>
        <p>Berikut data laporan banjir Anda.</p>

        <div class="hasil">
            <p><strong>Nama:</strong>
                {{ $data['nama'] }}</p>

            <p><strong>Kecamatan:</strong>
                {{ $data['kecamatan'] }}</p>

            <p><strong>Desa:</strong>
                {{ $data['desa'] }}</p>

            <p><strong>Tinggi Genangan:</strong>
                {{ $data['tinggi_air'] }} cm</p>
        </div>

        <p class="info">
            Data laporan tidak disimpan secara permanen.
        </p>

        <a href="{{ route('laporan.form') }}"
           class="btn">Buat Laporan Baru</a>
    </div>
</body>
</html>