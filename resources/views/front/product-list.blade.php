@extends("layouts.front")


@section("title","Ürün Listesi")

@push("css")

@endpush

@section("body")
<main>
    <form action="">
      <div class="row">
        <div class="col-md-3">
          <div class="row">
            <div class="col-12 product-filter">
              <div class="mt-2 filter-item-wrapper">
                <h3 class="filter-item">
                  Kategoriler
                </h3>
                <div class="filter-detail">
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                </div>
              </div>
              <div class="filter-item-wrapper">
                <h3 class="filter-item">
                  Markalar
                </h3>
                <div class="filter-detail">
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                  <div class="form-check-filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Bot</label>
                  </div>
                </div>
              </div>
              <div class="filter-item-wrapper">
                <h3 class="filter-item">
                  Cinsiyet
                </h3>
                <div class="filter-detail">
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Kadın</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Erkek</label>
                  </div>
                  <div class="form-check filter-item">
                    <input type="checkbox" class="form-check-input" value="" id="f1">
                    <label for="f1">Diğer</label>
                  </div>

                </div>
              </div>
              <div class="filter-item-wrapper">
                <h3 class="filter-item">
                  Fiyat
                </h3>
                <div class="filter-detail">
                  <div class="filter-item">
                    <div class="row filter-price">
                      <div class="col">
                        <input type="text" class="min-price form-control" placeholder="En Az">
                      </div>
                      <div class="col">
                        <input type="text" class="max-price form-control" placeholder="En Çok">
                      </div>
                      <div class="col-3">
                        <button type="submit"><i class="bi bi-search"></i></button>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="px-4 row-quick-filter">
            <div class="col-12 product-list-info">
              <div class="row">
                <div class="col">
                  <span class="text-decoration-underline product-count fw-bold-600">120 Ürün listelendi</span>
                </div>
                <div class="col">
                  <select name="sort" id="sortSelect" class="sortby float-end">
                    <option value="1">Yeni Gelenler</option>
                    <option value="2">Artan Fiyat</option>
                    <option value="3">Azalan Fiyat</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="p-4 mt-4 row products">
            <div class="mt-5 col-md-3 wrapper-product position-relative">
              <div class="product-image position-relative ">
                <a href="">
                  <img src="assets/assets/images/product1.jpeg" class="img-fluid" alt="Adidas">
                  <div class="product-overlay">
                    <span class="product-tag text-orange fw-bold-600">Yeni</span>
                    <span class="favorite"><i class="bi bi-heart"></i></span>
                    <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                    <a href="" class="product-brand text-orange">Adidas</a>
                  </div>
                </a>
              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
            </div>
            <div class="mt-5 col-md-3 wrapper-product position-relative">
              <div class="product-image position-relative">
                <a href="">
                  <img src="assets/assets/images/product1.jpeg" class="img-fluid" alt="Adidas">
                  <div class="product-overlay">
                    <span class="product-tag text-orange fw-bold-600">Yeni</span>
                    <span class="favorite"><i class="bi bi-heart"></i></span>
                    <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                    <a href="" class="product-brand text-orange">Adidas</a>
                  </div>
                </a>
              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
            </div>
            <div class="mt-5 col-md-3 wrapper-product position-relative">
              <div class="product-image position-relative">
                <a href="">
                  <img src="assets/assets/images/product1.jpeg" class="img-fluid" alt="Adidas">
                  <div class="product-overlay">
                    <span class="product-tag text-orange fw-bold-600">Yeni</span>
                    <span class="favorite"><i class="bi bi-heart"></i></span>
                    <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                    <a href="" class="product-brand text-orange">Adidas</a>
                  </div>
                </a>
              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
            </div>
            <div class="mt-5 col-md-3 wrapper-product position-relative">
              <div class="product-image position-relative">
                <a href="">
                  <img src="assets/assets/images/product1.jpeg" class="img-fluid" alt="Adidas">
                  <div class="product-overlay">
                    <span class="product-tag text-orange fw-bold-600">Yeni</span>
                    <span class="favorite"><i class="bi bi-heart"></i></span>
                    <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                    <a href="" class="product-brand text-orange">Adidas</a>
                  </div>
                </a>
              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
            </div>
            <div class="mt-5 col-md-3 wrapper-product position-relative">
              <div class="product-image position-relative">
                <a href="">
                  <img src="assets/assets/images/product1.jpeg" class="img-fluid" alt="Adidas">
                  <div class="product-overlay">
                    <span class="product-tag text-orange fw-bold-600">Yeni</span>
                    <span class="favorite"><i class="bi bi-heart"></i></span>
                    <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                    <a href="" class="product-brand text-orange">Adidas</a>
                  </div>
                </a>
              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
            </div>
            <div class="mt-5 col-md-3 wrapper-product position-relative">
              <div class="product-image position-relative">
                <a href="">
                  <img src="assets/assets/images/product1.jpeg" class="img-fluid" alt="Adidas">
                  <div class="product-overlay">
                    <span class="product-tag text-orange fw-bold-600">Yeni</span>
                    <span class="favorite"><i class="bi bi-heart"></i></span>
                    <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                    <a href="" class="product-brand text-orange">Adidas</a>
                  </div>
                </a>
              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
            </div>
            <div class="mt-5 col-md-3 wrapper-product position-relative">
              <div class="product-image position-relative">
                <a href="">
                  <img src="assets/assets/images/product1.jpeg" class="img-fluid" alt="Adidas">
                  <div class="product-overlay">
                    <span class="product-tag text-orange fw-bold-600">Yeni</span>
                    <span class="favorite"><i class="bi bi-heart"></i></span>
                    <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                    <a href="" class="product-brand text-orange">Adidas</a>
                  </div>
                </a>
              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
            </div>
            <div class="mt-5 col-md-3 wrapper-product position-relative">
              <div class="product-image position-relative">
                <a href="">
                  <img src="assets/assets/images/product1.jpeg" class="img-fluid" alt="Adidas">
                  <div class="product-overlay">
                    <span class="product-tag text-orange fw-bold-600">Yeni</span>
                    <span class="favorite"><i class="bi bi-heart"></i></span>
                    <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                    <a href="" class="product-brand text-orange">Adidas</a>
                  </div>
                </a>
              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
            </div>
            <div class="mt-5 col-md-3 wrapper-product position-relative">
              <div class="product-image position-relative">
                <a href="">
                  <img src="assets/assets/images/product1.jpeg" class="img-fluid" alt="Adidas">
                  <div class="product-overlay">
                    <span class="product-tag text-orange fw-bold-600">Yeni</span>
                    <span class="favorite"><i class="bi bi-heart"></i></span>
                    <span class="unfavorite"><i class="bi bi-heart-fill"></i></span>
                    <a href="" class="product-brand text-orange">Adidas</a>
                  </div>
                </a>
              </div>
              <div class="pt-3 text-center product-info">
                <h4 class="product-title">Niteball</h4>
                <div class="text-muted product-description">
                  Unisex
                </div>
                <a href="" class="product-price text-orange">1299,00TL</a>
              </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
              <ul class="pagination">
                <li class="active"><a href="">1</a></li>
                <li class="active"><a href="">2</a></li>
                <li class="active"><a href="">3</a></li>
                <li class="active"><a href="">4</a></li>
                <li class="active"><a href="">5</a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </form>
  </main>
@endsection

@push("js")
@endpush
