@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">

      @if (session('status'))
        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
          {{ session('status') }}
        </div>
      @endif
      <form class="" action="{{ route('login_user') }}" method="post">
        @csrf
        <div class="mb-4">
          <label for="email" class="sr-only">Email</label>
          <input type="email" name="email" id="email" placeholder="Your E-mail" value="{{ old('email') }}" class="p-4 bg-gray-100 border-2 w-full rounded-lg @error('email') border-red-500  @enderror">
          @error('email')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-4">
          <label for="password" class="sr-only">Password</label>
          <input type="password" name="password" id="password" placeholder="Choose a Password" value="" class="p-4 bg-gray-100 border-2 w-full rounded-lg @error('password') border-red-500  @enderror">
          @error('password')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-4">
          <div class="flex items-center">
            <input type="checkbox" name="remember" id="remember" class="mr-2">
            <label for="remember">Remember Me</label>
          </div>
        </div>

        <div class="">
          <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Sign In</button>
        </div>

      </form>
    </div>
  </div>
@endsection
