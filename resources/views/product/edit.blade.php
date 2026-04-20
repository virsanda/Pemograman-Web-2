<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mobil</title>
</head>
<body>

    <h1>Edit Data Mobil</h1>

    <a href="{{ route('products.index') }}">Kembali</a>

    <br><br>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Mobil:</label><br>
        <input type="text" name="nama_mobil" value="{{ $product->nama_mobil }}"><br><br>

        <label>Merk:</label><br>
        <input type="text" name="merk" value="{{ $product->merk }}"><br><br>

        <label>Tahun:</label><br>
        <input type="number" name="tahun" value="{{ $product->tahun }}"><br><br>

        <label>Harga:</label><br>
        <input type="number" name="harga" value="{{ $product->harga }}"><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stok" value="{{ $product->stok }}"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi">{{ $product->deskripsi }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

</body>
</html>