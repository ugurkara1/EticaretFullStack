@extends("layouts.front")

@section("title","Siparişlerim")
@push("css")
@endpush()

@section("body")

<main>
    <div class="container">
      <div class="row">
        <div class="p-5 mx-auto shadow col-md-10 my-orders">
          <div class="table-responsive">

            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Sipariş Numarası</th>
                    <th scope="col">Sipariş Durumu</th>
                    <th scope="col">Toplam Fiyat</th>
                    <th scope="col">Sipariş Detayları</th>

                    </tr>
                </thead>
              <tbody>
                  <tr>
                  <td>#10</td>
                  <td>
                    <span class="text-warning"><i class="bi bi-arrow-repeat">Hazırlanıyor</i></span>
                  </td>
                  <td>199,90</td>
                  <td>
                      <a href="" class="text-white btn btn-warning" title="Görüntüle">
                        <i class="bi bi-eye"></i>
                      </a>
                  </td>
                  </tr>
                  <tr>
                  <td>#11</td>
                  <td>
                    <span class="text-success"><i class="bi bi-check">Teslim Edildi</i></span>
                  </td>
                  <td>199,90</td>
                  <td>
                      <a href="" class="text-white btn btn-warning" title="Görüntüle">
                        <i class="bi bi-eye"></i>
                      </a>
                  </td>
                  </tr>
                  <tr>
                  <td>#10</td>
                  <td>
                    <span class="text-primary"><i class="bi bi-check-all">Onaylandı</i></span>
                  </td>
                  <td>199,90</td>
                  <td>
                      <a href="" class="text-white btn btn-warning" title="Görüntüle">
                        <i class="bi bi-eye"></i>
                      </a>
                  </td>
                  </tr>

              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>

  </main>
@endsection

@push("js")
@endpush
