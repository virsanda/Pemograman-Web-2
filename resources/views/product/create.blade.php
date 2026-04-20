<!DOCTYPE html>
<html>
<head>
    <title>Tambah Product</title>
</head>
<body>

    <h1>Tambah Product</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf

        <label>Nama Mobil:</label><br>
        <input type="text" name="nama_mobil" value="{{ old('nama_mobil') }}"><br><br>

        <label>Merk:</label><br>
        <input type="text" name="merk" value="{{ old('merk') }}"><br><br>

        <label>Tahun:</label><br>
        <input type="number" name="tahun" value="{{ old('tahun') }}"><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" value="{{ old('harga') }}"><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" value="{{ old('stok') }}"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi">{{ old('deskripsi') }}</textarea><br><br>

        <button type="submit">Simpan</button>
    </form>

</body>
</html>