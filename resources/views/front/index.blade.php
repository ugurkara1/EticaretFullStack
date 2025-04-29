@extends("layouts.front")
@section("title","Anasayfa")
@push("css")

@endpush
@section("body")
<section class="mt-2 slider position-relative bg-orange">
    <!-- Slider main container -->
    <div class="home-swiper swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <div class="slide">
                <img src="{{asset('assets/assets/images/slide-bg-2-2.jpg')}}" alt="">
            </div>
            <div class="slider-title">
                <div class="title-wrapper">
                    <h3 class="font-playfair">SEPETTE %30 İNDİRİM</h3>
                    <h2>KAÇIRMA</h2>
                    <a href="" class="mt-3 text-center btn btn-outline-dark">SATIN AL</a>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="slide">
                <img src="{{asset('assets/assets/images/slider3.webp')}}" alt="">
            </div>
        </div>
        ...
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>
</section>

<section class="mt-5 feature-brands position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 position-relative">
        <h3 class="fw-bold-400">Markalarımız</h3>
        <div id="brandPrev" class="swiper-button-prev"></div>
        <div id="brandNext" class="swiper-button-next"></div>

      </div>
      <div class="col-12">
        <div class="mt-4 brands-swiper">
          <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="text-center swiper-slide">
              <div class="brands-slider">
                <a href="">
                  <img src="{{asset('assets/assets/images/brand1.webp')}}" alt="">
                </a>
              </div>

            </div>
            <div class="text-center swiper-slide">
              <div class="brands-slider">
                <a href="">
                  <img src="{{asset('assets/assets/images/brand2.webp')}}" alt="">
                </a>
              </div>

            </div>
            <div class="text-center swiper-slide">
              <div class="brands-slider">
                <a href="">
                  <img src="{{asset('assets/assets/images/brand3.webp')}}" alt="">
                </a>
              </div>

            </div>
            <div class="text-center swiper-slide">
              <div class="brands-slider">
                <a href="">
                  <img src="{{asset('assets/assets/images/brand4.webp')}}" alt="">
                </a>
              </div>

            </div>
            <div class="text-center swiper-slide">
              <div class="brands-slider">
                <a href="">
                  <img src="{{asset('assets/assets/images/brand5.webp')}}" alt="">
                </a>
              </div>

            </div>
            <div class="text-center swiper-slide">
              <div class="brands-slider">
                <a href="">
                  <img src="{{asset('assets/assets/images/brand6.webp')}}" alt="">
                </a>
              </div>

            </div>
            <div class="text-center swiper-slide">
              <div class="brands-slider">
                <a href="">
                  <img src="{{asset('assets/assets/images/brand7.webp')}}" alt="">
                </a>
              </div>

            </div>



          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<div class="mt-5 section feature-product-banner position-relative">
  <div class="col-12">
    <div class="banner position-relative">
      <img src="{{asset('assets/assets/images/home-banner1.jpeg')}}"  class="web banner" alt="">
    </div>
  </div>
</div>
<section class="py-5 my-5 feature-season-products position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 position-relative">
        <h3 class="fw-bold-400">Sezonun Öne Çıkanları</h3>
        <div id="seasonPrev" class="swiper-button-prev"></div>
        <div id="seasonNext" class="swiper-button-next"></div>

      </div>
      <div class="col-12">
        <div class="mt-4 season-product-swiper">
          <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide">
              <div class="wrapper-product position-relative">
                <div class="product-image position-relative">
                  <a href="">
                    <img src="{{asset('assets/assets/images/product1.jpeg')}}" class="img-fluid" alt="Adidas">
                    <div class="product-overlay">
                      <span class="product-tag text-orange fw-bold-600">Yeni</span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                      <a href="" class="product-brand text-orange">Adidas</a>

                    </div>
                  </a>
                </div>

              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>


            </div>
            <div class="swiper-slide">
              <div class="wrapper-product position-relative">
                <div class="product-image postion-relative">
                  <a href="">
                    <img src="{{asset('assets/assets/images/product1.jpeg')}}" class="img-fluid" alt="Adidas">
                    <div class="product-overlay">
                      <span class="product-tag text-orange fw-bold-600">Yeni</span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                      <a href="" class="product-brand text-orange">Adidas</a>

                    </div>
                  </a>
                </div>

              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>



            </div>
            <div class="swiper-slide">
              <div class="wrapper-product position-relative">
                <div class="product-image postion-relative">
                  <a href="">
                    <img src="{{asset('assets/assets/images/product1.jpeg')}}" class="img-fluid" alt="Adidas">
                    <div class="product-overlay">
                      <span class="product-tag text-orange fw-bold-600">Yeni</span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                      <a href="" class="product-brand text-orange">Adidas</a>

                    </div>
                  </a>
                </div>

              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
