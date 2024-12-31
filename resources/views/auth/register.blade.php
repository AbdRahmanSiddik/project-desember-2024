@php
    $title = 'Register';
@endphp
@extends('layout.auth')

@section('form')
  <form action="{{ route('register.create') }}" method="POST">
    @csrf
    <div class="mb-4">
      <label class="form-label required">Username</label>
      <input type="text" class="form-control" placeholder="Username" name="name">
    </div>
    <div class="mb-4">
      <label class="form-label required">Email</label>
      <input type="email" class="form-control" placeholder="hello@example.com" name="email">
    </div>
    <div class="mb-4">
      <label for="profile" class="form-label required">Pilih Kantor Koperasi</label>
      <select name="profile" id="profile" class="default-select form-control wide">
        <option value="" disabled selected>Pilih salah satu...</option>
        @foreach ($profiles as $item)
          <option value="{{ $item->token_profile }}">
            <p class="fw-bold">{{ $item->nama_profile }}</p>
            <small>{{ $item->alamat }}</small>
          </option>
        @endforeach
      </select>
    </div>
    <div class="mb-4 position-relative">
      <label class="mb-1 form-label required">Password</label>
      <input type="password" id="dz-password" class="form-control" placeholder="123456" name="password">
      <span class="show-pass eye">

        <i class="fa fa-eye-slash"></i>
        <i class="fa fa-eye"></i>

      </span>
    </div>
    <div class="mb-4 position-relative">
      <label class="mb-1 form-label required">Confirm Password</label>
      <input type="password" id="dz-password-confirm" class="form-control" placeholder="123456"
        name="password_confirmation">
      <span class="show-pass eye">
        <i class="fa fa-eye-slash"></i>
        <i class="fa fa-eye"></i>
      </span>
    </div>
    <div class="form-row d-flex justify-content-between mt-4 mb-2">
      <div class="mb-4">
        <div class="form-check custom-checkbox mb-3">
          <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
          <label class="form-check-label" for="customCheckBox1">Already have an account?</label>
        </div>
      </div>
      <div class="mb-4">
        <a href="{{ route('login') }}" class="btn-link text-primary">Sign in</a>
      </div>
    </div>
    <div class="text-center mb-4">
      <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
    </div>
  </form>
@endsection
