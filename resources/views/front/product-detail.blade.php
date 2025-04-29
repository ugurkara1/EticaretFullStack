@extends("layouts.front")
@section("title","Ürün Detay Sayfası")

@push("css")

@endpush

@section("body")
<main>
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="product-image-wrapper position-relative">
            <!-- Ana slider (büyük resimler için) -->
            <div class="swiper-container big-slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide big-image">
                  <div class="swiper-zoom-container">
                    <img src="assets/assets/images/product1.jpeg" />
                  </div>
                </div>
                <div class="swiper-slide big-image">
                  <div class="swiper-zoom-container">
                    <img src="assets/assets/images/product2.jpeg" />
                  </div>
                </div>
                <div class="swiper-slide big-image">
                  <div class="swiper-zoom-container">
                    <img src="assets/assets/images/product3.jpeg" />
                  </div>
                </div>
                <div class="swiper-slide big-image">
                  <div class="swiper-zoom-container">
                    <img src="assets/assets/images/product2.jpeg" />
                  </div>
                </div>
                <div class="swiper-slide big-image">
                  <div class="swiper-zoom-container">
                    <img src="assets/assets/images/product1.jpeg" />
                  </div>
                </div>
                <div class="swiper-slide big-image">
                  <div class="swiper-zoom-container">
                    <img src="assets/assets/images/product4.jpeg" />
                  </div>
                </div>
              </div>
              <!-- Ana slider için navigasyon düğmeleri -->
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>

            <!-- Thumbnail slider (küçük önizleme resimleri için) -->
            <div class="swiper-container thumb-sliders">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img class="thumb-image" src="assets/assets/images/product1.jpeg" />
                </div>
                <div class="swiper-slide">
                  <img class="thumb-image" src="assets/assets/images/product2.jpeg" />
                </div>
                <div class="swiper-slide">
                  <img class="thumb-image" src="assets/assets/images/product3.jpeg" />
                </div>
                <div class="swiper-slide">
                  <img class="thumb-image" src="assets/assets/images/product4.jpeg" />
                </div>
                <div class="swiper-slide">
                  <img class="thumb-image" src="assets/assets/images/product1.jpeg" />
                </div>
                <div class="swiper-slide">
                  <img class="thumb-image" src="assets/assets/images/product4.jpeg" />
                </div>
              </div>

              <!-- Butonlar wrapper dışında olmalı -->
              <div class="thumb-sliders-buttons">
                <span class="thumb-prev">
                  <i class="bi bi-arrow-left"></i>
                </span>
                <span class="thumb-next">
                  <i class="bi bi-arrow-right"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7 product-detail">
          <h4 class="fw-bold-600">NiteBall</h4>
          <div class="price text-orange fw-bold-600">
            199,99 TL
          </div>
          <hr cşlass="mt-5">
          <h6>Unisex Sneaker</h6>

          <hr>

          <h6>Adidas</h6>
          <p class="product-short-description font-playfair">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, eveniet. Numquam sed libero nostrum culpa sint ex. Ut enim quae optio? Fugiat molestiae ullam dolorem doloremque tenetur dicta! Laboriosam, ratione.</p>

          <div class="shopping">
            <div class="row">
              <div class="text-center col-md-1 text">
                <i class="bi bi-heart text-orange"></i>
              </div>
              <div class="col-md-5">
                <div class="piece-wrapper">
                  <div class="input-group">
                    <span class="piece-decrease">-</span>
                    <input type="text" name="value" value="0" disabled>
                    <span class="piece-increase">+</span>

                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="input-group">
                  <select name="" id="" class="text-center form-control">
                    <option disabled selected ="">Beden</option>
                    <option value="">42</option>
                    <option value="">43</option>
                    <option value="">44</option>
                    <option value="">45</option>
                    <option value="">46</option>
                  </select>
                </div>
              </div>

              <hr class="my-5">

              <div class="col-md-12">
                <a href="" class="btn bg-orange add-to-card w-100"
                >Sepete Ekle</a>
              </div>
            </div>
          </div>
          <div class="discount-rate">
            %20
            <span>İndirim</span>
          </div>
        </div>
        <div class="mt-4 col-md-12">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Ürün Hakkında
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne">
                <div class="accordion-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit voluptas nulla ratione corporis quaerat doloribus voluptates quas minus dolor, impedit, in laudantium vitae vel? Provident ex totam inventore magni eum.
                  <!-- Diğer lorem ipsum metni devam ediyor -->
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Teslimat
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo">
                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quam mollitia suscipit ipsam officiis a ab aliquam est corrupti magni non quia atque facilis at reiciendis voluptates sequi, fugiat quos!
                <!-- Diğer lorem ipsum metni devam ediyor -->
                </div>
              </div>
            </div>
          </div>

          </div>

        </div>
      </div>

    </div>
  </main>
@endsection

@push("js")
    <script src="assets/js/product-detail.js"></script>
@endpush
