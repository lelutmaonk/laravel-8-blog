@extends('user/layouts/main')

@section('container')
   
<div class="album py-5">
  <div class="container mt-4">

    <h1 class="fw-light">{{ $title }}</h1>
  

    <div class="row">
  
      {{--  --}}
      @foreach($posts as $item)
      <div class="col-lg-4 mb-3 d-flex align-items-stretch">
        <div class="card">
          <img src="{{ $item->image }}"  width="100%" height="225" class="card-img-top">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $item->title }}</h5>
            <ul class="list-group list-group-horizontal">
              <li class="nav-link"><small class="text-muted"><i class="bi-sm bi-clock"></i> {{ $item->created_at->diffForHumans() }}</small></li>
            </ul>
            <p class="card-text mb-4">{{ $item->body }}</p>
            <a href="#" class="btn btn-sm btn-outline-secondary mt-auto">Read More . . .</a>
          </div>
        </div>
      </div>
      @endforeach
      

      {{--  --}}

    </div>
  </div>

</div>


@endsection