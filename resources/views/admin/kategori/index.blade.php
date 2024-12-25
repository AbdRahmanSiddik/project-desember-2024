<x-admin>
  <div class="container-fluid">
    <div class="form-head mb-4">
      <h2 class="text-black font-w600">Kategori</h2>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header border-bottom border-primary">
            <h4 class="card-title">List Kategori</h4>
            <button type="button" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
              aria-controls="offcanvasRight"><i class="fa-sharp fa-regular fa-plus fw-bold"></i> Tambah
              Kategori</button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
              aria-labelledby="offcanvasRightLabel">
              <div class="offcanvas-header border-bottom border-primary">
                <h5 class="offcanvas-title" id="offcanvasRightLabel">Form Tambah kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <form class="form-valide-with-icon needs-validation" novalidate method="POST"
                  action="{{ route('kategori.store') }}">
                  <div class="mb-3 vertical-radius">
                    <label class="text-label form-label required" for="nama_kategori">Nama Kategori</label>
                    <div class="input-group validate-username">
                      <span class="input-group-text search_icon"> <i class="fa fa-user"></i>
                      </span>
                      <input type="text" class="form-control br-style" id="nama_kategori"
                        placeholder="Masukkan nama kategori.." required>
                      <div class="invalid-feedback">
                        Please Enter a username.
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 vertical-radius">
                    <label class="text-label form-label required" for="biaya`">Biaya</label>
                    <div class="input-group validate-username">
                      <input type="number" class="form-control text-end" id="biaya`"
                        placeholder="Ex: 0,3" required pattern="\d*\.?\d+" inputmode="numeric">
                      <span class="input-group-text search_icon br-style"> %</i>
                      </span>
                      <div class="invalid-feedback">
                        Please Enter a username.
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 vertical-radius">
                    <label class="text-label form-label required" for="deskripsi">Deskripsi</label>
                    <div class="input-group validate-username">
                      <textarea name="deskripsi" id="deskripsi" cols="100%" rows="10" class="form-control" placeholder="Masukkan Deskripsi"></textarea>
                      <div class="invalid-feedback">
                        Please Enter a username.
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn me-2 btn-primary">Submit</button>
                  <button type="button" class="btn btn-danger light" data-bs-dismiss="offcanvas"
                    aria-label="Close">Cancel</button>
                </form>
              </div>
            </div>

          </div>
          <div class="card-body">
            <div class="table-responsive table-hover">
              <table id="example3" class="display min-w850 mb-4 border-bottom border-top">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th>Name</th>
                    <th>Baiya</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($kategoris as $item)
                    <tr>
                      <td class="text-center">
                        <strong>{{ $loop->iteration }}</strong>
                      </td>
                      <td>
                        {{ $item->nama_kategori }}
                      </td>
                      <td>
                        @percentage($item->biaya)
                      </td>
                      <td class="text-center">
                        <div class="d-flex justify-content-center">
                          <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp me-1"><i
                              class="fas fa-pencil-alt"></i></a>
                          <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp"><i
                              class="fas fa-trash-alt"></i></a>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-admin>
