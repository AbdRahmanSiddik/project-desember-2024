<x-admin>
  <x-slot:title>@ucfirst(auth()->user()->role) | Kategori : {{ auth()->user()->name }}</x-slot:title>
  <div class="container-fluid">
    <div class="form-head mb-4">
      <h2 class="text-black font-w600">Customer Service</h2>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="default-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#home"><i class="la la-user-astronaut me-2"></i> Teller</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#profile"><i class="la la-user-tie me-2"></i> Admin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#contact"><i class="la la-user-secret me-2"></i> Operator</a>
                            </li>
                            <li class="nav-item ms-auto mb-2 me-3">
                                <a class="btn btn-primary" href="javascript:void(0);">+ Tambah CS</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                <div class="pt-4">
                                    <div class="table-responsive table-hover">
                                        <table id="example3" class="display min-w850 mb-4 border-bottom border-top">
                                          <thead>
                                            <tr>
                                              <th class="text-center">#</th>
                                              <th>Nama</th>
                                              <th>Kantor</th>
                                              <th>Email</th>
                                              <th class="text-start">Action</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            @foreach ($tellers as $teller)
                                              <tr>
                                                <td class="text-center">
                                                  <strong>{{ $loop->iteration }}</strong>
                                                </td>
                                                <td>
                                                  {{ $teller->name }}
                                                </td>
                                                <td>
                                                  <p>{{ $teller->profile->nama_profile }}</p>
                                                  <small>{{ $teller->profile->no_profile }}</small>
                                                </td>
                                                <td>
                                                  {{ $teller->email }}
                                                </td>
                                                <td class="text-start">
                                                  <div class="d-flex justify-content-start gap-2">
                                                    <a href="" class="btn btn-primary shadow btn-xs sharp"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                    <button type="button" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal"
                                                      data-bs-target="#basicModal"><i
                                                        class="fas fa-trash-alt"></i></button>
                                                  </div>
                                                </td>
                                              </tr>

                                              <!-- Modal delete -->
                                              {{-- <div class="modal fade" id="basicModal{{ $teller->token_profile }}">
                                                <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title">Hapus {{ $teller->nama_profile }}</h5>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">Modal body text goes here.</div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                      <form action="{{ route('profile.destroy', $teller->token_profile) }}" method="POST">
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
                            <div class="tab-pane fade" id="profile">
                                <div class="pt-4">
                                    <h4>This is profile title</h4>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                    </p>
                                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact">
                                <div class="pt-4">
                                    <h4>This is contact title</h4>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                    </p>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</x-admin>
