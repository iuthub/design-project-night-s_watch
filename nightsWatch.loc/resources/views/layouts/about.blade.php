@extends('default.template')

@include('partials.header')

@section('content')
	<section class="about" style="background-image: url('{{ asset('assets/img/background.jpg') }}');">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="about-interior">
					<img class="interior" src="{{ asset('assets/img/interior.png') }}" alt="Our restaurant">
				</div>
			</div>
			<div class="col-lg-7">
				<div class="about-info">
					<h1 class="about-title">About us</h1>
					<h1 class="about-subtitle">WE ARE TASTY</h1>
					<p class="about-txt">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's stan
						<br><br>
						dard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesettingdard dummy text ever since the 1500s,when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into 
					</p>
					<a href="#" class="btn-link">Click here</a>
				</div>
			</div>
			<img class="about-pepper" src="{{ asset('assets/img/pepper.png')}}" alt="">
			<img class="about-spagetti" src="img/spagetti.png" alt="">
		</div>
	</div>
</section>
@endsection