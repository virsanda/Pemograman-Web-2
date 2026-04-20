<!DOCTYPE html>
<html>
<head>
    <title>Data Mobil</title>
</head>
<body>

    <h1>Data Mobil</h1>

    <a href="{{ route('products.create') }}">+ Tambah Mobil</a>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Mobil</th>
            <th>Merk</th>
            <th>Tahun</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        @forelse ($products as $key => $product)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $product->nama_mobil }}</td>
            <td>{{ $product->merk }}</td>
            <td>{{ $product->tahun }}</td>
            <td>Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
            <td>{{ $product->stok }}</td>
            <td>{{ $product->deskripsi }}</td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>

                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="8">Data mobil belum ada</td>
        </tr>
        @endforelse

    </table>

</body>
</html>