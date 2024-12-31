<x-admin>
  <x-slot:title>@ucfirst(auth()->user()->role) | Dashboard : {{ auth()->user()->name }}</x-slot:title>
  <div class="container-fluid">
    <div class="form-head mb-4">
      <h2 class="text-black font-w600 mb-0">Dashboard</h2>
    </div>
    @if (auth()->user()->role == 'admin')
      <x-dashboard.admin></x-dashboard.admin>
    @elseif (auth()->user()->role == 'operator')
      <x-dashboard.operator></x-dashboard.operator>
    @elseif (auth()->user()->role == 'teller')
      <x-dashboard.teller></x-dashboard.teller>
    @elseif (auth()->user()->role == 'anggota')
      <x-dashboard.anggota></x-dashboard.anggota>
    @endif
  </div>
</x-admin>
