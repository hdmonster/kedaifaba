@extends('admin.layouts.master')

@section('header')
<div class="row">
    <div class="col-6">
        <div class="pagetitle">
              <h1>{{ $title }}</h1>
        </div>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">Produk</li>
                <li class="breadcrumb-item active">{{ $product->name }}</li>
            </ol>
        </nav>
    </div>
    <div class="col-6">
        @include('admin.layouts.partials.alert')
    </div>
</div>
@endsection

@section('content')
<div class="col-xl-4 profile">

    <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="/storage/{{ $product->img_url }}" alt="Profile" class="rounded-circle">
            <h2 class="text-center"><a target="_blank" href="{{ $product->product_url }}">{{ $product->name }}</a></h2>
            <h3>@rupiah($product->price)</h3>
        </div>
    </div>

</div>

<div class="col-lg-8">

    <div class="card">
        <div class="card-body pt-3">
            <form action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf 
                @method('PUT')

                <!-- Name -->
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name', $product->name) }}">
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                
                <!-- Description -->
                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" value="{{ old('description', $product->description) }}">
                        @error('description')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Price -->
                <div class="row mb-3">
                    <label for="price" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price', $product->price) }}">
                        @error('price')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Product -->
                <div class="row mb-3">
                    <label for="product_url" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('product_url') is-invalid @enderror" name="product_url" id="product_url" value="{{ old('product_url', $product->product_url) }}">
                        @error('product_url')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Image -->
                <div class="row mb-3">
                    <label for="img_url" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control @error('img_url') is-invalid @enderror" name="img_url" id="img_url">
                        @error('img_url')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Submit -->
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-success float-end"><i class="bi bi-save"></i> Simpan</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection