<x-admin>
    <x-slot:title>@ucfirst(auth()->user()->role) | Dashboard : {{ auth()->user()->name }}</x-slot:title>
  <div class="container-fluid">
    <div class="form-head mb-4">
      <h2 class="text-black font-w600 mb-0">Dashboard</h2>
    </div>
    <h1>{{ auth()->user()->name }}</h1>
    <span>{{ auth()->user()->role }}</span>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
  </div>
</x-admin>
