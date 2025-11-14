@extends('layouts.app')

@section('content')
<style>
  body {
    background: linear-gradient(180deg, #fff7e6 0%, #ffe0b2 50%, #ffd54f 100%);
    background-image: radial-gradient(circle at 10% 10%, rgba(255, 224, 178, 0.4) 0%, transparent 50%),
                      radial-gradient(circle at 90% 90%, rgba(255, 183, 77, 0.4) 0%, transparent 50%);
    font-family: 'Poppins', sans-serif;
  }

  .content-box {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(255, 87, 34, 0.15);
    padding: 30px;
    max-width: 600px;
    margin: 0 auto;
    animation: popIn 0.6s ease;
  }

  h2 {
    color: #d84315;
    font-weight: 700;
    text-align: center;
    margin-bottom: 10px;
    text-shadow: 1px 1px 2px rgba(255, 87, 34, 0.3);
  }

  p.slogan {
    color: #ff7043;
    text-align: center;
    font-weight: 500;
    margin-bottom: 25px;
  }

  label {
    font-weight: 600;
    color: #bf360c;
  }

  .form-control {
    border-radius: 10px;
    border: 1px solid #ffcc80;
    box-shadow: 0 2px 5px rgba(255, 183, 77, 0.2);
  }

  .btn-gradient {
    background: linear-gradient(90deg, #ff9800, #ff5722);
    border: none;
    color: #fff;
    font-weight: 600;
    padding: 10px 25px;
    border-radius: 30px;
    width: 100%;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(255, 87, 34, 0.3);
  }

  .btn-gradient:hover {
    transform: scale(1.05);
    background: linear-gradient(90deg, #ffa726, #f44336);
  }

  .btn-back {
    display: inline-block;
    margin-top: 10px;
    color: #ff5722;
    text-decoration: none;
    font-weight: 600;
  }

  .btn-back:hover {
    text-decoration: underline;
  }

  @keyframes popIn {
    0% { transform: scale(0.95); opacity: 0; }
    100% { transform: scale(1); opacity: 1; }
  }
</style>

<div class="text-center mb-4">
  <img src="{{ asset('images/logo-sikriuk.png') }}" alt="Si Kriuk Logo" width="120">
  <h2>✨ Tambah Produk Si Kriuk ✨</h2>
  <p class="slogan">Bikin pelanggan makin ketagihan dengan varian baru!</p>
</div>

<div class="content-box">
  <form action="{{ route('menus.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="nama_menu" class="form-label">Nama Produk</label>
      <input type="text" class="form-control" id="nama_menu" name="nama_menu" placeholder="Contoh: Si Kriuk Pedas Level 5" required>
    </div>

    <div class="mb-3">
      <label for="harga" class="form-label">Harga (Rp)</label>
      <input type="number" class="form-control" id="harga" name="harga" placeholder="Contoh: 10000" required>
    </div>

    <div class="mb-3">
      <label for="foto" class="form-label">Foto Produk</label>
      <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
    </div>

    <button type="submit" class="btn-gradient">💾 Simpan Produk</button>
  </form>

  <a href="{{ route('menus.index') }}" class="btn-back">← Kembali ke Daftar Produk</a>
</div>
@endsection
