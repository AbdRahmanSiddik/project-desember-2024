<x-admin>
  <x-slot:title>@ucfirst(auth()->user()->role) | Tabungan : {{ auth()->user()->name }}</x-slot:title>
  <div class="container-fluid">
    <div class="form-head mb-4">
      <h2 class="text-black font-w600 mb-0">Tabungan</h2>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Histori Tabungan</h4>
            <div class="btn-group">
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#tarikTunai">Tarik Tunai</button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalId">Simpan
                Tunai</button>
            </div>

            <!-- Modal simpanan -->
            <div class="modal fade bd-example-modal-lg" id="modalId" tabindex="-1" role="dialog"
              aria-labelledby="modalTitleId" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                      Simpan Tunai
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="{{ route('tabungan.store') }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="mb-3">
                                <label for="rekening_id" class="form-label required">No Rekening</label>
                                <input type="text" class="form-control" name="rekening_id" id="rekening_id" required
                                  placeholder="masukkan No Rekening(10)" />
                              </div>
                            </div>
                            <input type="text" class="form-control" name="jenis" id="jenis" value="masuk"
                              hidden />
                            <div class="col-md-12">
                              <div class="mb-3">
                                <label for="jumlah" class="form-label required">Nominal</label>
                                <input type="number" inputmode="numeric" class="form-control" name="jumlah"
                                  id="jumlah" required placeholder="min: 10000" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="ktp" class="form-label required">KTP</label>
                            <input type="number" inputmode="numeric" class="form-control" name="ktp" id="ktp"
                              placeholder="ktp tidak ditemukan" value="" disabled />
                          </div>
                          <div class="mb-3">
                            <img src="" id="imageKtp" alt="Ktp tidak ditemukan" class="img-fluid">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="mb-3">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                      </button>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Modal penarikan -->
            <div class="modal fade bd-example-modal-lg" id="tarikTunai" tabindex="-1" role="dialog"
              aria-labelledby="modalTitleId" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                      Tarik Tunai
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form action="{{ route('tabungan.store') }}" method="post" class="needs-validation" novalidate>
                    @csrf
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="mb-3">
                                <label for="rekening_ids" class="form-label required">No Rekening</label>
                                <input type="text" class="form-control" name="rekening_id" id="rekening_ids" required
                                  placeholder="masukkan No Rekening(10)" />
                              </div>
                            </div>
                            <input type="text" class="form-control" name="jenis" id="jenis" value="keluar"
                              hidden />
                            <div class="col-md-12">
                              <div class="mb-3">
                                <label for="jumlah" class="form-label required">Nominal</label>
                                <input type="number" inputmode="numeric" class="form-control" name="jumlah"
                                  id="jumlah" required placeholder="min: 10000" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="ktps" class="form-label required">KTP</label>
                            <input type="number" inputmode="numeric" class="form-control" name="ktp" id="ktps"
                              placeholder="ktp tidak ditemukan" value="" disabled />
                          </div>
                          <div class="mb-3">
                            <img src="" id="imageKtps" alt="Ktp tidak ditemukan" class="img-fluid">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="mb-3">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Close
                      </button>
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>


          </div>
          <div class="card-body">
            <div class="table-responsive table-hover">
              <table id="example3" class="display min-w850 mb-4 border-bottom border-top">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th>Nama</th>
                    <th>Nominal</th>
                    <th>Jenis</th>
                    <th>CS</th>
                    @if (auth()->user()->role != 'teller')
                      <th>Di kantor</th>
                    @endif
                    <th class="text-start">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($tabungans as $item)
                    <tr>
                      <td class="text-center">
                        <strong>{{ $loop->iteration }}</strong>
                      </td>
                      <td>
                        <p>{{ $item->rekening->no_rekening }}</p>
                        <small>{{ $item->rekening->nama_rekening }}</small>
                      </td>
                      <td>
                        <p>@rupiah($item->jumlah)</p>
                      </td>
                      <td>
                        <div class="badge {{ $item->jenis == 'masuk' ? 'badge-success' : 'badge-warning' }}">
                          {{ $item->jenis }}</div>
                      </td>
                      <td>
                        <p>{{ $item->teller->name }}</p>
                        <small>{{ $item->teller->role }}</small>
                      </td>
                      @if (auth()->user()->role != 'teller')
                        <td>
                          <p>{{ $item->teller->profile->nama_profile }}</p>
                        </td>
                      @endif
                      <td class="text-start">
                        <div class="d-flex justify-content-start gap-2">
                          <a href="{{ route('tabungan.show', $item->token_tabungan) }}"
                            class="btn btn-primary shadow btn-xs sharp"><i class="fas fa-pencil-alt"></i></a>
                          <button type="button" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal"
                            data-bs-target="#basicModal{{ $item->token_tabungan }}"><i
                              class="fas fa-trash-alt"></i></button>
                        </div>
                      </td>
                    </tr>

                    <!-- Modal delete -->
                    <div class="modal fade" id="basicModal{{ $item->token_tabungan }}">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Hapus {{ $item->token_tabungan }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Modal body text goes here.</div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger light"
                              data-bs-dismiss="modal">Close</button>
                            <form action="{{ route('rekening.destroy', $item->token_tabungan) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#rekening_id').on('input', function() {
        const noRekening = $(this).val();
        if (noRekening.length === 10) {
          $.ajax({
            url: `{{ route('rekening.api', '') }}/${noRekening}`,
            method: 'GET',
            success: function(data) {
              $('#ktp').val(data.ktp);
              $('#imageKtp').attr('src', `{{ route('ktp', '') }}/${data.foto_ktp}`);
            },
            error: function(error) {
              console.error('Error:', error);
            }
          });
        }
      });
      $('#rekening_ids').on('input', function() {
        const noRekening = $(this).val();
        if (noRekening.length === 10) {
          $.ajax({
            url: `{{ route('rekening.api', '') }}/${noRekening}`,
            method: 'GET',
            success: function(data) {
              $('#ktps').val(data.ktp);
              $('#imageKtps').attr('src', `{{ route('ktp', '') }}/${data.foto_ktp}`);
            },
            error: function(error) {
              console.error('Error:', error);
            }
          });
        }
      });
    });
  </script>
  <x-part.alert></x-part.alert>
</x-admin>
