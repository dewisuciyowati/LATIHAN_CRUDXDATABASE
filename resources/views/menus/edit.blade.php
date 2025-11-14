@extends('layouts.app')

@section('content')
<style>
  body {
    background: linear-gradient(180deg, #fff3e0 0%, #ffd7a0 50%, #ff9b42 100%);
    font-family: 'Poppins', sans-serif;
  }

  .card {
    background: #fffaf5;
    border: 2px solid #ff7f11;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(255, 87, 34, 0.2);
    animation: fadeIn 0.8s ease;
  }

  .card-body {
    padding: 35px;
  }

  h4 {
    color: #d84315;
    font-weight: 700;
    margin-bottom: 25px;
    text-align: center;
  }

  label {
    color: #d84315;
    font-weight: 600;
  }

  input.form-control {
    border-radius: 12px;
    border: 1px solid #ffa94d;
    padding: 10px 15px;
    background-color: #fffdfb;
    transition: all 0.2s ease;
  }

  input.form-control:focus {
    border-color: #ff5722;
    box-shadow: 0 0 0 3px rgba(255, 87, 34, 0.3);
  }

  /* Tombol pedas */
  .btn-spicy {
    background: linear-gradient(90deg, #ff7f11, #ff5722);
    border: none;
    color: #fff;
    font-weight: 600;
    padding: 10px 25px;
    border-radius: 30px;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(255, 87, 34, 0.3);
  }

  .btn-spicy:hover {
    transform: scale(1.05);
    background: linear-gradient(90deg, #ff5722, #d84315);
  }

  .btn-back {
    background-color: #ffe0b2;
    border: none;
    color: #d84315;
    border-radius: 30px;
    padding: 10px 25px;
    font-weight: 600;
    transition: all 0.3s;
  }

  .btn-back:hover {
    background-color: #ffc68a;
    color: white;
  }

  /* Preview foto */
  .preview-img {
    border-radius: 12px;
    border: 2px dashed #ff9800;
    box-shadow: 0 4px 10px rgba(255, 87, 34, 0.1);
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }

  /* Animasi bubble pedas */
  .spice {
    position: fixed;
    color: #ff5722;
    opacity: 0.4;
    animation: float 7s linear infinite;
    font-size: 18px;
    z-index: 0;
  }

  @keyframes float {
    0% { transform: translateY(100vh) scale(0.8); opacity: 0; }
    30% { opacity: 0.6; }
    100% { transform: translateY(-10vh) scale(1.2); opacity: 0; }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const spices = ["🌶", "🔥", "🍟"];
    setInterval(() => {
      const spice = document.createElement("div");
      spice.classList.add("spice");
      spice.innerText = spices[Math.floor(Math.random() * spices.length)];
      spice.style.left = Math.random() * 100 + "vw";
      spice.style.animationDuration = 5 + Math.random() * 5 + "s";
      spice.style.fontSize = 12 + Math.random() * 20 + "px";
      document.body.appendChild(spice);
      setTimeout(() => spice.remove(), 10000);
    }, 900);
  });

  // Preview foto saat diubah
  function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
      const img = document.getElementById('imgPreview');
      img.src = reader.result;
      img.style.display = 'block';
    }
    reader.readAsDataURL(event.target.files[0]);
  }
</script>

<div class="card mt-4">
  <div class="card-body">
    <h4>🌶 Edit Menu Si Kriuk</h4>
    <form action="{{ route('menus.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label>Nama Menu</label>
        <input type="text" name="nama_menu" class="form-control" value="{{ old('nama_menu', $menu->nama_menu) }}">
        @error('nama_menu') <small class="text-danger">{{ $message }}</small> @enderror
      </div>

      <div class="mb-3">
        <label>Harga (Rp)</label>
        <input type="number" name="harga" class="form-control" value="{{ old('harga', $menu->harga) }}">
        @error('harga') <small class="text-danger">{{ $message }}</small> @enderror
      </div>

      <div class="mb-3">
        <label>Foto Menu</label><br>
        @if($menu->foto)
          <img src="{{ asset('storage/'.$menu->foto) }}" width="120" class="mb-3 preview-img" id="imgPreview">
        @else
          <img id="imgPreview" width="120" style="display:none" class="mb-3 preview-img">
        @endif
        <input type="file" name="foto" class="form-control" onchange="previewImage(event)">
        @error('foto') <small class="text-danger">{{ $message }}</small> @enderror
      </div>

      <div class="mt-4 d-flex justify-content-between">
        <button class="btn-spicy">🔥 Update Menu</button>
        <a href="{{ route('menus.index') }}" class="btn-back">Kembali</a>
      </div>
    </form>
  </div>
</div>
@endsection
