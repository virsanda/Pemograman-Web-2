<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mobil' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required',
            'deskripsi' => 'required',
        ]);

        Product::create([
            'nama_mobil' => $request->nama_mobil,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mobil' => 'required',
            'merk' => 'required',
            'tahun' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required',
            'deskripsi' => 'required',
        ]);

        $product = Product::findOrFail($id);

        $product->update([
            'nama_mobil' => $request->nama_mobil,
            'merk' => $request->merk,
            'tahun' => $request->tahun,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->route('products.index');
    }
}