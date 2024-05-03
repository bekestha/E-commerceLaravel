@extends('frontend.layouts.headerfooter')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/home.css') }}">
@endsection
@section('body-content')
  <!--Banner Section-->
  <section class="sellerBanner">
    <div class="container">
      <div class="bannerContent">
        <h1 class="cst-font">Ekeshta Store</h1>
        <p>
          Pathari-Sanischare 1,<br>
          Morang,Nepal,<br> Mobile No. 9817365030
        </p>
      </div>
    </div>
  </section>
  <!--Seller Content-->
  <section class="sellerContent">
    <div class="container-fluid">
      <div class="row d-flex">
        <div class="col-md-3">
          <div class="leftSidebar">
            <div id="according">
              <h5 class="category">Product Category</h5>
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Staples
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="categorySublist">
                        <li class="categoryItem">
                          <a href="">Dal & Pilses</a>
                        </li>
                        <li class="categoryItem">
                          <a href="">Ghee & Edible Oils</a>
                        </li>
                        <li class="categoryItem">
                          <a href="">Atta & Flours</a>
                        </li>
                        <li class="categoryItem">
                          <a href="">Masala & Spices</a>
                        </li>
                        <li class="categoryItem">
                          <a href="">Dryfruits & Nuts</a>
                        </li>
                        <li class="categoryItem">
                          <a href="">Salt & Sugar</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Snacks-Biscuits
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="categorySublist">
                        <li class="categoryItem">
                          <a href="">Dal & Pilses</a>
                        </li>
                        <li class="categoryItem">
                          <a href="">Ghee & Edible Oils</a>
                        </li>
                        <li class="categoryItem">
                          <a href="">Atta & Flours</a>
                        </li>
                        <li class="categoryItem">
                          <a href="">Masala & Spices</a>
                        </li>
                        <li class="categoryItem">
                          <a href="">Dryfruits & Nuts</a>
                        </li>
                        <li class="categoryItem">
                          <a href="">Salt & Sugar</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Beverages
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <ul class="categorySublist">
                        <li class="categoryItem">
                          <a href="">Dal & Pilses</a>
                        </li>
                        <li class="categoryItem">
                          <a href="">Ghee & Edible Oils</a>
                        </li>
                        <li class="categoryItem">
                          <a href="">Atta & Flours</a>
                        </li>
                        <li class="categoryItem">
                          <a href="">Masala & Spices</a>
                        </li>
                        <li class="categoryItem">
                          <a href="">Dryfruits & Nuts</a>
                        </li>
                        <li class="categoryItem">
                          <a href="">Salt & Sugar</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="deliveryBanner">
            <div class="row">
              <div class="col-md-4">
                <div class="media d-flex align-items-center">
                  <img src="{{asset('frontend/delivery.jpg')}}" alt="" class="image">
                  <div class="media-body">
                    <h6>Free Home Delivery</h6>
                    <p>*for orders above<span><i class="fa-solid fa-rupee-sign">500</i></span></p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="media d-flex align-items-center">
                  <img src="{{asset('frontend/location.jpg')}}" alt="" class="image">
                  <div class="media-body">
                    <h6>Delivery Location</h6>
                    <p>upto <span>500 mtrs</span></p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="media d-flex align-items-center">
                  <img src="{{asset('frontend/clock.jpg')}}" alt="" class="image">
                  <div class="media-body">
                    <h6>Delivery between</h6>
                    <p>10 Am to 8 PM</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="row ProductThumb">
              <div class="col-md-12">
                <h5 class="categoryTitle pt-3">Dal & Spices</h5>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                  <div class="product-img">
                    <img class="card-img-top" src="{{asset('frontend/chilly.jpg')}}"alt="image">
                  </div>
                  <div class="card-body">
                    <p class="card-title">Aashirvaad Whole Atta</p>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="amount">
                        <span><i class="fa-solid fa-rupee-sign">320</i></span>
                        <span class="disabled-amount"><i class="fa-solid fa-rupee-sign">328</i></span>
                      </div>
                      <div>
                        <select name="unit" id="weight">
                          <option value="200">200</option>
                          <option value="400">400</option>
                          <option value="800">800</option>
                        </select>

                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="s-flex qty">
                        <span id="dec">-</span>
                        <input type="text" id="qty" value="1">
                        <span id="inc">+</span>
                      </div>
                      <div class="add-cart">
                        <a href="" class="btn btn-primary btn-sm">Add to Cart</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                  <div class="product-img">
                    <img class="card-img-top" src="{{asset('frontend/chilly.jpg')}}"alt="image">
                  </div>
                  <div class="card-body">
                    <p class="card-title">Aashirvaad Whole Atta</p>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="amount">
                        <span><i class="fa-solid fa-rupee-sign">320</i></span>
                        <span class="disabled-amount"><i class="fa-solid fa-rupee-sign">328</i></span>
                      </div>
                      <div>
                        <select name="unit" id="weight">
                          <option value="200">200</option>
                          <option value="400">400</option>
                          <option value="800">800</option>
                        </select>

                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="s-flex qty">
                        <span id="dec">-</span>
                        <input type="text" id="qty" value="1">
                        <span id="inc">+</span>
                      </div>
                      <div class="add-cart">
                        <a href="" class="btn btn-primary btn-sm">Add to Cart</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                  <div class="product-img">
                    <img class="card-img-top" src="{{asset('frontend/chilly.jpg')}}" alt="image">
                  </div>
                  <div class="card-body">
                    <p class="card-title">Aashirvaad Whole Atta</p>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="amount">
                        <span><i class="fa-solid fa-rupee-sign">320</i></span>
                        <span class="disabled-amount"><i class="fa-solid fa-rupee-sign">328</i></span>
                      </div>
                      <div>
                        <select name="unit" id="weight">
                          <option value="200">200</option>
                          <option value="400">400</option>
                          <option value="800">800</option>
                        </select>

                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="s-flex qty">
                        <span id="dec">-</span>
                        <input type="text" id="qty" value="1">
                        <span id="inc">+</span>
                      </div>
                      <div class="add-cart">
                        <a href="" class="btn btn-primary btn-sm">Add to Cart</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                  <div class="product-img">
                    <img class="card-img-top" src="{{asset('frontend/biscuit.jpg')}}" alt="image">
                  </div>
                  <div class="card-body">
                    <p class="card-title">Aashirvaad Whole Atta</p>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="amount">
                        <span><i class="fa-solid fa-rupee-sign">320</i></span>
                        <span class="disabled-amount"><i class="fa-solid fa-rupee-sign">328</i></span>
                      </div>
                      <div>
                        <select name="unit" id="weight">
                          <option value="200">200</option>
                          <option value="400">400</option>
                          <option value="800">800</option>
                        </select>

                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="s-flex qty">
                        <span id="dec">-</span>
                        <input type="text" id="qty" value="1">
                        <span id="inc">+</span>
                      </div>
                      <div class="add-cart">
                        <a href="" class="btn btn-primary btn-sm">Add to Cart</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                  <div class="product-img">
                    <img class="card-img-top" src="{{asset('frontend/biscuit.jpg')}}" alt="image">
                  </div>
                  <div class="card-body">
                    <p class="card-title">Aashirvaad Whole Atta</p>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="amount">
                        <span><i class="fa-solid fa-rupee-sign">320</i></span>
                        <span class="disabled-amount"><i class="fa-solid fa-rupee-sign">328</i></span>
                      </div>
                      <div>
                        <select name="unit" id="weight">
                          <option value="200">200</option>
                          <option value="400">400</option>
                          <option value="800">800</option>
                        </select>

                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="s-flex qty">
                        <span id="dec">-</span>
                        <input type="text" id="qty" value="1">
                        <span id="inc">+</span>
                      </div>
                      <div class="add-cart">
                        <a href="" class="btn btn-primary btn-sm">Add to Cart</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                  <div class="product-img">
                    <img class="card-img-top" src="{{asset('frontend/chilly.jpg')}}" alt="image">
                  </div>
                  <div class="card-body">
                    <p class="card-title">Aashirvaad Whole Atta</p>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="amount">
                        <span><i class="fa-solid fa-rupee-sign">320</i></span>
                        <span class="disabled-amount"><i class="fa-solid fa-rupee-sign">328</i></span>
                      </div>
                      <div>
                        <select name="unit" id="weight">
                          <option value="200">200</option>
                          <option value="400">400</option>
                          <option value="800">800</option>
                        </select>

                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="s-flex qty">
                        <span id="dec">-</span>
                        <input type="text" id="qty" value="1">
                        <span id="inc">+</span>
                      </div>
                      <div class="add-cart">
                        <a href="" class="btn btn-primary btn-sm">Add to Cart</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                  <div class="product-img">
                    <img class="card-img-top" src="{{asset('frontend/aatta.jpg')}}" alt="image">
                  </div>
                  <div class="card-body">
                    <p class="card-title">Aashirvaad Whole Atta</p>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="amount">
                        <span><i class="fa-solid fa-rupee-sign">320</i></span>
                        <span class="disabled-amount"><i class="fa-solid fa-rupee-sign">328</i></span>
                      </div>
                      <div>
                        <select name="unit" id="weight">
                          <option value="200">200</option>
                          <option value="400">400</option>
                          <option value="800">800</option>
                        </select>

                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="s-flex qty">
                        <span id="dec">-</span>
                        <input type="text" id="qty" value="1">
                        <span id="inc">+</span>
                      </div>
                      <div class="add-cart">
                        <a href="" class="btn btn-primary btn-sm">Add to Cart</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card">
                  <div class="product-img">
                    <img class="card-img-top" src="{{asset('frontend/chilly.jpg')}}" alt="image">
                  </div>
                  <div class="card-body">
                    <p class="card-title">Aashirvaad Whole Atta</p>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="amount">
                        <span><i class="fa-solid fa-rupee-sign">320</i></span>
                        <span class="disabled-amount"><i class="fa-solid fa-rupee-sign">328</i></span>
                      </div>
                      <div>
                        <select name="unit" id="weight">
                          <option value="200">200</option>
                          <option value="400">400</option>
                          <option value="800">800</option>
                        </select>

                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="s-flex qty">
                        <span id="dec">-</span>
                        <input type="text" id="qty" value="1">
                        <span id="inc">+</span>
                      </div>
                      <div class="add-cart">
                        <a href="" class="btn btn-primary btn-sm">Add to Cart</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection

  