@extends('site.layouts.master')

@section('content')
<section class="shop-area ptb-100">
  <div class="container">
    <div class="woocommerce-topbar">
      <div class="row align-items-center">
        <div class="col-lg-8 col-md-7 col-sm-6">
          <div class="woocommerce-result-count">
            @php
            $total = count($products);
            @endphp
            <p>Showing {{ $total }} {{ $total > 1 ? 'results' : 'result' }}</p>
          </div>
        </div>

        {{-- <div class="col-lg-4 col-md-5 col-sm-6">
          <div class="woocommerce-topbar-ordering">
            <select>
              <option value="1">Default sorting</option>
              <option value="2">Sort by popularity</option>
              <option value="0">Sort by average rating</option>
              <option value="3">Sort by latest</option>
              <option value="4">Sort by price: low to high</option>
              <option value="5">Sort by price: high to low</option>
              <option value="6">Sort by new</option>
            </select>
          </div>
        </div> --}}
      </div>
    </div>

    <div class="row">

      @foreach($products as $product)

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-product-box">
          <div class="product-image">
            <a href="{{ $product->product_url }}" target="_blank">
              <img src="{{ public_path('storage/app/public/') . $product->img_url }}" alt="image">
              <img src="{{ public_path('storage/app/public/') . $product->img_url }}" alt="image">
            </a>

            <a href="{{ $product->product_url }}" target="_blank" class="add-to-cart-btn">Lihat di Tokopedia <i
                class="flaticon-bag"></i></a>
          </div>

          <div class="product-content">
            <h3><a href="{{ $product->product_url }}" target="_blank">{{ $product->name }}</a></h3>
            <div class="price">
              <span class="new">Rp {{ $product->price }}</span>
              {{-- <span class="old">$460.50</span> --}}
            </div>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>

      @endforeach

      {{-- <div class="col-lg-12 col-md-12">
        <div class="pagination-area">
          <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
          <a href="#" class="page-numbers">1</a>
          <span class="page-numbers current" aria-current="page">2</span>
          <a href="#" class="page-numbers">3</a>
          <a href="#" class="page-numbers">4</a>
          <a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
        </div>
      </div> --}}
    </div>
  </div>
</section>
@endsection