,

            </div>
            <div class="swiper-slide">
              <div class="wrapper-product position-relative">
                <div class="product-image postion-relative">
                  <a href="">
                    <img src="{{asset('assets/assets/images/product1.jpeg')}}" class="img-fluid" alt="Adidas">
                    <div class="product-overlay">
                      <span class="product-tag text-orange fw-bold-600">Yeni</span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                      <a href="" class="product-brand text-orange">Adidas</a>

                    </div>
                  </a>
                </div>
              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
,

            </div>

            <div class="swiper-slide">
              <div class="wrapper-product position-relative">
                <div class="product-image postion-relative">
                  <a href="">
                    <img src="{{asset('assets/assets/images/product1.jpeg')}}" class="img-fluid" alt="Adidas">
                    <div class="product-overlay">
                      <span class="product-tag text-orange fw-bold-600">Yeni</span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                      <a href="" class="product-brand text-orange">Adidas</a>

                    </div>
                  </a>
                </div>
              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
,

            </div>
            <div class="swiper-slide">
              <div class="wrapper-product position-relative">
                <div class="product-image postion-relative">
                  <a href="">
                    <img src="{{asset('assets/assets/images/product1.jpeg')}}" class="img-fluid" alt="Adidas">
                    <div class="product-overlay">
                      <span class="product-tag text-orange fw-bold-600">Yeni</span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                      <a href="" class="product-brand text-orange">Adidas</a>

                    </div>
                  </a>
                </div>
              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
,

            </div>
            <div class="swiper-slide">
              <div class="wrapper-product position-relative">
                <div class="product-image postion-relative">
                  <a href="">
                    <img src="{{asset('assets/assets/images/product1.jpeg')}}" class="img-fluid" alt="Adidas">
                    <div class="product-overlay">
                      <span class="product-tag text-orange fw-bold-600">Yeni</span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                      <a href="" class="product-brand text-orange">Adidas</a>

                    </div>
                  </a>
                </div>
              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
,

            </div>
            <div class="swiper-slide">
              <div class="wrapper-product position-relative">
                <div class="product-image postion-relative">
                  <a href="">
                    <img src="{{asset('assets/assets/images/product1.jpeg')}}" class="img-fluid" alt="Adidas">
                    <div class="product-overlay">
                      <span class="product-tag text-orange fw-bold-600">Yeni</span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                      <a href="" class="product-brand text-orange">Adidas</a>

                    </div>
                  </a>
                </div>
              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
,

            </div>
            <div class="swiper-slide">
              <div class="wrapper-product position-relative">
                <div class="product-image postion-relative">
                  <a href="">
                    <img src="{{asset('assets/assets/images/product1.jpeg')}}" class="img-fluid" alt="Adidas">
                    <div class="product-overlay">
                      <span class="product-tag text-orange fw-bold-600">Yeni</span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                      <a href="" class="product-brand text-orange">Adidas</a>

                    </div>
                  </a>
                </div>
              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
,

            </div>
            <div class="swiper-slide">
              <div class="wrapper-product position-relative">
                <div class="product-image postion-relative">
                  <a href="">
                    <img src="{{asset('assets/assets/images/product1.jpeg')}}" class="img-fluid" alt="Adidas">
                    <div class="product-overlay">
                      <span class="product-tag text-orange fw-bold-600">Yeni</span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="favorite"><i class="bi bi-heart"></i></span>
                      <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                      <a href="" class="product-brand text-orange">Adidas</a>

                    </div>
                  </a>
                </div>
              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
,

            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</section>

@endsection
@push("js")
    <script src="assets/js/home.js"></script>

@endpush
