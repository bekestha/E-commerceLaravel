@extends('frontend.layouts.headerfooter')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/categories.css') }}">
@endsection
@section('body-content')
  <section class="products">
    <h1 class="category">Product Categories</h1>
    <div class="all-products">
      <div class="product">
        <img src="https://as2.ftcdn.net/v2/jpg/00/97/43/17/1000_F_97431729_aYy3axeTmlshEbakBH3Uo6uBBNcARPPs.jpg">
        <div class="products-info">
          <h4 class="product-title">Vegetables</h4>
          <p class="product-price">Rs.500</p>
          <a class="product-btn" href="#">Shop Now</a>
        </div>
      </div>

      <div class="product">
        <img src="https://shreejifoods.in/cdn/shop/products/mixed-dry-fruits.jpg?v=1645517871">
        <div class="products-info">
          <h4 class="product-title">Dry Fruits</h4>
          <p class="product-price">Rs.1000</p>
          <a class="product-btn" href="#">Shop Now</a>
        </div>
      </div>

      <div class="product">
        <img src="https://5.imimg.com/data5/SA/OE/XZ/ANDROID-15534738/1568109151664-jpg-250x250.jpg">
        <div class="products-info">
          <h4 class="product-title">Atta & Flour</h4>
          <p class="product-price">Rs.700</p>
          <a class="product-btn" href="#">Shop Now</a>
        </div>
      </div>

      <div class="product">
        <img src="https://d2vgqt3b164gwy.cloudfront.net/public/uploads/product_category/spices.png">
        <div class="products-info">
          <h4 class="product-title">Masala & Spices</h4>
          <p class="product-price">Rs.800</p>
          <a class="product-btn" href="#">Shop Now</a>
        </div>
      </div>
    </div>
  </section>
  @endsection
