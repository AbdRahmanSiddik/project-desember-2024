<x-admin>
  <div class="container-fluid">
    <div class="form-head mb-4">
      <h2 class="text-black font-w600">Kantor Cabang</h2>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header border-bottom border-primary">
            <h4 class="card-title">List Kantor</h4>
            <a href="{{ route('') }}" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
              aria-controls="offcanvasRight"><i class="fa-sharp fa-regular fa-plus fw-bold"></i> Tambah
              Kantor</a>
          </div>
          <div class="card-body">
            <div class="table-responsive table-hover">
              <table id="example3" class="display min-w850 mb-4 border-bottom border-top">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th>Nama Kantor</th>
                    <th>Kode</th>
                    <th>Alamat</th>
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
                        <div class="d-flex justify-content-center gap-2">
                          <button type="submit" class="btn btn-primary shadow btn-xs sharp" data-bs-toggle="modal"
                            data-bs-target="#exampleModalLong{{ $item->token_kategori }}"><i
                              class="fas fa-pencil-alt"></i></button>
                          <button type="button" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal"
                            data-bs-target="#basicModal{{ $item->token_kategori }}"><i
                              class="fas fa-trash-alt"></i></button>
                        </div>
                      </td>
                    </tr>

                    <!-- Modal delete -->
                    {{-- <div class="modal fade" id="basicModal{{ $item->token_kategori }}">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title">Hapus {{ $item->nama_kategori }}</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal">
                                          </button>
                                      </div>
                                      <div class="modal-body">Modal body text goes here.</div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                          <form action="{{ route('kategori.destroy', $item->token_kategori) }}" method="POST">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-primary">Save changes</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div> --}}
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
