@extends('master')
@section('header')
@section('title','Books')


	<!-- Banner -->
	<div class=" container jumbotron jumbotron-fluid bg-info mt-5">
		<div class="container text-center">
			<h1 class="text-monospace">Books</h1>
			<p>Home > Books</p>
				<div class="center slider bg-light pt-4">

					<div class="text-center">
						<a href="{{route('horrorpage')}}" class="text-secondary text-decoration-none wrapper" title="VEGETABLES">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-hornbill fa-stack-1x fa-inverse"></i>
							</span>
							<p>Horror</p>
						</a>
					</div>
				    <div class="text-center">
						<a href="{{route('actionpage')}}" class="text-secondary text-decoration-none wrapper" title="FRUITS">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-crown fa-stack-1x fa-inverse"></i>
							</span>
							<p>Action</p>
						</a>
					</div>
					<div class="text-center">
						<a href="{{route('romancepage')}}" class="text-secondary text-decoration-none wrapper" title="READY_MADE">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-eye fa-stack-1x fa-inverse"></i>
							</span>
							<p>Romance</p>
						</a>
					</div>
					<div class="text-center">
						<a href="{{route('classicpage')}}" class="text-secondary text-decoration-none wrapper" title="OTHERS">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-cloud-sun-rain fa-stack-1x fa-inverse"></i>
							</span>
							<p>Classic</p>
						</a>
					</div>
					<div class="text-center">
						<a href="{{route('funnypage')}}" class="text-secondary text-decoration-none wrapper">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-baby fa-stack-1x fa-inverse"></i>
							</span>
							<p>Funny</p>
						</a>
					</div>
					<div class="text-center">
						<a href="{{route('knowledgepage')}}" class="text-secondary text-decoration-none wrapper">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-atlas fa-stack-1x fa-inverse"></i>
							</span>
							<p>Knowledge</p>
						</a>
					</div>
					<div class="text-center">
						<a href="{{route('educationpage')}}" class="text-secondary text-decoration-none wrapper">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fab fa-buffer fa-stack-1x fa-inverse"></i>
							</span>
							<p>Education</p>
						</a>
					</div>
					<div class="text-center">
						<a href="{{route('homepage')}}" class="text-secondary text-decoration-none wrapper">
							<span class="fa-stack fa-2x">
								<i class="fas fa-circle fa-stack-2x"></i>
								<i class="fas fa-ellipsis-h fa-stack-1x fa-inverse"></i>
							</span>
							<p>More</p>
						</a>
					</div>
		        </div>
		</div>

	</div>
@endsection



	<section class="center slider">
			    
	</section>





<script type="text/javascript" src="{{asset('mytemplateassets/bootstrap/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('mytemplateassets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('mytemplateassets/slick-master/slick/slick.js')}}"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.center').slick({
			dots: false,
			slidesToShow: 5,
			slidesToScroll: 1,
			touchMove: false,
			responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  ]
		});

	})
</script>




	