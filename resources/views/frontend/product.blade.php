@extends('frontend.layouts.headerfooter')
@section('style')
<link rel="stylesheet" href="{{ asset('frontend/product.css') }}">
@endsection
@section('body-content')
    <div class="container">
        <div class="row">
            <div clas="col-md-5">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Grocery/GroceryNewLook/grocery_sbc_coffee_440x460.jpg"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Grocery/GroceryNewLook/grocery_sbc_coffee_440x460.jpg"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Grocery/GroceryNewLook/grocery_sbc_coffee_440x460.jpg"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div clas="col-md-7">
                <p class="newarrival text-center">NEW</p>
                <h2>NESCAFE Gold Blend COFFEE </h2>
                <p>Product Code: ISRP0213</p>
                <img src="https://ethicalbargains.files.wordpress.com/2020/10/4-green-stars.png?w=864" class="stars">
                <p class="price">RS.1000</p>
                <p><b>Availability:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
                <p><b>Brand:</b> XYZ Company</p>
                <label>Quantity</label>
                <input type="text" value="1">
                <button type="button" class="cart">Add to cart</button>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div clas="col-md-5">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                src="https://growstar.in/wp-content/uploads/2020/11/o_1583752284-min.jpg"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://growstar.in/wp-content/uploads/2020/11/o_1583752284-min.jpg"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://growstar.in/wp-content/uploads/2020/11/o_1583752284-min.jpg"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div clas="col-md-7">
                <p class="newarrival text-center">NEW</p>
                <h2>FRESH ORGANIC ORANGE</h2>
                <p>Product Code: ISRP0213</p>
                <img src="https://ethicalbargains.files.wordpress.com/2020/10/4-green-stars.png?w=864" class="stars">
                <p class="price">RS.400</p>
                <p><b>Availability:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
                <p><b>Brand:</b> No Company</p>
                <label>Quantity</label>
                <input type="text" value="1">
                <button type="button" class="cart">Add to cart</button>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div clas="col-md-5">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                src="https://5.imimg.com/data5/PE/YH/CV/SELLER-30585368/aashirvaad-fortified-atta-500x500.png"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://5.imimg.com/data5/PE/YH/CV/SELLER-30585368/aashirvaad-fortified-atta-500x500.png"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://5.imimg.com/data5/PE/YH/CV/SELLER-30585368/aashirvaad-fortified-atta-500x500.png"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div clas="col-md-7">
                <p class="newarrival text-center">NEW</p>
                <h2>Aashirvad Wheat Flour Atta</h2>
                <p>Product Code: ISRP0213</p>
                <img src="https://ethicalbargains.files.wordpress.com/2020/10/4-green-stars.png?w=864" class="stars">
                <p class="price">RS.600</p>
                <p><b>Availability:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
                <p><b>Brand:</b> XYZ Company</p>
                <label>Quantity</label>
                <input type="text" value="1">
                <button type="button" class="cart">Add to cart</button>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div clas="col-md-5">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                src="https://mirchi.com/os/cdn/content/images/sugar%20free%20biscuits%20for%20diabetes%20pack%20of%208%20azista_medium_0752425.webp"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://mirchi.com/os/cdn/content/images/sugar%20free%20biscuits%20for%20diabetes%20pack%20of%208%20azista_medium_0752425.webp"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="hhttps://mirchi.com/os/cdn/content/images/sugar%20free%20biscuits%20for%20diabetes%20pack%20of%208%20azista_medium_0752425.webp"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div clas="col-md-7">
                <p class="newarrival text-center">NEW</p>
                <h2>Sugar Free Biscuit</h2>
                <p>Product Code: ISRP0213</p>
                <img src="https://ethicalbargains.files.wordpress.com/2020/10/4-green-stars.png?w=864" class="stars">
                <p class="price">RS.500</p>
                <p><b>Availability:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
                <p><b>Brand:</b> XYZ Company</p>
                <label>Quantity</label>
                <input type="text" value="1">
                <button type="button" class="cart">Add to cart</button>

            </div>
        </div>
    </div>
@endsection
    
