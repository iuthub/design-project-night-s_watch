<footer class="footer" style="background-image: url('{{ asset('assets/img/footer-backgr.jpg') }}');">
	<div class="container-fluid">
		<div class="row">
			<img class="plate" src="{{ asset('assets/img/plate.png') }}" alt="">
			<div class="col-lg-4">
				<div class="footer-info">
					<h1 class="footer-info-title">Take it easy with location</h1>
					<p>112-Lorem ipsum dolor sit.</p>
					<p>Lorem ipsum dolor sit asdsasd,</p>
					<p>lorem ipsum</p>
					<div class="contact">
						<p><i class="fas fa-phone"></i><span>Phone:</span><a class="phone" href="tel:935917381"> +998935917381</a></p>
						<p><i class="fas fa-envelope"></i><span>Email:</span><a class="phone" href="mailto:ismoil.793@gmail.com" target="_blank"> ismoil.793@gmail.com</a></p>
					</div>
					<div class="social">
						<a href="#"><i class="fab fa-facebook-square"></i></a>
						<a href="#"><i class="fas fa-envelope"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-youtube"></i></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="footer-info">

					<h1 class="footer-info-title">Working hours</h1>
					<p>Moday to Friday</p><br>
					<p>08:00 am to 10:00 am (Breakfast)</p>
					<p>10:00 am to 10:00 pm (Lunch/Dinner)</p>
					<br>
					<p>Saturday &amp; Sunday</p><br>
					<p>08:00 am to 10:00 am (Breakfast)</p>
					<p>10:00 am to 10:00 pm (Lunch/Dinner)</p>

				</div>
			</div>
			<div class="col-lg-3">
				<div class="feedback">
					<h1 class="footer-info-title">Feedback form</h1>
					<form class="form" action="" method="post">

						<div class="form-group">
    						<input type="text" class="form-control form-field" id="formGroupExampleInput" placeholder="Name">
  						</div>
  						<div class="form-group">
   							<input type="email" class="form-control form-field" id="formGroupExampleInput2" placeholder="Email">
  						</div>
  						<div class="form-group">
   							<input type="tel" class="form-control form-field" id="formGroupExampleInput2" placeholder="Phone">
  						</div>
  						<div class="form-group">
    						<textarea class="form-control form-field" id="exampleFormControlTextarea1" placeholder="Message" rows="3"></textarea>
  						</div>
  						<input type="submit" class="form-control form-field-submit btn-link" value="Submit">
						{{csrf_field()}}
					</form>
				</div>
			</div>
			<div class="col-lg-2"></div>
			<img class="plate2" src="{{ asset('assets/img/plate2.png') }}" alt="">
		</div>
	</div>
</footer>