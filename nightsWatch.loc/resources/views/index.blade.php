@extends('default.template')

@section('header')

<header class="header" style="background-image: url('img/home.jpg');">
	<a href="index.html"><img class="logo" src="img/logo.png" alt="Wine&Dine logo"></a>
	@include('partials.header')
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="foodie-restaurant">
					<h1 class="foody-title">Foody Love</h1>
					<p class="foody-txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque necessitatibus facere quaerat! Nisi necessitatibus, doloribus tempora labore sunt commodi explicabo ea quidem, consectetur unde, odit magnam reiciendis soluta pariatur. Voluptate.</p>
					<a class="foody-link btn-link" href="#">Click here</a>
				</div>
			</div>
		</div>
	</div>
</header>

@endsection


@section('content')

<section class="about" style="background-image: url('img/background.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="about-interior">
					<img class="interior" src="img/interior.png" alt="Our restaurant">
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
			<img class="about-pepper" src="img/pepper.png" alt="">
		</div>
	</div>
</section>

@endsection