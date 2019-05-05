@extends('default.template')

@include('partials.header')

@section('content')
<section class="food-menu" style="background-image: url('{{ asset('assets/img/background.jpg') }}')">

	<div class="container">
		<div class="row">
			
			@foreach ($foods as $food)

			<div class="col-md-4">
				
				<div class="menu-card">

					<div class="menu-head">
						<img width="100%" height="270" src="{{ asset("assets/img/menu/$food->img") }}" alt="{{ $food->img }}">
						<h3 class="food-name">{{ $food->name }}</h3>
					</div>	
					
					<div class="menu-details">
						<div class="menu-text">{!! $food->text !!}</div>
					</div>	
					{{-- div class="menu-buttons">
						<button class="btn btn-danger menu-btn">Edit</button>
						<button class="btn btn-primary menu-btn">New</button>
					</di --}}
					<div class="food-price">
						<h4 class="btn btn-danger">Price: <span> {{ $food->price }}$</span></h4>
					</div>
				</div>
			</div>

			@endforeach

		</div>
	</div>

</section>
<section class="taste" style="background-image: url('{{ asset('assets/img/taste.jpg')}}');">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="taste-recipes" style="background-image: url('{{ asset('assets/img/background.jpg')}}');">
					
					<h1 class="about-title">Special Recipes</h1>
					<h1 class="about-subtitle">TASTE OF PRECIOUS</h1>
					<p class="about-txt">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stan
						<br><br>
						dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesettingdard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into 
					</p>
					<a href="#" class="btn-link">Click here</a>
				</div>
			</div>
			<div class="col-lg-6"></div>
		</div>
	</div>
</section>

@endsection