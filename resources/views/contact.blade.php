@extends('master')
@section('header')
@section('title','Contact')

<div class="container ontainer-carousel text-center mt-4 pt-4">
		<h3>Contact</h3>
		<hr class="divider">

		<div class="container pt-4 ">
			<div class="row">
				<div class="col-md-6 col-12">
					<img src="{{asset('mytemplateassets/image/contact1.png')}}" class="d-block w-100 pl-4" alt="...">
				</div>
				<div class="col-md-6 col-12 pt-4">
					<div align="center">
						<h4>Address</h4>
						<p>Kyon Taw Road,Yangon.</p>
						<h4>Email</h4>
						<p>yarzarmon@gmail.com</p>
						<h4>Phone</h4>
						<p>09-784567750</p>
						<h4>Open</h4>
						<p>Daily,24 Hours</p>
					</div>
				</div>
			</div>

			<br><br>
			<div class="container" align="center">
				<h3 class="pt-4">This is My location</h3>
				<hr class="divider pb-4">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238.7057550767071!2d96.13189211726625!3d16.81186010003563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ebebf498b335%3A0xa900061846673e92!2sAnfield!5e0!3m2!1smy!2smm!4v1599299614931!5m2!1smy!2smm" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</div>

@endsection