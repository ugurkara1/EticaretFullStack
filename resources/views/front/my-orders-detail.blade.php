@extends("layouts.front")

@section("title","Sipariş Detayları")

@push("css")

@endpush

@section("body")
<main>
    <div class="container ">
      <div class="row">
        <div class="p-5 shadow col-md-12 my-orders">
          <h4>#10 Numaralı Siparişinizin Detayları</h4>
          <div class="table-responsive">

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Ürünler</th>
                    <th scope="col">Ürün Bilgi</th>
                    <th scope="col">Adet</th>
                    <th scope="col">Fiyat</th>
                    <th scope="col">Toplam Fiyat</th>
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
                  <td class="s-amount">
                    <div>1 Adet</div>
                  </td>

                  <td>
                    199,90
                  </td>
                  <td>
                    199,90
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
                  <td class="s-amount">
                    <div>1 Adet</div>
                  </td>
                  <td>
                    199,90
                  </td>
                  <td>
                    199,90
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
                  <td class="s-amount">
                    <div>1 Adet</div>
                  </td>
                  <td>
                    199,90
                  </td>
                  <td>
                    199,90
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
                  <td class="s-amount">
                    <div>1 Adet</div>
                  </td>
                  <td>
                    199,90
                  </td>
                  <td>
                    199,90
                  </td>
                  </tr>

              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="py-3 card-header">
                  <h6 class="m-0">Teslimat Bilgileri</h6>
                </div>
                <div class="card-body">
                  <h6 class="text-orange">Teslimat Adresi</h6>
                  <div my-4>Uğur Kara</div>
                  <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus repudiandae aspernatur nemo distinctio alias eligendi adipisci obcaecati quo quisquam, deserunt itaque accusamus eaque animi odio fuga dolorem cum aperiam consectetur?
                  Iure officia quia aut, officiis cumque nesciunt exercitationem similique sapiente quod maiores laudantium voluptatem culpa commodi itaque ratione rem voluptates sint, accusantium molestiae in repudiandae. Voluptate, consequuntur modi. Repellat, culpa!
                  Laboriosam expedita nobis unde consectetur odio, earum rem molestiae iusto nam! Cumque quisquam quas earum, doloribus laudantium labore maiores facere blanditiis natus deleniti voluptatum et commodi quidem, quo enim dicta.
                  Perferendis quam, necessitatibus dignissimos perspiciatis maxime architecto amet illum cum quibusdam laborum molestiae ipsa nihil vero at atque id tempora vitae? Quas architecto unde iste sapiente voluptatibus! Facilis, aliquid eius.
                  Porro beatae placeat officia tenetur unde modi quod, perspiciatis quae asperiores, culpa et nesciunt necessitatibus blanditiis at maxime dolore similique, deleniti quas laudantium inventore! Et provident laboriosam sint asperiores odit?</div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="py-3 card-header">
                  <div class="row">
                    <div class="col-md-6">
                      <h6 class="m-0">Ödeme Bilgileri</h6>
                    </div>
                    <div class="col-md-6">
                      <span class="pull-right payment-type">
                        <i class="bi bi-credit-card"></i>
                        ***3045 -Tek Çekim
                      </span>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="p-0 px-1 border-0 grand-total">
                    <p>Ürünün Toplamı: <span class="pull-right">599,70TL</span></p>
                    <p>Kargo Ücreti: <span class="pull-right">30TL</span></p>
                    <p>İndirim Kodu:
                    <br>
                        #Sepette30 <span class="pull-right">30.00TL </span>
                    </p>


                    <br>
                    <p><strong>TOPLAM:</strong> <span class="pull-right">599,78TL</span></p>

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

@endpush
