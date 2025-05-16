<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Selamat datang, Admin!</h1>

    <p>Jumlah User: {{ $userCount }}</p>
    <p>Jumlah Produk: {{ $productCount }}</p>
    <p>Jumlah Kategori: {{ $categoryCount }}</p>
    <p>Jumlah Transaksi: {{ $transactionCount }}</p>

    <div class="mt-4">
       <a href="{{ route('admin.products.index') }}">Kelola Produk</a>
       <a href="{{ route('categories.index') }}">Kategori</a>
    </div>

    <div class="mt-5">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</div>
</body>
</html>
