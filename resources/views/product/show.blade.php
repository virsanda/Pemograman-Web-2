<!DOCTYPE html>
<html>
<head>
    <title>Detail Mobil</title>
</head>
<body>

    <h1>Detail Data Mobil</h1>

    <a href="{{ route('product.index') }}">Kembali</a>

    <br><br>

    <p><strong>Nama Mobil:</strong> {{ $product->nama_mobil }}</p>
    <p><strong>Merk:</strong> {{ $product->merk }}</p>
    <p><strong>Tahun:</strong> {{ $product->tahun }}</p>
    <p><strong>Harga:</strong> {{ $product->harga }}</p>
    <p><strong>Stok:</strong> {{ $product->stok }}</p>
    <p><strong>Deskripsi:</strong> {{ $product->deskripsi }}</p>

</body>
</html>