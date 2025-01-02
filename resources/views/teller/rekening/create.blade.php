<x-admin>
  <x-slot:title>@ucfirst(auth()->user()->role) | Tambah Rekening : {{ auth()->user()->name }}</x-slot:title>
  <div class="container-fluid">
    <div class="form-head mb-4">
      <h2 class="text-black font-w600 mb-0">Tambah Rekening</h2>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <form action="{{ route('rekening.store') }}" method="POST" novalidate enctype="multipart/form-data"
            class="needs-validation">
            @csrf
            <div class="card-header">
              <h4 class="card-title">Form Tambah Rekening</h4>
              <div class="group">
                <a href="{{ route('rekening.index') }}" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-8">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label for="nama_rekening" class="form-label required">Nama Pemilik</label>
                        <input type="text" name="nama_rekening" id="nama_rekening"
                          class="form-control @error('nama_rekening') is-invalid @enderror"
                          placeholder="Masukkan nama..." required />
                        <small class="invalid-feedback text-danger">
                          @error('nama_rekening')
                            {{ $message }}
                          @enderror
                        </small>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label for="token_anggota" class="form-label required">Token Anggota</label>
                        <input type="text" name="token_anggota" id="token_anggota"
                          class="form-control @error('token_anggota') is-invalid @enderror"
                          placeholder="Masukkan token(32)" required />
                        <small class="invalid-feedback text-danger">
                          @error('token_anggota')
                            {{ $message }}
                          @enderror
                        </small>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label for="ktp" class="form-label required">NIK KTP</label>
                        <input type="text" name="ktp" id="ktp"
                          class="form-control @error('ktp') is-invalid @enderror" placeholder="NIK" required />
                        <small class="invalid-feedback text-danger">
                          @error('ktp')
                            {{ $message }}
                          @enderror
                        </small>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label for="kategori_id" class="form-label">Jenis Rekening</label>
                        <select class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id"
                          id="kategori_id" required>
                          <option value="" disabled selected>Pilih kategori</option>
                          @foreach ($kategoris as $item)
                            <option value="{{ $item->id_kategori }}">{{ $item->nama_kategori }}</option>
                          @endforeach
                        </select>
                        <small class="invalid-feedback text-danger">
                          @error('kategori_id')
                            {{ $message }}
                          @enderror
                        </small>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control" required placeholder="Isi deskripsi..."></textarea>
                        <small class="invalid-feedback text-danger">
                          @error('deskripsi')
                            {{ $message }}
                          @enderror
                        </small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="mb-3">
                    <label for="foto_ktp" class="form-label required">Foto KTP</label>
                    <input type="file" class="form-control" id="foto_ktp" name="foto_ktp"
                      onchange="previewImage(event, 'previewLogo')">
                    <small class="form-text text-muted">Upload foto KTP.</small>
                    <img id="previewLogo" src="" alt="Preview Logo" class="img-thumbnail mt-2"
                      style="display: none; max-width: 100%; height: auto;" width="100%">
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    function previewImage(event, previewId) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const preview = document.getElementById(previewId);
          preview.src = e.target.result;
          preview.style.display = "block";
        };
        reader.readAsDataURL(file);
      } else {
        alert("Hanya file PNG yang diperbolehkan.");
        event.target.value = ""; // Reset input jika bukan PNG
      }
    }
  </script>
  <x-part.alert></x-part.alert>
</x-admin>
