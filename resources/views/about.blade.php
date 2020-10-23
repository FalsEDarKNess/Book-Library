@extends('master')
@section('header')
@section('title','About')

<br>
<div class="container ontainer-carousel mt-4 pt-5 bg-light">
		<h3 class="text-center">About</h3>
		<hr class="divider pt-4">
		<div class="float_right">
		<h4 class="px-3 pb-2">About Us</h4>
		<p class="px-3">At the center of research across the Smithsonian are the specialized branches and librarians of the Smithsonian Libraries. The collections and staff of the Libraries play a key role in helping the Smithsonian’s research and curatorial staff make sense of the museums’ almost innumerable, often unique, objects and their cultural and historical contexts. The Smithsonian Libraries are a hidden national treasure, where experts come to test and expand knowledge and where America and the world can turn for authentic answers</p>
			<img src="{{asset('mytemplateassets/image/about.png')}}">
			<p class="px-3">The network of 21 specialized research libraries that make up the Smithsonian Libraries provide the Institution’s museums and research centers with resources and services that are as diverse and deep as the collections, exhibits, and scholarship they support. They truly span the range of scientific and cultural pursuits of humanity from aerospace, anthropology, and art history to business history and botany, cultural history, design, philately, zoology, and much, much more.</p>
			<p class="px-3">While sharing the values, methods, and efficiencies of a unified network, each library in the system supports the work of its own community of interest comprising specialized researchers and museum curators, as well as visiting scholars, educators, students, and others pursuing or advancing knowledge in their fields. </p>
			<p class="px-3">Individually each of these libraries is among the world’s greatest repositories of knowledge for the specialized fields they support. Collectively they are among America’s greatest scientific and cultural treasures. They belong to the nation, and through their expanding on-line presence and digitization initiatives more and more people from across the country and around the world are able to access their vast resources.</p>	
		</div>
		<div class="clear"></div><hr>
	</div>

@endsection