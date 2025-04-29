@extends("layouts.front")
@section("title","Sepet")

@push("css")
@endpush

@section("body")
<main>
    <div class="container ">
      <div class="row">
        <div class="col-md-8 offset-md-1 card-page">
          <h4>Sepetim</h4>
          <div class="table-responsive">

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Ürünler</th>
                    <th scope="col">Ürün Bilgi</th>
                    <th scope="col">Adet</th>
                    <th scope="col">Fiyat</th>
                    <th scope="col">Toplam Fiyat</th>
                    <th scope="col">Sil</th>
                    </tr>
                </thead>
              <tbody>
                  <tr>
                  <td><img src="assets/assets/images/product1.jpeg" alt=""></td>
                  <td>
                    <div>NiteBall</div>
                    <div>Unisex Sneaker</div>
                    <div>Adidas</div>
                    <div>Beden:37</div>
                  </td>
                  <td>
                    <div class="piece-wrapper">
                      <div class="input-group">
                        <span class="piece-decrease">-</span>
                        <input type="text" name="value" value="0" disabled>
                        <span class="piece-increase">+</span>

                      </div>
                    </div>
                  </td>
                  <td>
                    <td>199,90</td>
                    <td class="bi bi-trash text-orange"></td>
                  </td>
                  </tr>
                  <tr>
                    <td><img src="assets/assets/images/product1.jpeg" alt=""></td>
                    <td>
                      <div>NiteBall</div>
                      <div>Unisex Sneaker</div>
                      <div>Adidas</div>
                      <div>Beden:37</div>
                    </td>
                    <td>
                      <div class="piece-wrapper">
                        <div class="input-group">
                          <span class="piece-decrease">-</span>
                          <input type="text" name="value" value="0" disabled>
                          <span class="piece-increase">+</span>

                        </div>
                      </div>
                    </td>
                    <td>
                      <td>199,90</td>
                      <td class="bi bi-trash text-orange"></td>
                    </td>
                    </tr>
                                        <tr>
                  <td><img src="assets/assets/images/product1.jpeg" alt=""></td>
                  <td>
                    <div>NiteBall</div>
                    <div>Unisex Sneaker</div>
                    <div>Adidas</div>
                    <div>Beden:37</div>
                  </td>
                  <td>
                    <div class="piece-wrapper">
                      <div class="input-group">
                        <span class="piece-decrease">-</span>
                        <input type="text" name="value" value="0" disabled>
                        <span class="piece-increase">+</span>

                      </div>
                    </div>
                  </td>
                  <td>
                    <td>199,90</td>
                    <td class="bi bi-trash text-orange"></td>
                  </td>
                  </tr>
                                      <tr>
                  <td><img src="assets/assets/images/product1.jpeg" alt=""></td>
                  <td>
                    <div>NiteBall</div>
                    <div>Unisex Sneaker</div>
                    <div>Adidas</div>
                    <div>Beden:37</div>
                  </td>
                  <td>
                    <div class="piece-wrapper">
                      <div class="input-group">
                        <span class="piece-decrease">-</span>
                        <input type="text" name="value" value="0" disabled>
                        <span class="piece-increase">+</span>

                      </div>
                    </div>
                  </td>
                  <td>
                    <td>199,90</td>
                    <td class="bi bi-trash text-orange"></td>
                  </td>
                  </tr>
                                      <tr>
                  <td><img src="assets/assets/images/product1.jpeg" alt=""></td>
                  <td>
                    <div>NiteBall</div>
                    <div>Unisex Sneaker</div>
                    <div>Adidas</div>
                    <div>Beden:37</div>
                  </td>
                  <td>
                    <div class="piece-wrapper">
                      <div class="input-group">
                        <span class="piece-decrease">-</span>
                        <input type="text" name="value" value="0" disabled>
                        <span class="piece-increase">+</span>

                      </div>
                    </div>
                  </td>
                  <td>
                    <td>199,90</td>
                    <td class="bi bi-trash text-orange"></td>
                  </td>
                  </tr>
                                      <tr>
                  <td><img src="assets/assets/images/product1.jpeg" alt=""></td>
                  <td>
                    <div>NiteBall</div>
                    <div>Unisex Sneaker</div>
                    <div>Adidas</div>
                    <div>Beden:37</div>
                  </td>
                  <td>
                    <div class="piece-wrapper">
                      <div class="input-group">
                        <span class="piece-decrease">-</span>
                        <input type="text" name="value" value="0" disabled>
                        <span class="piece-increase">+</span>

                      </div>
                    </div>
                  </td>
                  <td>
                    <td>199,90</td>
                    <td class="bi bi-trash text-orange"></td>
                  </td>
                  </tr>
              </tbody>
            </table>
          </div>

        </div>
        <div class="py-3 shadow col-md-3 basket-detail">
          <a href="" class="text-white btn bg-orange w-100 btn-approve-basket">Sepeti Onayla <i class="bi bi-chevron-right"></i></a>
          <div class="mt-4 grand-total">
            <p>Ürünün Toplamı: <span class="pull-right">599,70TL</span></p>
            <p>Kargo Ücreti: <span class="pull-right">30TL</span></p>
            <p>İndirim Kodu:
            <br>
                #Sepette30 <span class="pull-right">30.00TL <i class="bi bi-trash"></i></span>
            </p>


            <br>
            <p><strong>TOPLAM:</strong> <span class="pull-right">599,78TL</span></p>

          </div>
          <div class="discount-wrapper">
            <br>
            <h5 class="text-orange">İNDİRİM KODU</h5>
            <div class="mb-3 input-group">
              <input type="text" class="form-control" placeholder="İndirim Kodu Gir">
              <button class="btn btn-outline-success" type="button" >Uygula</button>
            </div>

          </div>
          <a href="" class="mt-4 text-white btn bg-orange w-100 btn-approve-basket">Sepeti Onayla <i class="bi bi-chevron-right"></i></a>

        </div>
      </div>
    </div>

  </main>

@push("js")
    <script src="assets/js/product-detail.js"></script>

@endpush

@endsection
