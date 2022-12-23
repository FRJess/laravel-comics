@extends('layouts.main')

@section('content')
  <main>
    <h2 class>Current series</h2>
    <div class="content">
      @foreach ($comics as $comic)
        <div class="card">
          <a href="{{ route('comic_detail', ['id' => $comic['id']]) }}" class="card">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <h4>{{ $comic['title'] }}</h4>
            {{-- <p>
            {{ $comic['price'] }}<br />
            buy!
          </p> --}}
          </a>
        </div>
      @endforeach
    </div>
    <button>Load more</button>
  </main>
@endsection

@section('title')
  comics
@endsection
