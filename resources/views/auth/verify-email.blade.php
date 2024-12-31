@php
    $title = 'Verifikasi Email';
@endphp
@extends('layout.auth')

@section('form')
  <form action="{{ route('verification.resend', auth()->user()->token_user) }}" method="POST" class="d-grid">
    @csrf
      <h1>Verifikasi Alamat Email Anda</h1>
      <p>
        Sebelum melanjutkan, silakan periksa email Anda untuk tautan verifikasi.
        Jika Anda tidak menerima email tersebut, klik tombol di bawah ini untuk meminta yang lain.
      </p>
      <button type="submit" class="btn btn-primary">Kirim Email Verifikasi</button>
  </form>
@endsection
