@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
      <form class="" action="{{ route('register_user') }}" method="post">
        @csrf
        <div class="mb-4">
          <label for="name" class="sr-only">Name</label>
          <input type="text" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}" class="p-4 bg-gray-100 border-2 w-full rounded-lg @error('name') border-red-500  @enderror">

          @error('name')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-4">
          <label for="username" class="sr-only">Username</label>
          <input type="text" name="username" id="username" placeholder="Your Username" value="{{ old('username') }}" class="p-4 bg-gray-100 border-2 w-full rounded-lg @error('username') border-red-500  @enderror">
          @error('username')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

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
          <label for="password_confirmation" class="sr-only">Password Again</label>
          <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" value="" class="p-4 bg-gray-100 border-2 w-full rounded-lg">
        </div>

        <div class="">
          <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
        </div>

      </form>
    </div>
  </div>
@endsection
