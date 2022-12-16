@extends('layouts.main')

@section('title')
Music download list
@endsection

@section('content')
<div class="mt-5 pt-2">

</div>
<div class="container jumbotron border border-dark mt-5 table-responsive">
    <h2>.'s song download history {{ Auth::user()->name }}</h2>
    <p class="mt-5"></p>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>Name of the song</th>
          <th></th>
          <th>Download time</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($list as $item)
        <tr>
          <td>
            <a href="{{url('music/'.$item->music->slug)}}">
            {{ $item->music->title }}
            </a>
        </td>
          <td>
            <div class="text-center">
                <img src="{{url('/images/albumart/'.$item->music->image)}}" alt="" style="width: 40%;">
                </div>
        
           </td>
          <td>{{ $item->created_at }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

  </div>
@endsection
