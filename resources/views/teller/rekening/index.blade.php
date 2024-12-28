<x-admin>
    <x-slot:title>@ucfirst(auth()->user()->role) | Rekening : {{ auth()->user()->name }}</x-slot:title>
  <div class="container-fluid">
    <div class="form-head mb-4">
      <h2 class="text-black font-w600 mb-0">Dashboard</h2>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Rekening</h4>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
  </div>
</x-admin>
