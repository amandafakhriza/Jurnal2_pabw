
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form LaporBanjir</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>LaporBanjir</h1>
        <p>Form Pelaporan Banjir </p>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('laporan.store') }}" method="POST">
            @csrf

            <label>Nama Pelapor</label>
            <input type="text" name="nama"
                   value="{{ old('nama') }}" required>

            <label>Kecamatan</label>
            <input type="text" name="kecamatan"
                   value="{{ old('kecamatan') }}" required>

            <label>Desa</label>
            <input type="text" name="desa"
                   value="{{ old('desa') }}" required>

            <label>Tinggi Genangan Air (cm)</label>
            <input type="number" name="tinggi_air"
                   min="0" step="0.1"
                   value="{{ old('tinggi_air') }}" required>

            <button type="submit">Kirim Laporan</button>
        </form>
    </div>
</body>
</html>