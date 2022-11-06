@extends('site.layouts.master')

@section('content')
<section class="shop-area ptb-100">
  <div class="container">
    <div class="woocommerce-topbar">
      <div class="row align-items-center">
        <div class="col-lg-8 col-md-7 col-sm-6">
          <div class="woocommerce-result-count">
            <p>Showing 1-8 of 14 results</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-5 col-sm-6">
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
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-product-box">
          <div class="product-image">
            <a href="single-product.html">
              <img src="assets/img/shop/1.jpg" alt="image">
              <img src="assets/img/shop/1-1.jpg" alt="image">
            </a>

            <a href="single-product.html" class="add-to-cart-btn">Add To Cart <i class="flaticon-bag"></i></a>
          </div>

          <div class="product-content">
            <h3><a href="single-product.html">Green Wooden Chair</a></h3>
            <div class="price">
              <span class="new">$455.50</span>
              <span class="old">$460.50</span>
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

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-product-box">
          <div class="product-image">
            <a href="single-product.html">
              <img src="assets/img/shop/2.jpg" alt="image">
              <img src="assets/img/shop/2-1.jpg" alt="image">
            </a>

            <a href="single-product.html" class="add-to-cart-btn">Add To Cart <i class="flaticon-bag"></i></a>

            <div class="sale-btn">Sale!</div>
          </div>

          <div class="product-content">
            <h3><a href="single-product.html">White Metal Chair</a></h3>
            <div class="price">
              <span class="new">$541.50</span>
              <span class="old">$652.50</span>
            </div>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-product-box">
          <div class="product-image">
            <a href="single-product.html">
              <img src="assets/img/shop/3.jpg" alt="image">
              <img src="assets/img/shop/3-1.jpg" alt="image">
            </a>

            <a href="single-product.html" class="add-to-cart-btn">Add To Cart <i class="flaticon-bag"></i></a>
          </div>

          <div class="product-content">
            <h3><a href="single-product.html">Black Metal Desk Lamp</a></h3>
            <div class="price">
              <span class="new">$140.50</span>
              <span class="old">$150.50</span>
            </div>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-product-box">
          <div class="product-image">
            <a href="single-product.html">
              <img src="assets/img/shop/4.jpg" alt="image">
              <img src="assets/img/shop/4-1.jpg" alt="image">
            </a>

            <a href="single-product.html" class="add-to-cart-btn">Add To Cart <i class="flaticon-bag"></i></a>
          </div>

          <div class="product-content">
            <h3><a href="single-product.html">Beige Fabric Sofa</a></h3>
            <div class="price">
              <span class="new">$547.00</span>
              <span class="old">$600.00</span>
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

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-product-box">
          <div class="product-image">
            <a href="single-product.html">
              <img src="assets/img/shop/5.jpg" alt="image">
              <img src="assets/img/shop/5-1.jpg" alt="image">
            </a>

            <a href="single-product.html" class="add-to-cart-btn">Add To Cart <i class="flaticon-bag"></i></a>
          </div>

          <div class="product-content">
            <h3><a href="single-product.html">White Green Chair</a></h3>
            <div class="price">
              <span class="new">$655.50</span>
            </div>
            <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-product-box">
          <div class="product-image">
            <a href="single-product.html">
              <img src="assets/img/shop/6.jpg" alt="image">
              <img src="assets/img/shop/6-1.jpg" alt="image">
            </a>

            <a href="single-product.html" class="add-to-cart-btn">Add To Cart <i class="flaticon-bag"></i></a>
          </div>

          <div class="product-content">
            <h3><a href="single-product.html">White Chair</a></h3>
            <div class="price">
              <span class="new">$15.00</span>
              <span class="old">$20.50</span>
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

      <div class="col-lg-12 col-md-12">
        <div class="pagination-area">
          <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
          <a href="#" class="page-numbers">1</a>
          <span class="page-numbers current" aria-current="page">2</span>
          <a href="#" class="page-numbers">3</a>
          <a href="#" class="page-numbers">4</a>
          <a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
