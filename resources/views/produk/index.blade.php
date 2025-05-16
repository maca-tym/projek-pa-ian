@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Produk</h2>
    <a href="{{ route('products.create') }}" class="btn btn-success">Tambah Produk</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->category->name }}</td>
                <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('products.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('products.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Hapus produk ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
