@extends('layouts.listing')

  @section('title')
    <p class="my-2 text-center h5">hotels in yangon</p>
  @endsection

  @section('cards')

  @foreach ($hotels as $hotel)


  <a href=/hotels/{{$hotel->id}} class="list-group-item">
    <img src = "img/novotel.jpg" class="img-fluid float-left">
    <div class="mt-3 text-center" id="textgroup">
      <p class="h5"> {{ $hotel->id }} </p>
      <p class="h5"> {{ $hotel->name }} </p>
      <p class="h5"> {{ $hotel-> mail }} </p>
      <p class="h5"> {{ $hotel-> owner_id }} </p>
    </div>
  </a>

  @endforeach

  @endsection
