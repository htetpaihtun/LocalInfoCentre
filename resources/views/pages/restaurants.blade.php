@extends('layouts.listing')

  @section('title')
    <p class="my-2 text-center h5">hotels in yangon</p>
  @endsection

  @section('cards')

  @foreach ($restaurants as $restaurant)


  <a href=/restaurants/{{$restaurant->id}} class="list-group-item">
    <img src = "img/novotel.jpg" class="img-fluid float-left">
    <div class="mt-3 text-center" id="textgroup">
      <p class="h5"> {{ $restaurant->id }} </p>
      <p class="h5"> {{ $restaurant->name }} </p>
      <p class="h5">{{ $restaurant-> mail }}</p>
      <p class="h5">{{ $restaurant-> owner_id }} </p>
    </div>
  </a>

  @endforeach

  @endsection
