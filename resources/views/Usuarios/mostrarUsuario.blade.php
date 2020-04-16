@extends('layout')

@section('content')

<div class="row">
	<div class="col-md-6">
		<div class="bloque-usuario"><!--DETALLLES USUARIO-->
			<h3>USERNAME</h3><hr>
			<div class="detalles-usuario">
				<p>Nombre completo<p>
				<p>Correo Electronico<p>
			</div>

		</div>
	</div>

	<div class="col-md-6"><!--IMAGEN-->
		<div class="usuario-bloque">
			<img src="https://www.pexels.com/photo/woman-wearing-red-beret-and-gray-long-sleeve-dress-with-wild-feminist-print-3518091/" width="300">
		</div>
	</div>

</div>

	<section class="hero-section spad"><!--DETALLLES USUARIO-->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
						<div class="col-lg-6">
							<div class="hero-text">
								<h2>Maria Williams</h2>
								<p>I’m a digital designer in love with photography, painting and discovering new worlds and cultures.</p>
							</div>
							<div class="hero-info">
								<h2>General Info</h2>
								<ul>
									<li><span>Date of Birth</span>Aug 25, 1988</li>
									<li><span>Address</span>Rosia Road 55, Gibraltar, UK</li>
									<li><span>E-mail</span>mariawilliams@company.com</li>
									<li><span>Phone </span>+43 5266 22 345</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="row">							
								<figure class="hero-image">
									<img src="https://img.favpng.com/7/5/8/computer-icons-font-awesome-user-font-png-favpng-YMnbqNubA7zBmfa13MK8WdWs8.jpg" width="300" alt="5">
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

@endsection