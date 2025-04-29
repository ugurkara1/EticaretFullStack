@extends("layouts.front")

@section("title","Ödeme Sayfası")
@push("css")
@endpush

@section("body")
<main>
    <div class="container shadow-p-5 ">
      <div class="row">
        <div class="col-md-9 order-detail-wrapper">
          <h6>SİPARİŞ BİLGİLERİ</h6>
          <form action="">
            <ul class="nav nav-tabs nav-justified">
              <li class="nav-item">
                <a class="nav-link active"
                  aria-current="page"
                  data-bs-toggle="tab"
                  href="#adresBilgileri">Adres Bilgileri
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link"
                  aria-current="page"
                  data-bs-toggle="tab"
                  href="#odemeBilgileri">Ödeme Bilgileri
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade show active" id="adresBilgileri">
                <div class="pt-3 row">
                  <div class="mb-3 col-md-6">
                    <label for="name">* AD
                      <input type="text"  id="name">
                    </label>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="lastname">* SOYAD
                      <input type="text"  id="lastname">
                    </label>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="city">* İL
                      <select  id="city">
                        <option value="">Ankara</option>
                        <option value="">İzmir</option>
                      </select>
                    </label>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="district">* İLÇE
                      <select  id="district">
                        <option value="">Ankara</option>
                        <option value="">İzmir</option>
                      </select>
                    </label>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="phone">* TELEFON
                      <input type="text"  id="phonr">
                    </label>
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="postCode">POSTA KODU
                      <input type="text"  id="postCode">
                    </label>
                  </div>

                  <div class="col-md-12">
                    <label for="address">* ADRES
                      <textarea  id="address" cols="30" rows="5"></textarea>
                    </label>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade show active" id="odemeBilgileri">
                <div class="pt-3 row">
                  <div class="mb-3 col-md-12">
                    <label for="cardNumber">* KART NUMARASI
                      <input type="text"  id="cardNumber">
                    </label>
                  </div>

                  <div class="col-md-4">
                    <label for="card-date">* SON KULLANMA TARİHİ
                      <select name="" id="card-date">
                        <option value="" disabled>Ay</option>
                        <option value="">01</option>
                        <option value="">02</option>
                        <option value="">03</option>
                        <option value="">04</option>
                        <option value="">05</option>
                        <option value="">06</option>
                        <option value="">07</option>
                      </select>
                    </label>
                  </div>
                  <div class="col-md-4">
                    <label for="card-year">* YIL
                      <select name="" id="card-year">
                        <option value="" disabled>YIL</option>
                        <option value="">2025</option>
                        <option value="">2024</option>
                        <option value="">2023</option>

                      </select>
                    </label>
                  </div>
                  <div class="col-md-4">
                    <label for="cvv">* CVV <i class="bi bi-info-circle" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Kartınızın arka yüzündeki 3 haneli rakam"></i>
                      <input type="text"  id="cvv">
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </form>

        </div>
        <div class="py-3 shadow col-md-3 basket-detail">
          <a href="" class="text-white btn bg-orange w-100 btn-approve-basket">Ödeme Yap <i class="bi bi-chevron-right"></i></a>
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
            <div class="p-4 mt-4 shadow contract">
              <label type="checkbox" >
                <input type="checkbox" id="contract">
              </label>
              <div>
                <a href="javascript::void(0)" data-bs-toggle="modal" data-bs-target="#contractModal">Ön Bilgilendirme Koşulları</a>'nı ve'
                <a href="javascript::void(0)" data-bs-toggle="model" data-bs-target="#contractModal">Satış Sözleşmesi</a>'ni okudum,onaylıyorum.'

              </div>
            </div>
          </div>
          <a href="" class="mt-4 text-white btn bg-orange w-100 btn-approve-basket">Ödeme Yap <i class="bi bi-chevron-right"></i></a>

        </div>
      </div>
    </div>

  </main>
  <!-- Modal -->
  <div class="modal fade" id="contractModal" tabindex="-1" aria-labelledby="contractModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="contractModalLabel">Sözleşmeler ve Formlar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="text-wrapper">
            <h5>Bilgilendirme Formu</h5>
            <div class="contracts-text-wrapper">
              <p>
                İşbu sözleşme, aşağıda bilgileri verilen satıcı ile alıcı arasında elektronik ortamda gerçekleştirilen satış işlemi kapsamında düzenlenmiştir.
              </p>
              <p>
                Satıcı: [Şirket Adı]<br>
                Alıcı: [Ad Soyad]
              </p>
              <p>
                Madde 1 - Konu: Bu sözleşmenin konusu, alıcının satıcıya ait web sitesinden elektronik ortamda sipariş verdiği aşağıda nitelikleri ve satış fiyatı belirtilen ürünün satışı ve teslimine ilişkin tarafların hak ve yükümlülüklerinin belirlenmesidir.
              </p>
              <p>
                Madde 2 - Ürün Bilgileri:<br>
                Ürün: [Ürün Adı]<br>
                Adet: 1<br>
                Fiyat: [XXX TL]
              </p>
              <p>
                Madde 3 - Teslimat: Ürün, alıcının belirttiği adrese, yasal süre içinde kargo aracılığıyla teslim edilecektir.
              </p>
              <p>
                Madde 4 - Cayma Hakkı: Alıcı, 14 gün içinde herhangi bir gerekçe göstermeksizin ve cezai şart ödemeksizin sözleşmeden cayma hakkına sahiptir.
              </p>
              <p>
                Cayma hakkının kullanılması durumunda ürün, kullanılmamış ve faturası ile birlikte iade edilmelidir.
              </p>
            </div>
          </div>
          <div class="text-wrapper">
            <h5>Mesafeli Satış Sözleşmesi</h5>
            <div class="contracts-text-wrapper">
              <p>
                İşbu bilgilendirme formu, 6502 sayılı Tüketicinin Korunması Hakkında Kanun ve Mesafeli Sözleşmelere Dair Yönetmelik hükümleri gereğince tüketicinin bilgilendirilmesi amacıyla düzenlenmiştir.
              </p>
              <p>
                Satıcı: [Şirket Adı]<br>
                Adres: [Şirket Adresi]<br>
                Telefon: [Telefon Numarası]<br>
                E-Posta: [E-posta Adresi]
              </p>
              <p>
                Alıcı: [Ad Soyad]<br>
                Sipariş Tarihi: [GG/AA/YYYY]
              </p>
              <p>
                Ürün ve hizmetlerin temel nitelikleri, tüm vergiler dâhil toplam satış fiyatı, ödeme ve teslimat bilgileri sistem üzerinden sipariş öncesinde alıcı tarafından görüntülenmiş ve kabul edilmiştir.
              </p>
            </div>
          </div>
        </div>
        <div class="model-footer"></div>
        <div class="mt-5 modal-footer">
          <button type="button" class="text-white btn bg-orange w-100 btn-contracts-approve">Onaylıyorum</button>
        </div>
      </div>
    </div>
  </div>

@endsection

@push("js")
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
@endpush
