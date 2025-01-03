<x-admin>
  <x-slot:title>@ucfirst(auth()->user()->role) | Dashboard : {{ auth()->user()->name }}</x-slot:title>
  <div class="container-fluid">
    <div class="form-head mb-4">
      <h2 class="text-black font-w600 mb-0">Dashboard</h2>
    </div>

    @if ($haveRekening > 0)
      <div class="row">
        <div class="col-xl-6">
          <div class="row">
            <div class="col-xl-8 col-lg-6 col-md-7 col-sm-8">
              <div class="card-bx stacked">
                <img src="{{ asset('') }}assets/images/card/card.png" alt="" class="mw-100">
                <div class="card-info text-white">
                  <p class="mb-1 text-white">Total Saldo</p>
                  <h2 class="fs-36 text-white mb-sm-4 mb-3">@rupiah($saldo)</h2>
                  <div class="d-flex align-items-center justify-content-between mb-sm-5 mb-3">
                    <img src="{{ asset('') }}assets/images/dual-dot.png" alt="" class="dot-img">
                    <h4 class="fs-20 text-white mb-0">{{ $rekening->no_rekening }}</h4>
                  </div>
                  <div class="d-flex">
                    <div class="me-5">
                      <p class="fs-14 mb-1 text-white op6">{{ $rekening->kategori->nama_kategori }}</p>
                      <span>{{ $rekening->created_at->format('m/y') }}</span>
                    </div>
                    <div>
                      <p class="fs-14 mb-1 text-white op6">@ucfirst(auth()->user()->role)</p>
                      <span>{{ $rekening->nama_rekening }}</span>
                    </div>
                  </div>
                </div>
                <a href="cards-center.html"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-5 col-sm-4">
              <div class="card bgl-primary card-body overflow-hidden p-0 d-flex rounded">
                <div class="p-0 text-center mt-3">
                  <span class="text-black">Limit</span>
                  <h3 class="text-black fs-20 mb-0 font-w600">@rupiah(4000)</h3>
                  <small>/@rupiah(10000)</small>
                </div>
                <canvas id="lineChart" height="300" class="mt-auto line-chart-demo"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="row">
            <div class="col-xl-12 col-sm-12">
              <div class="card">
                <div class="card-header flex-wrap border-0 pb-0">
                  <div class="me-3 mb-2">
                    <p class="fs-14 mb-1">Pinjaman</p>
                    <span class="fs-24 text-black font-w600">@rupiah(65123)</span>
                  </div>
                  <span class="fs-12 mb-2">
                    <svg width="21" height="15" viewBox="0 0 21 15" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.999939 13.5C1.91791 12.4157 4.89722 9.22772 6.49994 7.5L12.4999 10.5L19.4999 1.5"
                        stroke="#2BC155" stroke-width="2" />
                      <path
                        d="M6.49994 7.5C4.89722 9.22772 1.91791 12.4157 0.999939 13.5H19.4999V1.5L12.4999 10.5L6.49994 7.5Z"
                        fill="url(#paint0_linear)" />
                      <defs>
                        <linearGradient id="paint0_linear" x1="10.2499" y1="3" x2="10.9999" y2="13.5"
                          gradientUnits="userSpaceOnUse">
                          <stop offset="0" stop-color="#2BC155" stop-opacity="0.73" />
                          <stop offset="1" stop-color="#2BC155" stop-opacity="0" />
                        </linearGradient>
                      </defs>
                    </svg>
                    4% (30 days)</span>
                </div>
                <div class="card-body p-0">
                  <canvas id="widgetChart1" height="80"></canvas>
                </div>
              </div>
            </div>
            <div class="col-xl-12 col-sm-12">
              <div class="card">
                <div class="card-header flex-wrap border-0 pb-0">
                  <div class="me-3 mb-2">
                    <p class="fs-14 mb-1">Gadai</p>
                    <span class="fs-24 text-black font-w600">@rupiah(24551)</span>
                  </div>
                  <span class="fs-12 mb-2">
                    <svg width="21" height="15" viewBox="0 0 21 15" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.3514 7.5C15.9974 9.37169 19.0572 12.8253 20 14H1V1L8.18919 10.75L14.3514 7.5Z"
                        fill="url(#paint0_linear1)" />
                      <path d="M19.5 13.5C18.582 12.4157 15.6027 9.22772 14 7.5L8 10.5L1 1.5" stroke="#FF2E2E"
                        stroke-width="2" stroke-linecap="round" />
                      <defs>
                        <linearGradient id="paint0_linear1" x1="10.5" y1="2.625" x2="9.64345" y2="13.9935"
                          gradientUnits="userSpaceOnUse">
                          <stop offset="0" stop-color="#FF2E2E" />
                          <stop offset="1" stop-color="#FF2E2E" stop-opacity="0.03" />
                        </linearGradient>
                      </defs>
                    </svg>
                    4% (30 days)</span>
                </div>
                <div class="card-body p-0">
                  <canvas id="widgetChart2" height="80"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-sm-12">
          <div class="card">
            <div class="card-header d-block d-sm-flex border-0">
              <div class="me-3">
                <h4 class="fs-20 text-black">Histori</h4>
                <p class="mb-0 fs-13">Lorem ipsum dolor sit amet, consectetur</p>
              </div>
            </div>
            <div class="card-body tab-content p-0">
              <div class="tab-pane active show fade" id="monthly" role="tabpanel">
                <div class="table-responsive">
                  <table class="table table-responsive-md card-table previous-transactions">
                    <tbody>
                      @foreach ($histories as $item)
                        <tr>
                          @if ($item->kegiatan == 'Tabungan Masuk' || $item->kegiatan == 'Pegadaian' || $item->kegiatan == 'Pinjaman')
                            <td>
                              <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="1.00002" y="1" width="61" height="61" rx="29"
                                  stroke="#2BC155" stroke-width="2" />
                                <g clip-path="url(#clip0)">
                                  <path
                                    d="M35.2219 42.9875C34.8938 42.3094 35.1836 41.4891 35.8617 41.1609C37.7484 40.2531 39.3453 38.8422 40.4828 37.0758C41.6477 35.2656 42.2656 33.1656 42.2656 31C42.2656 24.7875 37.2125 19.7344 31 19.7344C24.7875 19.7344 19.7344 24.7875 19.7344 31C19.7344 33.1656 20.3523 35.2656 21.5117 37.0813C22.6437 38.8477 24.2461 40.2586 26.1328 41.1664C26.8109 41.4945 27.1008 42.3094 26.7727 42.993C26.4445 43.6711 25.6297 43.9609 24.9461 43.6328C22.6 42.5063 20.6148 40.7563 19.2094 38.5578C17.7656 36.3047 17 33.6906 17 31C17 27.2594 18.4547 23.743 21.1016 21.1016C23.743 18.4547 27.2594 17 31 17C34.7406 17 38.257 18.4547 40.8984 21.1016C43.5453 23.7484 45 27.2594 45 31C45 33.6906 44.2344 36.3047 42.7852 38.5578C41.3742 40.7508 39.3891 42.5063 37.0484 43.6328C36.3648 43.9555 35.55 43.6711 35.2219 42.9875Z"
                                    fill="#2BC155" />
                                  <path
                                    d="M36.3211 31.7274C36.5891 31.9953 36.7203 32.3453 36.7203 32.6953C36.7203 33.0453 36.5891 33.3953 36.3211 33.6633L32.8812 37.1031C32.3781 37.6063 31.7109 37.8797 31.0055 37.8797C30.3 37.8797 29.6273 37.6008 29.1297 37.1031L25.6898 33.6633C25.1539 33.1274 25.1539 32.2633 25.6898 31.7274C26.2258 31.1914 27.0898 31.1914 27.6258 31.7274L29.6437 33.7453L29.6437 25.9742C29.6437 25.2196 30.2562 24.6071 31.0109 24.6071C31.7656 24.6071 32.3781 25.2196 32.3781 25.9742L32.3781 33.7508L34.3961 31.7328C34.9211 31.1969 35.7852 31.1969 36.3211 31.7274Z"
                                    fill="#2BC155" />
                                </g>
                                <defs>
                                  <clipPath id="clip0">
                                    <rect width="28" height="28" fill="white"
                                      transform="matrix(-4.37114e-08 1 1 4.37114e-08 17 17)" />
                                  </clipPath>
                                </defs>
                              </svg>
                            </td>
                          @endif
                          @if ($item->kegiatan == 'Tabungan Keluar')
                            <td>
                              <svg width="63" height="63" viewBox="0 0 63 63" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="1" y="1" width="61" height="61" rx="29" stroke="#FF2E2E"
                                  stroke-width="2" />
                                <g clip-path="url(#clip1)">
                                  <path
                                    d="M35.2219 19.0125C34.8937 19.6906 35.1836 20.5109 35.8617 20.8391C37.7484 21.7469 39.3453 23.1578 40.4828 24.9242C41.6476 26.7344 42.2656 28.8344 42.2656 31C42.2656 37.2125 37.2125 42.2656 31 42.2656C24.7875 42.2656 19.7344 37.2125 19.7344 31C19.7344 28.8344 20.3523 26.7344 21.5117 24.9187C22.6437 23.1523 24.2461 21.7414 26.1328 20.8336C26.8109 20.5055 27.1008 19.6906 26.7726 19.007C26.4445 18.3289 25.6297 18.0391 24.9461 18.3672C22.6 19.4937 20.6148 21.2437 19.2094 23.4422C17.7656 25.6953 17 28.3094 17 31C17 34.7406 18.4547 38.257 21.1015 40.8984C23.743 43.5453 27.2594 45 31 45C34.7406 45 38.257 43.5453 40.8984 40.8984C43.5453 38.2516 45 34.7406 45 31C45 28.3094 44.2344 25.6953 42.7851 23.4422C41.3742 21.2492 39.389 19.4937 37.0484 18.3672C36.3648 18.0445 35.55 18.3289 35.2219 19.0125Z"
                                    fill="#FF2E2E" />
                                  <path
                                    d="M36.3211 30.2726C36.589 30.0047 36.7203 29.6547 36.7203 29.3047C36.7203 28.9547 36.589 28.6047 36.3211 28.3367L32.8812 24.8969C32.3781 24.3937 31.7109 24.1203 31.0055 24.1203C30.3 24.1203 29.6273 24.3992 29.1297 24.8969L25.6898 28.3367C25.1539 28.8726 25.1539 29.7367 25.6898 30.2726C26.2258 30.8086 27.0898 30.8086 27.6258 30.2726L29.6437 28.2547L29.6437 36.0258C29.6437 36.7804 30.2562 37.3929 31.0109 37.3929C31.7656 37.3929 32.3781 36.7804 32.3781 36.0258L32.3781 28.2492L34.3961 30.2672C34.9211 30.8031 35.7851 30.8031 36.3211 30.2726Z"
                                    fill="#FF2E2E" />
                                </g>
                                <defs>
                                  <clipPath id="clip1">
                                    <rect width="28" height="28" fill="white"
                                      transform="translate(17 45) rotate(-90)" />
                                  </clipPath>
                                </defs>
                              </svg>
                            </td>
                          @endif
                          <td>
                            <h6 class="fs-16 font-w600 mb-0">
                              <a href="transactions-details.html" class="text-black">
                                {{ $item->kegiatan }}
                              </a>
                            </h6>
                            <span class="fs-14">Cashback</span>
                          </td>
                          <td>
                            <h6 class="fs-16 text-black font-w400 mb-0">
                              {{ \Carbon\Carbon::parse($item->tanggal)->format('F d, Y') }}
                            </h6>
                            <span class="fs-14">{{ \Carbon\Carbon::parse($item->tanggal)->format('H : i T') }}</span>
                          </td>
                          <td class="text-center">
                            <span class="fs-16 text-black font-w500">@rupiah($item->jumlah)</span>
                          </td>
                        </tr>
                      @endforeach
                    <tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @else
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Informasi</h4>
              <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal">Lihat
                token</button>

              <div class="modal fade" id="basicModal">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Token Anda</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal">
                      </button>
                    </div>
                    <div class="modal-body text-center">
                      <strong>{{ auth()->user()->token_user }}</strong>
                    </div>
                    <div class="modal-footer text-center">
                      <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="card-body">
              <p>Silahkan pergi ke kantor terdekat untuk pembuatan rekening dan berikan token anda kepada teller</p>
              <small class="text-danger">
                Jangan memberitahukan token anda kepada siapapun, kecuali kepada teller
              </small>
            </div>
          </div>
        </div>
      </div>
    @endif

  </div>
</x-admin>
