<x-admin>
  <x-slot:title>@ucfirst(auth()->user()->role) | Rekening : {{ auth()->user()->name }}</x-slot:title>
  <div class="container-fluid">
    <div class="form-head mb-4">
      <h2 class="text-black font-w600 mb-0">Rekening</h2>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Data Rekening</h4>
            <a href="{{ route('rekening.create') }}" class="btn btn-primary">+ Create Rekening</a>
          </div>
          <div class="card-body">
            <div class="table-responsive table-hover">
              <table id="example3" class="display min-w850 mb-4 border-bottom border-top">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th>Nama</th>
                    <th>Rekening</th>
                    <th>Tanggal Pembuatan</th>
                    <th>CS</th>
                    <th class="text-start">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($rekenings as $item)
                    <tr>
                      <td class="text-center">
                        <strong>{{ $loop->iteration }}</strong>
                      </td>
                      <td>
                        {{ $item->nama_rekening }}
                      </td>
                      <td>
                        {{ $item->no_rekening }}
                      </td>
                      <td>
                        <p>{{ $item->created_at->format('d F Y') }}</p>
                        <small>{{ $item->tellers->profile->nama_profile }}</small>
                      </td>
                      <td>
                        <p>{{ $item->tellers->name }}</p>
                        <small>{{ $item->tellers->role }}</small>
                      </td>
                      <td class="text-start">
                        <div class="d-flex justify-content-start gap-2">
                          <a href="{{ route('profile.edit', $item->token_rekening) }}"
                            class="btn btn-primary shadow btn-xs sharp"><i class="fas fa-pencil-alt"></i></a>
                          <button type="button" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal"
                            data-bs-target="#basicModal{{ $item->token_rekening }}"><i
                              class="fas fa-trash-alt"></i></button>
                        </div>
                      </td>
                    </tr>

                    <!-- Modal delete -->
                    <div class="modal fade" id="basicModal{{ $item->token_rekening }}">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Hapus {{ $item->nama_rekening }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                          </div>
                          <div class="modal-body">Modal body text goes here.</div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                            <form action="{{ route('profile.destroy', $item->token_rekening) }}" method="POST">
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
  <x-part.alert></x-part.alert>
</x-admin>
