@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
      <form class="" action="{{ route('posts') }}" method="post" class="mb-4">
        @csrf
        <div class="mb-4">
          <label for="body" class="sr-only">Body</label>
          <textarea
                      type="text"
                      name="body"
                      id="body"
                      cols="30"
                      rows="4"
                      class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
                      placeholder="Post Something">
          </textarea>
          @error('body')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="">
          <button
            type="submit"
            name="button"
            class="bg-blue-500 text-white px-4 py-2 rounded font-medium"
            >
            Post
          </button>
        </div>
      </form>

      @if($posts->count())
        @foreach($posts as $post)
        <div class="mt-4 mb-4">
          <a href="" class="font-bold">{{ $post->user->name }}</a><span class="text-gray-600 text-sm"> {{ $post->created_at->diffForHumans() }}</span>
          <p class="mb-2">{{$post->body}}</p>

          <div class="flex items-center">

            @if(!$post->likedBy(auth()->user()))
            <form class="mr-1" action="{{ route('posts.likes', $post) }}" method="post">
              @csrf
              <button type="submit" class="text-blue-500">Like</button>
            </form>
            @else
            <form class="mr-1" action="{{ route('posts.likes', $post) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="text-blue-500">Unlike</button>
            </form>
            @endif

            <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
          </div>

        </div>
        @endforeach
        {{ $posts->links() }}
      @else
        <p class="mt-4">There are no posts to show.</p>
      @endif





    </div>
  </div>
@endsection
