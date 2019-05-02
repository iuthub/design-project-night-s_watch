@extends('templates.default')

@include('templates.partials.navigation')
@section('preloader')
  <!--Preloader-->
  <div class="preloader">
      <div class="pulse"></div>
  </div>
@endsection

@section('content')
  <?php $counter = 1 ?>
  <div class="container mt-4">
  @if(count($dishes) > 0)
      @foreach ($dishes as $key => $dish)
        @if($counter <= 3)
          @if ($counter == 1)
            <div class="row mt-4">
          @endif
            <div class="col-md-4">
              <div class="card" style="width:300px; height: 400px; display: inline-block; overflow: hidden !important; text-overflow: ellipsis;">
                <img class="card-img-top" src="storage/dishes_photo/{{ $dish->cover_image }}" alt="{{ $dish->name }}" height="250px" width="300px">
                <div class="card-body">
                  <h4 class="card-title">{{ $dish->name }}</h4>
                  <p class="card-text">{{ $dish->description }}</p>
                </div>
              </div>
            </div>
            <?php $counter += 1 ?>
          @if ($counter == 4)
            </div>
            <?php $counter = 1 ?>
          @endif
        @endif
      @endforeach
  @else
    <p>Ooops! There is no dishes yet</p>
  @endif
  </div>
@endsection
