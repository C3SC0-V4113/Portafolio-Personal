<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FrontEnd Web Developer-Francisco Valle</title>
	<link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<!--Barra de Navegacion-->
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark" id="navbarcool">
		<div class="container-fluid">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">¿Quien Soy?</a>
					</li>					
					<li class="nav-item">
						<a class="nav-link" href="#hab">Habilidades</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#projects">Proyectos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contacts">Contactos</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--Encabezado-->
	<div class="container-fluid">
		<div class="row" id="header">
			<div class="col-2 d-none d-md-block">
				<svg id="computadora"><use href="#computer-svg"></use></svg>
			</div>
			<div class="col-12 col-md-10" id="head">
				<div>
					<h1>Desarrollador Web FrontEnd</h1>
					<span>Francisco José Valle Cornejo</span>
				</div>
			</div>
		</div>
	</div>
	<!--Sobre mí-->
	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<section id="about">
					<article>
						<div class="row">
							<div class="col-12 col-md-4" id="foto-persona">
								<div class="circulos" id="one"></div>
								<img src="<?php echo dirname("./img/practice_3_MEJOR-min.jpg") . ("/practice_3_MEJOR-min.jpg") ?>" class="img-fluid rounded-circle mx-auto d-block" alt="perfil-cesco">
								<div class="circulos" id="two"></div>
								<div class="circulos" id="three"></div>
							</div>
							<div class="Presentacion col-12 col-md-8">
								<div class="row">
									<div class="col-2 d-none d-md-block verdecito" id="parentesis">
										<p>{</p>
									</div>
									<div class="col-12 col-md-8">
										<h3 class="verdecito">Sobre mí</h3>
										<hr class="d-sm-block d-md-none" id="divisor">
										<p>Mi nombre es Francisco José Valle Cornejo</p>
										<p>
											Soy Desarrollador Web FrontEnd salvadoreño. He estado haciendo paginas web desde mediados del año 2020 por cursos universitarios. Despues me he expandido a cursos externos en Platzi y Udemy para aumentar mi conocimiento en este campo de la programación.
										</p>
									</div>
									<div class="col-2 d-none d-md-block verdecito" id="parentesis">
										<p>}</p>
									</div>
								</div>
							</div>
						</div>
					</article>
				</section>
			</div>
		</div>
	</div>
	<!--Habilidades-->
	<div class="container-fluid" id="hab">
		<div class="row">
			<article>
				<div class="row">
					<div class="col-12">
						<h3 id="habi">Habilidades</h3>
						<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" id="logos-hab">
							<div class="col">
								<h3 class="texto-caj">Bootstrap</h3>
								<hr class="" id="divisor-2">
								<svg height="368pt" viewBox="0 0 368 368" width="368pt" xmlns="http://www.w3.org/2000/svg">
									<path d="m344 0h-320c-13.230469 0-24 10.769531-24 24v320c0 13.230469 10.769531 24 24 24h320c13.230469 0 24-10.769531 24-24v-320c0-13.230469-10.769531-24-24-24zm8 344c0 4.414062-3.59375 8-8 8h-320c-4.40625 0-8-3.585938-8-8v-320c0-4.40625 3.59375-8 8-8h320c4.40625 0 8 3.59375 8 8zm0 0" />
									<path d="m216 64h-112c-4.414062 0-8 3.585938-8 8v224c0 4.425781 3.585938 8 8 8h112c30.878906 0 56-25.128906 56-56v-16c0-20.34375-10.902344-38.191406-27.175781-48 16.273437-9.808594 27.175781-27.65625 27.175781-48v-16c0-30.878906-25.121094-56-56-56zm40 168v16c0 22.054688-17.945312 40-40 40h-104v-96h104c22.054688 0 40 17.945312 40 40zm0-96c0 22.054688-17.945312 40-40 40h-104v-96h104c22.054688 0 40 17.945312 40 40zm0 0" />
								</svg>
							</div>
							<div class="col">
								<h3 class="texto-caj">CSS3</h3>
								<hr class="" id="divisor-2">
								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
									<polygon id="externo" points="32,0 72.8,460.8 256,512 439.136,460.832 480,0 " />
									<polygon id="medio" points="392.768,150.688 387.616,208.576 372.064,382.112 256,414.208 255.904,414.24 
										139.904,382.112 131.808,291.36 188.64,291.36 192.864,338.432 255.936,355.456 255.968,355.424 319.136,338.4 327.744,259.968 
										129.088,260.512 123.456,206.88 332.512,204.416 336.736,147.008 117.856,147.616 114.176,94.208 256,94.208 397.824,94.208 " />
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
								</svg>
							</div>
							<div class="col">
								<h3 class="texto-caj">HTML5</h3>
								<hr class="" id="divisor-2">
								<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 434.147 434.147" style="enable-background:new 0 0 434.147 434.147;" xml:space="preserve">
									<path d="M27.336,14.372l28.177,360.474c0.423,5.413,4.087,10.029,9.263,11.67l148.268,47.008
										c2.622,0.831,5.437,0.831,8.059,0l148.268-47.008c5.176-1.641,8.84-6.257,9.263-11.67l28.177-360.474
										C407.417,6.622,401.292,0,393.519,0H40.629C32.856,0,26.731,6.622,27.336,14.372z M334.553,126.215H150.918l5.542,51.105h174.099
										L319.17,323.013l-102.096,32.369l-102.096-32.369l-5.95-76.116h53.588v37.336l55.89,15l55.556-15l4.31-59.503H107.295L95.937,79.419
										H338.21L334.553,126.215z" />
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
								</svg>
							</div>
							<div class="col">
								<h3 class="texto-caj">JavaScript</h3>
								<hr class="" id="divisor-2">
								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 312.553 312.553" style="enable-background:new 0 0 312.553 312.553;" xml:space="preserve">
									<path d="M302.553,0H10C4.477,0,0,4.478,0,10v292.553c0,5.522,4.477,10,10,10h292.553c5.523,0,10-4.478,10-10V10
										C312.553,4.478,308.076,0,302.553,0z M143.625,173.732c0,18.615-10.434,30.179-27.232,30.179c-10.55,0-19.978-5.292-26.547-14.901
										c-2.905-4.251-1.815-10.053,2.436-12.959c4.252-2.906,10.055-1.814,12.959,2.436c3.074,4.498,6.826,6.778,11.152,6.778
										c3.419,0,8.586,0,8.586-11.532v-47.467H99.504c-5.149,0-9.323-4.174-9.323-9.323c0-5.149,4.174-9.323,9.323-9.323h34.798
										c5.149,0,9.323,4.174,9.323,9.323V173.732z M189.441,205.6c-12.499,0-25.251-5.27-33.279-13.753
										c-3.54-3.74-3.377-9.642,0.362-13.181c3.741-3.54,9.644-3.377,13.181,0.362c4.486,4.74,12.417,7.925,19.736,7.925
										c7.493,0,16.244-2.188,16.244-8.351c0.048-5.81-3.045-7.986-17.415-12.339c-12.677-3.839-31.835-9.642-31.835-31.725
										c0-16.5,14.306-27.586,35.599-27.586c9.479,0,19.815,2.874,26.975,7.502c4.324,2.795,5.564,8.567,2.769,12.892
										c-2.796,4.324-8.568,5.564-12.892,2.769c-4.112-2.658-11.042-4.516-16.852-4.516c-7.82,0-16.952,2.342-16.952,8.939
										c0,7.165,4.189,9.516,18.594,13.879c12.277,3.718,30.83,9.337,30.656,30.262C224.331,194.75,210.31,205.6,189.441,205.6z" />
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
								</svg>
							</div>
							<div class="col">
								<h3 class="texto-caj">PHP</h3>
								<hr class="" id="divisor-2">
								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
									<path d="M512,256c0,15.485-1.379,30.647-4.012,45.369C486.578,421.115,381.9,512,256,512
										c-94.856,0-177.664-51.587-221.884-128.24c-10.794-18.693-19.278-38.87-25.088-60.155C3.135,302.07,0,279.395,0,256
										C0,114.615,114.615,0,256,0c116.694,0,215.144,78.075,245.979,184.842C508.5,207.433,512,231.309,512,256z" />
									<g>
										<path d="M130.173,178.239H35.892L9.028,323.605c5.81,21.285,14.294,41.462,25.088,60.155h8.746
											l10.407-56.299h51.806c63.08,0,80.039-56.633,84.104-84.449C193.254,215.207,172.91,178.239,130.173,178.239z M143.851,247.703
											c-2.309,15.768-13.96,47.877-49.716,47.877H59.162l15.632-84.605h35.6C145.095,210.975,146.16,231.936,143.851,247.703z" />
										<path d="M501.979,184.842c-8.014-4.138-17.565-6.604-28.599-6.604h-94.281L341.117,383.76h44.951
											l10.407-56.299h51.806c28.056,0,46.989-11.201,59.705-26.091C510.621,286.647,512,271.485,512,256
											C512,231.309,508.5,207.433,501.979,184.842z M487.058,247.703c-2.309,15.768-13.96,47.877-49.727,47.877h-34.962l15.632-84.605
											h35.6C488.302,210.975,489.367,231.936,487.058,247.703z" />
										<path d="M309.238,178.919c-18.295,0-42.704,0-54.597,0l10.248-55.451h-44.766L182.14,328.984h44.766
											l21.843-118.186c8.07,0,18.79,0,28.61,0c18.991,0,31.879,4.07,29.165,21.705c-2.713,17.635-18.313,95.636-18.313,95.636h45.444
											c0,0,17.635-86.818,20.348-111.237C356.717,192.484,334.334,178.919,309.238,178.919z" />
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
									<g>
									</g>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
	<!--Divisor SVG-->
	<div class="container-fluid">
		<div class="row">
			<div id="division" class="col-12"><svg viewBox="0 0 500 150" preserveAspectRatio="none">
					<path d="M-1.41,26.14 C149.99,150.00 330.41,-30.09 503.67,79.44 L500.00,150.00 L0.00,150.00 Z"></path>
				</svg></div>
		</div>
	</div>
	<!--Carrusel con Certificados-->
	<div class="container-fluid" id="certifica">
		<div class="row">
			<article>
				<div class="row">
					<div class="col-12" id="div-carrusel">
						<div id="carrousel" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-indicators">
								<button type="button" data-bs-target="#carrousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								<button type="button" data-bs-target="#carrousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
								<button type="button" data-bs-target="#carrousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
								<button type="button" data-bs-target="#carrousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
								<button type="button" data-bs-target="#carrousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
								<button type="button" data-bs-target="#carrousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
								<button type="button" data-bs-target="#carrousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
								<button type="button" data-bs-target="#carrousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
							</div>
							<div class="carousel-inner">
								<div class="carousel-item">
									<img src="img/certificados/diploma-git-github-1.png" class="d-block w-100" alt="platzi-github">
								</div>
								<div class="carousel-item">
									<img src="img/certificados/diploma-php-1.png" class="d-block w-100" alt="platzi-php">
								</div>
								<div class="carousel-item">
									<img src="img/certificados/diploma-fundamentos-node-1.png" class="d-block w-100" alt="platzi-node">
								</div>
								<div class="carousel-item active">
									<img src="img/certificados/diploma-datos-php-1.png" class="d-block w-100" alt="platzi-php-datos">
								</div>
								<div class="carousel-item">
									<img src="img/certificados/diploma-economia-digital-1.png" class="d-block w-100" alt="platzi-btc">
								</div>
								<div class="carousel-item">
									<img src="img/certificados/diploma-frontend-developer-1.png" class="d-block w-100" alt="platzi-btc">
								</div>
								<div class="carousel-item">
									<img src="img/certificados/diploma-defi-1.png" class="d-block w-100" alt="platzi-btc">
								</div>
								<div class="carousel-item">
									<img src="img/certificados/diploma-blazor-1.png" class="d-block w-100" alt="platzi-btc">
								</div>
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carrousel" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carrousel" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
	<!--Proyectos-->
	<div class="container-fluid" id="projects">
		<div class="row">
			<article>
				<div class="col-12">
					<h3 id="Project">Proyectos</h3>
					<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
						<div class="col">
							<div class="card text-center">
								<img src="img/Organizadora de Eventos.png" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Organizadora de Eventos</h5>
									<p class="card-text">Proyecto personal realizado en PHP simulando ser una empresa realizadora de bodas,cumpleaños y otros eventos</p>
									<a href="https://github.com/C3SC0-V4113/Organizador-de-Eventos" class="btn btn-primary">GitHub</a>
									<a href="#" class="btn btn-primary disabled" role="button" aria-disabled="true">Visitar</a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card text-center">
								<img src="img/Mapa Interactivo.png" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Mapa Interactivo de El Salvador</h5>
									<p class="card-text">Mapa Creado a partir de un svg, con datos importantes de sus Departamentos, cabeceras, sitios túristicos. </br>Creado con NodeJS, Express y Handlebars</p>
									<a href="https://github.com/C3SC0-V4113/Mapa-Interactivo" class="btn btn-primary">GitHub</a>
									<a href="#" class="btn btn-primary disabled" role="button" aria-disabled="true">Visitar</a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card text-center">
								<img src="img/Inventario UDB.png" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Inventario UDB</h5>
									<p class="card-text">Proyecto Personal de un sistema de inventario de salidas y entradas basado en bodegas, realizado en C# con ASP.Net y Net.Core</p>
									<a href="https://github.com/C3SC0-V4113/Proyecto_DSE" class="btn btn-primary">GitHub</a>
									<a href="#" class="btn btn-primary disabled" role="button" aria-disabled="true">Visitar</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row collapse row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="collapseExample">
						<div class="col">
							<div class="card text-center">
								<img src="img/Alquiler de Autos.png" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Alquiler de Autos</h5>
									<p class="card-text">Aplicacion Multiplataforma creada con React y React-Native con base de datos en MySQL en servidor EXPRESS</p>
									<a href="https://github.com/C3SC0-V4113/Alquiler-de-Automoviles" class="btn btn-primary">GitHub</a>
									<a href="#" class="btn btn-primary disabled" role="button" aria-disabled="true">Visitar</a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card text-center">
								<img src="img/Portafolio Personal.png" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Portafolio Personal</h5>
									<p class="card-text">Sitio Web en PHP con el objetivo de mostrar mis habilidades como desarrollador</p>
									<a href="https://github.com/C3SC0-V4113/Portafolio-Personal" class="btn btn-primary">GitHub</a>
									<a href="https://cescovalle.com/" class="btn btn-primary">Visitar</a>
								</div>
							</div>
						</div>
						<!--<div class="col">
							<div class="card text-center">
								<img src="img/pc-placeholder.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">TITULO</h5>
									<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo sapiente vitae cumque fugit reiciendis voluptatem tempore omnis ut asperiores. Eveniet sit quas quae officiis repellat nulla ea doloremque voluptates adipisci!</p>
									<a href="#" class="btn btn-primary">GitHub</a>
									<a href="#" class="btn btn-primary">Visitar</a>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="card text-center">
								<img src="img/pc-placeholder.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">TITULO</h5>
									<p class="card-text">Lorem ipsum, dolor sit amet cpisci!</p>
									<a href="#" class="btn btn-primary">GitHub</a>
									<a href="#" class="btn btn-primary">Visitar</a>
								</div>
							</div>
						</div>-->
					</div>
					<button id="botonColapsable" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						Ver Más
					</button>
				</div>
			</article>
		</div>
	</div>
	<!--Footer-->
	<div class="container-fluid" id="footpadre">
		<div class="row">
			<section class="d-flex justify-content-center p-4 border-bottom" id="contacts">
				<div class="row">
					<div class="col-12 col-md-5" id="contactme">
						<p>Contáctame mis redes sociales</p>
					</div>
					<div class="col-12 col-md-7" id="iconsmedia">
						<div class="container-fluid">
							<div class="row">
								<div class="col-6 col-sm-3" id="redsvg">
									<a href="https://www.facebook.com/cesco.valle/" target="_blank" rel="noopener noreferrer">
									<svg height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
											<path d="m512 256c0-141.4-114.6-256-256-256s-256 114.6-256 256 114.6 256 256 256c1.5 0 3 0 4.5-.1v-199.2h-55v-64.1h55v-47.2c0-54.7 33.4-84.5 82.2-84.5 23.4 0 43.5 1.7 49.3 2.5v57.2h-33.6c-26.5 0-31.7 12.6-31.7 31.1v40.8h63.5l-8.3 64.1h-55.2v189.5c107-30.7 185.3-129.2 185.3-246.1z" />
									</svg>
								</a>
								</div>
								<div class="col-6 col-sm-3" id="redsvg">
									<a href="https://twitter.com/c3_sc0" target="_blank" rel="noopener noreferrer">
									<svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
											<path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm116.886719 199.601562c.113281 2.519532.167969 5.050782.167969 7.59375 0 77.644532-59.101563 167.179688-167.183594 167.183594h.003906-.003906c-33.183594 0-64.0625-9.726562-90.066406-26.394531 4.597656.542969 9.277343.8125 14.015624.8125 27.53125 0 52.867188-9.390625 72.980469-25.152344-25.722656-.476562-47.410156-17.464843-54.894531-40.8125 3.582031.6875 7.265625 1.0625 11.042969 1.0625 5.363281 0 10.558593-.722656 15.496093-2.070312-26.886718-5.382813-47.140624-29.144531-47.140624-57.597657 0-.265624 0-.503906.007812-.75 7.917969 4.402344 16.972656 7.050782 26.613281 7.347657-15.777343-10.527344-26.148437-28.523438-26.148437-48.910157 0-10.765624 2.910156-20.851562 7.957031-29.535156 28.976563 35.554688 72.28125 58.9375 121.117187 61.394532-1.007812-4.304688-1.527343-8.789063-1.527343-13.398438 0-32.4375 26.316406-58.753906 58.765625-58.753906 16.902344 0 32.167968 7.144531 42.890625 18.566406 13.386719-2.640625 25.957031-7.53125 37.3125-14.261719-4.394531 13.714844-13.707031 25.222657-25.839844 32.5 11.886719-1.421875 23.214844-4.574219 33.742187-9.253906-7.863281 11.785156-17.835937 22.136719-29.308593 30.429687zm0 0" />
									</svg>
								</a>
								</div>
								<div class="col-6 col-sm-3" id="redsvg">
									<a href="https://www.linkedin.com/in/francisco-jos%C3%A9-valle-cornejo-409b86204" target="_blank" rel="noopener noreferrer">
									<svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg">
											<path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm-74.390625 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0" />
									</svg>
								</a>
								</div>
								<div class="col-6 col-sm-3" id="redsvg">
									<a href="https://github.com/C3SC0-V4113" target="_blank" rel="noopener noreferrer">
									<svg height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
											<path d="m12 .5c-6.63 0-12 5.28-12 11.792 0 5.211 3.438 9.63 8.205 11.188.6.111.82-.254.82-.567 0-.28-.01-1.022-.015-2.005-3.338.711-4.042-1.582-4.042-1.582-.546-1.361-1.335-1.725-1.335-1.725-1.087-.731.084-.716.084-.716 1.205.082 1.838 1.215 1.838 1.215 1.07 1.803 2.809 1.282 3.495.981.108-.763.417-1.282.76-1.577-2.665-.295-5.466-1.309-5.466-5.827 0-1.287.465-2.339 1.235-3.164-.135-.298-.54-1.497.105-3.121 0 0 1.005-.316 3.3 1.209.96-.262 1.98-.392 3-.398 1.02.006 2.04.136 3 .398 2.28-1.525 3.285-1.209 3.285-1.209.645 1.624.24 2.823.12 3.121.765.825 1.23 1.877 1.23 3.164 0 4.53-2.805 5.527-5.475 5.817.42.354.81 1.077.81 2.182 0 1.578-.015 2.846-.015 3.229 0 .309.21.678.825.56 4.801-1.548 8.236-5.97 8.236-11.173 0-6.512-5.373-11.792-12-11.792z" />
									</svg>
								</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr>
			</section>
			<section class="d-flex justify-content-center p-4 border-bottom">
				<div class="row">
					<div class="col-12 col-md-6">
						<form method="POST">
							<p>Contactame por Correo Electronico</p>
							<div class="mb-3">
								<label for="correoE" class="form-label">Escribe tú correo electronico</label>
								<input type="email" name="email" class="form-control" id="correoE" aria-describedby="emailHelp">
								<div id="emailHelp" class="form-text">No se guardarán tus datos</div>
							</div>
							<div class="mb-3">
								<label for="mensajeE" class="form-label">Mensaje</label>
								<textarea class="form-control" name="mensajeE" id="mensajeE" rows="3"></textarea>
							</div>
							<input class="btn btn-primary" name="send" type="submit" value="Enviar">
							<!--<button type="submit" name="send" id="send" class="btn btn-primary">Enviar</button>-->
						</form>
						<?php
							include('mail.php');
						?>
					</div>
					<div class="col-12 col-md-6" id="sivar">
						<div class="row">
							<div class="col-12">
								<p>El Salvador, San Salvador</p>
							</div>
							<div class="col-12">
								<p>SV 01101</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="col-12" id="footer">
				<div class="row align-content-center">
					<div class="col-12 text-center">Iconos creados por <a href="https://www.flaticon.com/authors/stickers" title="Stickers">Stickers</a>, <a href="" title="Vitaly Gorbachev">Vitaly Gorbachev</a>, <a href="https://www.freepik.com" title="Freepik">Freepik</a> y <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a> de <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
					<div class="col-12 text-center">Fotos y Mockups Cortesía de Karla Valle</div>
					<div class="col-12 text-center">
						<p> © Creado con Amor por Francisco Valle 2021</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="invisibles">
<!-- Generator: Adobe Illustrator 18.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg version="1.1" id="computer-svg"
	xmlns="http://www.w3.org/2000/svg"
	xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1400 980" enable-background="new 0 0 1400 980" xml:space="preserve">
	<rect fill="#44EABB" width="1400" height="980"/>
	<g>
		<g>
			<g>
				<g>
					<g enable-background="new    ">
						<g>
							<polygon fill="#4A4B4B" points="1178.9,622.4 1120.3,589.2 1120.3,582.9 1178.9,616 						"/>
						</g>
						<g>
							<polygon fill="#5A5A5A" points="1009,647.6 1120.3,582.9 1120.3,589.2 1009,653.9 						"/>
						</g>
						<g>
							<polygon fill="#282827" points="1009,647.6 1067.5,680.7 1067.5,687.1 1009,653.9 						"/>
						</g>
						<g>
							<polygon fill="#282827" points="1067.5,680.7 1178.9,616 1178.9,622.4 1067.5,687.1 						"/>
						</g>
						<g>
							<path fill="#F8F8F8" d="M1126,577.9c-2.5-1.5-6.7-1.5-9.2,0l-129,74.9c-2.5,1.5-2.5,3.9,0,5.3l61.4,34.8
							c2.5,1.5,6.7,1.5,9.2,0l129-74.9c2.5-1.5,2.5-3.9,0-5.3L1126,577.9z M1178.9,616l-111.3,64.7l-58.6-33.1l111.3-64.7
							L1178.9,616z"/>
						</g>
						<path fill="#8A8C8D" d="M1058.4,699.4c-0.3,0.2-0.6,0.3-0.9,0.4c-0.1,0-0.2,0.1-0.3,0.1c-0.1,0-0.2,0.1-0.3,0.1
						c-0.1,0-0.2,0.1-0.3,0.1c-0.2,0.1-0.4,0.1-0.7,0.2c-0.1,0-0.2,0-0.2,0.1c-0.2,0-0.4,0.1-0.5,0.1c-0.1,0-0.1,0-0.2,0
						c0,0-0.1,0-0.1,0c-0.2,0-0.5,0-0.7,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0c-0.2,0-0.4,0-0.6,0
						c-0.1,0-0.2,0-0.2,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.2,0-0.2,0c-0.2,0-0.4-0.1-0.6-0.1c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0
						c-0.1,0-0.2,0-0.3-0.1c-0.2-0.1-0.4-0.1-0.6-0.2c-0.1,0-0.1,0-0.2-0.1c0,0,0,0-0.1,0c-0.3-0.1-0.6-0.3-0.9-0.4l-61.4-34.8
						c-1.3-0.7-1.9-1.7-1.9-2.7l0-6.4c0,1,0.6,1.9,1.9,2.7l61.4,34.8c0.3,0.2,0.6,0.3,1,0.5c0.1,0,0.1,0,0.2,0.1
						c0.3,0.1,0.6,0.2,0.9,0.3c0.1,0,0.1,0,0.2,0c0.3,0.1,0.7,0.1,1,0.2c0.1,0,0.1,0,0.2,0c0.4,0,0.7,0.1,1.1,0.1c0.1,0,0.1,0,0.2,0
						c0.4,0,0.7,0,1.1-0.1c0.1,0,0.1,0,0.2,0c0.3,0,0.5-0.1,0.8-0.1c0.2,0,0.4-0.1,0.7-0.2c0.2-0.1,0.4-0.1,0.6-0.2
						c0.1,0,0.2-0.1,0.3-0.1c0.3-0.1,0.6-0.3,0.9-0.4l129-74.9c0.2-0.1,0.3-0.2,0.4-0.3c0.2-0.1,0.3-0.2,0.5-0.3
						c0.2-0.2,0.4-0.4,0.5-0.6c0,0,0-0.1,0.1-0.1c0.1-0.2,0.2-0.4,0.3-0.6c0,0,0,0,0-0.1c0.1-0.2,0.1-0.4,0.1-0.7l0,6.4
						c0,0,0,0,0,0.1c0,0.1,0,0.2,0,0.4c0,0.1,0,0.2-0.1,0.2c0,0,0,0,0,0.1c0,0,0,0,0,0.1c0,0.1-0.1,0.2-0.2,0.4
						c0,0.1-0.1,0.1-0.1,0.2c0,0,0,0.1-0.1,0.1c0,0,0,0.1-0.1,0.1c-0.1,0.1-0.3,0.3-0.4,0.4c0,0,0,0,0,0c-0.1,0.1-0.3,0.2-0.5,0.3
						c-0.1,0.1-0.2,0.2-0.3,0.2c0,0-0.1,0-0.1,0v0L1058.4,699.4z"/>
						<g>
							<polygon fill="#282827" points="998.5,650.3 1119.7,579.8 1183.5,615.9 1062.3,686.4 						"/>
						</g>
						<g>
							<polygon fill="#5E7C84" points="1119.7,579.8 1183.5,615.9 1062.3,686.4 						"/>
						</g>
					</g>
				</g>
			</g>
		</g>
		<g>
			<g>
				<g>
					<g>
						<g enable-background="new    ">
							<g>
								<path fill="#72706D" d="M1071.7,504.7c4.7,2.7,12.4,2.7,17.1,0l134.2-78.5c4.7-2.7,4.8-7.2,0-9.9l-194.8-113.5
								c-4.7-2.7-12.4-2.7-17.1,0l-134.2,78.5c-4.7,2.7-4.8,7.2,0,9.9L1071.7,504.7z"/>
							</g>
							<path fill="#3A3A3A" d="M1071.7,508.4c0.5,0.3,1.1,0.6,1.7,0.8c0.2,0.1,0.3,0.1,0.5,0.2c0.2,0.1,0.3,0.1,0.5,0.2
							c0.2,0.1,0.4,0.1,0.6,0.2c0.4,0.1,0.8,0.2,1.2,0.3c0.1,0,0.3,0.1,0.4,0.1c0.3,0.1,0.7,0.1,1,0.1c0.1,0,0.2,0,0.4,0.1
							c0.1,0,0.1,0,0.2,0c0.4,0,0.9,0.1,1.3,0.1c0.2,0,0.4,0,0.5,0c0.1,0,0.2,0,0.3,0c0.1,0,0.3,0,0.4,0c0.4,0,0.8,0,1.2-0.1
							c0.1,0,0.3,0,0.4,0c0.1,0,0.2,0,0.3,0c0.1,0,0.3,0,0.4,0c0.4-0.1,0.8-0.1,1.2-0.2c0.1,0,0.2-0.1,0.3-0.1
							c0.1,0,0.2-0.1,0.3-0.1c0.2-0.1,0.4-0.1,0.6-0.2c0.4-0.1,0.7-0.2,1.1-0.4c0.1,0,0.2-0.1,0.3-0.1c0,0,0.1,0,0.1,0
							c0.6-0.2,1.2-0.5,1.7-0.8l134.2-78.5c2.4-1.4,3.6-3.2,3.6-5l0-3.6c0,1.8-1.2,3.6-3.6,5l-134.2,78.5c-0.6,0.3-1.2,0.6-1.8,0.9
							c-0.1,0-0.2,0.1-0.3,0.1c-0.5,0.2-1.1,0.4-1.7,0.5c-0.1,0-0.2,0.1-0.3,0.1c-0.6,0.1-1.3,0.3-1.9,0.3c-0.1,0-0.2,0-0.3,0
							c-0.7,0.1-1.3,0.1-2,0.1c-0.1,0-0.2,0-0.3,0c-0.7,0-1.4,0-2-0.1c-0.1,0-0.2,0-0.4-0.1c-0.5-0.1-1-0.2-1.5-0.3
							c-0.4-0.1-0.8-0.2-1.2-0.3c-0.4-0.1-0.8-0.2-1.1-0.3c-0.2-0.1-0.3-0.1-0.5-0.2c-0.6-0.2-1.2-0.5-1.7-0.8L876.8,391.2
							c-0.3-0.2-0.5-0.4-0.7-0.5c-0.3-0.2-0.6-0.4-0.9-0.6c-0.4-0.3-0.7-0.7-1-1.1c0-0.1-0.1-0.1-0.1-0.2c-0.2-0.4-0.4-0.7-0.6-1.1
							c0,0,0-0.1,0-0.1c-0.1-0.4-0.2-0.8-0.2-1.2l0,3.6c0,0,0,0.1,0,0.1c0,0.2,0,0.5,0.1,0.7c0,0.1,0.1,0.3,0.1,0.4c0,0,0,0.1,0,0.1
							c0,0,0,0.1,0,0.1c0.1,0.2,0.2,0.5,0.3,0.7c0.1,0.1,0.2,0.2,0.2,0.3c0,0.1,0.1,0.1,0.1,0.2c0,0.1,0.1,0.1,0.1,0.2
							c0.2,0.3,0.5,0.5,0.8,0.8c0,0,0.1,0,0.1,0.1c0.2,0.2,0.6,0.4,0.9,0.6c0.2,0.1,0.4,0.3,0.6,0.4c0,0,0.1,0.1,0.1,0.1v0
							L1071.7,508.4z"/>
						</g>
					</g>
				</g>
			</g>
		</g>
		<g>
			<g>
				<path fill="#383838" d="M1125.1,394c-18.9-21.3-41.1-32.3-59.8-37.8c-20.7-6.2-43.2-3.1-61.5,8.5l-12.6,7.9
				c-3.4,2.2-5.5,5.9-5.5,10v0c0,4.1,2.1,7.9,5.6,10l61.2,37.6c18.5,11.4,41.7,11.5,60.4,0.4l7.1-4.2
				C1131.5,419.5,1133.9,403.9,1125.1,394z"/>
			</g>
			<path fill="#323232" d="M1125.4,394.3c-0.3,6.8-3.9,13.5-10.3,17.3l-7.1,4.2c-18.6,11.1-41.9,11-60.4-0.4l-60.9-37.4
			c-0.6,1.4-0.9,2.9-0.9,4.4c0,4.1,2.1,7.9,5.6,10l61.2,37.6c18.5,11.4,41.7,11.5,60.4,0.4l7.1-4.2
			C1131.3,419.6,1133.8,404.3,1125.4,394.3z"/>
			<path fill="#212321" d="M1047.2,371.9c-0.1,0-0.2,0-0.3-0.1c-19.3-9.8-42.8-5.2-48.3-3.9l2.9-1.9c8.8-1.6,28.9-3.9,46,4.7
			c0.3,0.2,0.4,0.5,0.3,0.8C1047.7,371.8,1047.4,371.9,1047.2,371.9z"/>
		</g>
		<g>
			<g>
				<g>
					<g enable-background="new    ">
						<g>
							<path fill="#A3A4A4" d="M846,127.9c-2.4-1.4-6.3-1.4-8.6,0l-96.2,55.9c-2.4,1.4-2.4,3.6,0,5l57.8,32.7c2.4,1.4,6.3,1.4,8.6,0
							l96.2-55.9c2.4-1.4,2.4-3.6,0-5L846,127.9z"/>
						</g>
						<path fill="#8A8C8D" d="M807.5,393.6c-0.3,0.2-0.6,0.3-0.9,0.4c-0.1,0-0.2,0.1-0.2,0.1c-0.1,0-0.2,0.1-0.3,0.1
						c-0.1,0-0.2,0.1-0.3,0.1c-0.2,0.1-0.4,0.1-0.6,0.2c-0.1,0-0.1,0-0.2,0.1c-0.2,0-0.3,0-0.5,0.1c-0.1,0-0.1,0-0.2,0
						c0,0-0.1,0-0.1,0c-0.2,0-0.5,0-0.7,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0c-0.2,0-0.4,0-0.6,0
						c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.2,0-0.2,0c-0.2,0-0.4-0.1-0.6-0.1c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0
						c-0.1,0-0.2,0-0.3-0.1c-0.2-0.1-0.4-0.1-0.5-0.2c-0.1,0-0.1,0-0.2-0.1c0,0,0,0-0.1,0c-0.3-0.1-0.6-0.3-0.9-0.4l-57.8-32.7
						c-1.2-0.7-1.8-1.6-1.8-2.5l0-172.1c0,0.9,0.6,1.8,1.8,2.5l57.8,32.7c0.3,0.2,0.6,0.3,0.9,0.4c0,0,0.1,0,0.2,0.1
						c0.3,0.1,0.6,0.2,0.8,0.3c0.1,0,0.1,0,0.2,0c0.3,0.1,0.6,0.1,1,0.2c0.1,0,0.1,0,0.2,0c0.3,0,0.7,0.1,1,0.1c0.1,0,0.1,0,0.2,0
						c0.3,0,0.7,0,1-0.1c0.1,0,0.1,0,0.2,0c0.2,0,0.5-0.1,0.7-0.1c0.2,0,0.4-0.1,0.6-0.2c0.2-0.1,0.4-0.1,0.6-0.2
						c0.1,0,0.2-0.1,0.2-0.1c0.3-0.1,0.6-0.3,0.9-0.4l96.2-55.9c0.1-0.1,0.3-0.2,0.4-0.3c0.2-0.1,0.3-0.2,0.4-0.3
						c0.2-0.2,0.4-0.4,0.5-0.5c0,0,0-0.1,0.1-0.1c0.1-0.2,0.2-0.4,0.3-0.6c0,0,0,0,0-0.1c0.1-0.2,0.1-0.4,0.1-0.6l0,172.1
						c0,0,0,0,0,0.1c0,0.1,0,0.2,0,0.4c0,0.1,0,0.1-0.1,0.2c0,0,0,0,0,0.1c0,0,0,0,0,0.1c0,0.1-0.1,0.2-0.2,0.3
						c0,0.1-0.1,0.1-0.1,0.2c0,0,0,0.1-0.1,0.1c0,0,0,0.1-0.1,0.1c-0.1,0.1-0.2,0.3-0.4,0.4c0,0,0,0,0,0c-0.1,0.1-0.3,0.2-0.4,0.3
						c-0.1,0.1-0.2,0.2-0.3,0.2c0,0,0,0-0.1,0v0L807.5,393.6z"/>
						<path fill="#3A3A3A" d="M905.5,163.7C905.4,163.8,905.4,163.8,905.5,163.7c-0.1,0.3-0.2,0.5-0.3,0.6c0,0,0,0.1-0.1,0.1
						c-0.1,0.2-0.3,0.4-0.5,0.5c-0.1,0.1-0.3,0.2-0.4,0.3c-0.1,0.1-0.2,0.2-0.4,0.3l-96.2,55.9c-0.3,0.2-0.6,0.3-0.9,0.4
						c-0.1,0-0.2,0.1-0.2,0.1c-0.2,0.1-0.4,0.1-0.6,0.2c-0.2,0.1-0.4,0.1-0.6,0.2c-0.2,0-0.5,0.1-0.7,0.1c-0.1,0-0.1,0-0.2,0
						c-0.3,0-0.7,0.1-1,0.1c-0.1,0-0.1,0-0.2,0c-0.3,0-0.7,0-1-0.1c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0v172.1c0.1,0,0.1,0,0.2,0
						s0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.2,0,0.4,0,0.6,0c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0c0.2,0,0.5,0,0.7,0
						c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0c0.2,0,0.3,0,0.5-0.1c0.1,0,0.1,0,0.2-0.1c0.2,0,0.4-0.1,0.6-0.2c0.1,0,0.2,0,0.3-0.1
						c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.2-0.1,0.2-0.1c0.3-0.1,0.6-0.3,0.9-0.4l96.2-55.9v0c0,0,0.1,0,0.1,0c0.1-0.1,0.2-0.1,0.3-0.2
						c0.2-0.1,0.3-0.2,0.4-0.3c0,0,0,0,0,0c0.1-0.1,0.3-0.3,0.4-0.4c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0.1-0.1c0-0.1,0.1-0.1,0.1-0.2
						c0.1-0.1,0.1-0.2,0.2-0.3c0,0,0,0,0-0.1c0,0,0,0,0-0.1c0-0.1,0-0.1,0.1-0.2c0-0.1,0-0.2,0-0.4c0,0,0,0,0-0.1l0-172.1
						C905.6,163.3,905.5,163.5,905.5,163.7z"/>
					</g>
				</g>
			</g>
			<g>
				<path fill="#8D8E8F" d="M855.2,222c22.3-12.9,40.4-2.5,40.5,23.1s-17.9,56.8-40.2,69.7s-40.4,2.5-40.5-23.1
				S832.9,234.9,855.2,222z"/>
			</g>
			<g>
				<path fill="#3A3A3A" d="M855.3,231.4c17.7-10.2,32.2-2,32.2,18.4c0.1,20.4-14.3,45.2-32,55.5c-17.7,10.2-32.2,2-32.2-18.4
				C823.2,266.5,837.5,241.7,855.3,231.4z"/>
			</g>
			<g>
				<path fill="#8D8E8F" d="M855.3,253.5c7.2-4.1,13-0.8,13,7.4c0,8.2-5.8,18.2-12.9,22.4s-13,0.8-13-7.4
				C842.4,267.6,848.2,257.6,855.3,253.5z"/>
			</g>
			<g>
				<path fill="#8D8E8F" d="M848.6,343.1c3.2-1.9,5.9-0.4,5.9,3.4c0,3.7-2.6,8.3-5.9,10.1c-3.2,1.9-5.9,0.4-5.9-3.4
				C842.7,349.5,845.3,345,848.6,343.1z"/>
			</g>
			<g>
				<path fill="#8D8E8F" d="M867.6,332.6c3.2-1.9,5.9-0.4,5.9,3.4c0,3.7-2.6,8.3-5.9,10.1c-3.2,1.9-5.9,0.4-5.9-3.4
				C861.7,339,864.3,334.4,867.6,332.6z"/>
			</g>
		</g>
		<g>
			<g>
				<g enable-background="new    ">
					<path fill="#626363" d="M334.2,628.5c-3-2-4.8-5.4-4.9-9l-0.8-306.7c0-0.2,0-0.4,0-0.6c0-0.2,0-0.4,0-0.6c0-0.1,0-0.2,0-0.3
					c0,0,0-0.1,0-0.1c0-0.1,0-0.1,0-0.2c0-0.2,0-0.4,0.1-0.6c0-0.2,0.1-0.4,0.1-0.6c0,0,0,0,0,0c0,0,0,0,0,0c0-0.2,0.1-0.4,0.1-0.6
					c0-0.2,0.1-0.4,0.1-0.6c0-0.1,0-0.2,0.1-0.2c0,0,0-0.1,0-0.1c0-0.1,0-0.2,0.1-0.3c0.1-0.2,0.1-0.4,0.2-0.7
					c0-0.2,0.1-0.3,0.1-0.5c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1c0.1-0.2,0.1-0.4,0.2-0.6c0.1-0.2,0.1-0.4,0.2-0.6c0,0,0-0.1,0-0.1
					c0,0,0-0.1,0-0.1c0-0.1,0.1-0.3,0.1-0.4c0.1-0.2,0.2-0.4,0.2-0.6c0.1-0.1,0.1-0.3,0.2-0.4c0,0,0,0,0-0.1c0,0,0-0.1,0-0.1
					c0.1-0.2,0.2-0.4,0.3-0.6c0.1-0.2,0.2-0.4,0.3-0.7c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0.1-0.1c0.1-0.2,0.2-0.3,0.3-0.5
					c0.1-0.2,0.2-0.4,0.4-0.6c0.1-0.1,0.1-0.2,0.2-0.3c0,0,0-0.1,0.1-0.1c0.1-0.2,0.2-0.4,0.3-0.5c0.2-0.3,0.3-0.5,0.5-0.8
					c0,0,0.1-0.1,0.1-0.1c0.3-0.4,0.5-0.8,0.8-1.1c0.2-0.2,0.4-0.5,0.5-0.7c0.2-0.2,0.3-0.4,0.5-0.6c0,0,0,0,0,0c0,0,0,0,0,0
					c0.2-0.2,0.3-0.4,0.5-0.6c0.2-0.2,0.3-0.4,0.5-0.5c0,0,0.1-0.1,0.1-0.1c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0.2-0.2,0.3-0.4
					c0.2-0.2,0.3-0.3,0.5-0.5c0.1-0.1,0.1-0.1,0.2-0.2c0,0,0.1-0.1,0.1-0.1c0.1-0.1,0.2-0.2,0.3-0.2c0.2-0.2,0.4-0.3,0.5-0.5
					c0.1-0.1,0.2-0.1,0.2-0.2c0,0,0.1-0.1,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1c0.2-0.1,0.4-0.3,0.5-0.4c0.1-0.1,0.3-0.2,0.4-0.3
					c0,0,0,0,0.1,0c0,0,0,0,0.1,0c0.2-0.1,0.3-0.2,0.5-0.3c0.2-0.1,0.3-0.2,0.5-0.3c0,0,0.1,0,0.1-0.1L762.9,47.8
					c0.1-0.1,0.3-0.1,0.4-0.2c0.2-0.1,0.3-0.2,0.5-0.3c0.1-0.1,0.2-0.1,0.3-0.2c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0
					c0.2-0.1,0.3-0.1,0.5-0.2c0.2-0.1,0.3-0.1,0.5-0.2c0,0,0.1,0,0.1,0c0,0,0,0,0.1,0c0.1,0,0.2-0.1,0.3-0.1
					c0.2-0.1,0.3-0.1,0.5-0.1c0.1,0,0.2,0,0.2-0.1c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0c0.2,0,0.4-0.1,0.5-0.1c0.1,0,0.2,0,0.3,0
					c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c0.2,0,0.4,0,0.6,0c0.1,0,0.2,0,0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0
					c0.2,0,0.5,0.1,0.7,0.1c0,0,0,0,0,0c0.1,0,0.1,0,0.2,0c0.2,0.1,0.5,0.1,0.7,0.2c0,0,0,0,0.1,0c0.3,0.1,0.6,0.3,0.9,0.4l9.4,6.3
					c-0.3-0.2-0.6-0.3-0.9-0.4c-0.2-0.1-0.5-0.2-0.8-0.2c-0.1,0-0.1,0-0.2,0c-0.3-0.1-0.6-0.1-0.9-0.1c-0.1,0-0.1,0-0.2,0
					c-0.3,0-0.6,0-0.9,0c0,0-0.1,0-0.1,0c-0.3,0-0.7,0.1-1,0.2c0,0-0.1,0-0.1,0c-0.4,0.1-0.7,0.2-1.1,0.3c0,0,0,0-0.1,0
					c-0.4,0.1-0.8,0.3-1.2,0.5c0,0-0.1,0-0.1,0c-0.4,0.2-0.8,0.4-1.2,0.6L350.2,297.7c-0.4,0.2-0.8,0.5-1.2,0.8c0,0,0,0-0.1,0.1
					c-0.4,0.3-0.8,0.5-1.1,0.8c0,0-0.1,0.1-0.1,0.1c-0.4,0.3-0.7,0.6-1.1,0.9c0,0-0.1,0.1-0.1,0.1c-0.3,0.3-0.7,0.7-1,1
					c0,0-0.1,0.1-0.1,0.1c-0.4,0.4-0.7,0.8-1,1.2c0,0,0,0,0,0c-0.3,0.4-0.7,0.8-1,1.3c0,0,0,0,0,0c-0.3,0.4-0.6,0.8-0.9,1.2
					c-0.2,0.3-0.3,0.5-0.5,0.8c-0.1,0.2-0.3,0.4-0.4,0.7c-0.1,0.1-0.1,0.2-0.2,0.3c-0.2,0.4-0.4,0.8-0.6,1.2c0,0,0,0.1-0.1,0.1
					c-0.2,0.5-0.5,0.9-0.7,1.4c0,0,0,0.1,0,0.1c-0.2,0.5-0.4,0.9-0.6,1.4c0,0,0,0.1,0,0.1c-0.2,0.5-0.3,1-0.5,1.5c0,0,0,0.1,0,0.1
					c-0.1,0.5-0.3,0.9-0.4,1.4c0,0,0,0.1,0,0.1c-0.1,0.5-0.2,1-0.3,1.5c0,0,0,0,0,0c-0.1,0.5-0.1,1-0.2,1.5c0,0,0,0.1,0,0.1
					c0,0.5-0.1,1-0.1,1.4l2.7,314.2L334.2,628.5z"/>
					<g>
						<path fill="#C4C4C4" d="M338.8,629.1c0,4.3,4.7,7,8.4,4.9l438.4-253.1l-0.9-319.7c0-7.8-5.6-11-12.4-7.1L350.2,297.7
						c-6.8,3.9-12.3,13.5-12.3,21.3L338.8,629.1z M356.5,314.3L765.8,78l0.8,276.4L357.3,590.7L356.5,314.3z"/>
						<path fill="#626363" d="M344.4,631.1c-1,0-2.1-0.8-2.1-2.1l-0.8-310c0-6.6,4.8-14.9,10.5-18.3L774.1,57.1
						c1.4-0.8,2.7-1.2,3.8-1.2c2.9,0,3.3,3.3,3.3,5.2l0.8,317.7L345.4,630.8C345.1,631,344.7,631.1,344.4,631.1L344.4,631.1z"/>
					</g>
					<g>
						<polygon fill="#5E7C84" points="356.5,314.3 765.8,78 766.6,354.4 357.3,590.7 					"/>
					</g>
					<g>
						<polygon fill="#7E9196" points="356.5,314.3 765.8,78 357.3,590.7 					"/>
					</g>
				</g>
			</g>
			<g>
				<g enable-background="new    ">
					<path fill="#626363" d="M662,823.9c-0.9,0.5-1.9,1-3,1.4c-0.3,0.1-0.6,0.2-0.8,0.3c-0.3,0.1-0.6,0.2-0.9,0.3
					c-0.4,0.1-0.8,0.2-1.1,0.3c-0.7,0.2-1.4,0.4-2.2,0.5c-0.3,0.1-0.5,0.1-0.8,0.2c-0.6,0.1-1.2,0.2-1.8,0.3c-0.2,0-0.4,0.1-0.7,0.1
					c-0.1,0-0.2,0-0.3,0c-0.8,0.1-1.6,0.1-2.4,0.2c-0.3,0-0.6,0-0.9,0c-0.2,0-0.4,0-0.6,0c-0.2,0-0.5,0-0.7,0
					c-0.7,0-1.4-0.1-2.1-0.1c-0.3,0-0.5-0.1-0.8-0.1c-0.2,0-0.4,0-0.5-0.1c-0.3,0-0.5-0.1-0.8-0.1c-0.7-0.1-1.4-0.2-2.1-0.4
					c-0.2,0-0.4-0.1-0.5-0.1c-0.2,0-0.4-0.1-0.6-0.1c-0.4-0.1-0.7-0.2-1.1-0.3c-0.6-0.2-1.3-0.4-1.9-0.6c-0.2-0.1-0.4-0.1-0.5-0.2
					c-0.1,0-0.1,0-0.2-0.1c-1.1-0.4-2.1-0.9-3.1-1.5L350.6,661.7c-4.2-2.4-6.3-5.6-6.3-8.8l0.1-13.6c0,3.2,2.1,6.4,6.3,8.8
					l281.1,162.3c1,0.6,2.1,1.1,3.3,1.5c0.2,0.1,0.4,0.1,0.5,0.2c1,0.3,2,0.7,3,0.9c0.2,0,0.4,0.1,0.6,0.1c1.1,0.3,2.3,0.5,3.5,0.6
					c0.2,0,0.4,0,0.5,0.1c1.2,0.1,2.4,0.2,3.6,0.2c0.2,0,0.4,0,0.6,0c1.2,0,2.4-0.1,3.6-0.2c0.2,0,0.4-0.1,0.7-0.1
					c0.9-0.1,1.7-0.3,2.6-0.4c0.7-0.2,1.4-0.3,2.2-0.5c0.7-0.2,1.4-0.4,2-0.6c0.3-0.1,0.6-0.2,0.8-0.3c1-0.4,2.1-0.9,3-1.4
					l425.8-247.5c0.5-0.3,0.9-0.6,1.3-0.9c0.5-0.4,1.1-0.7,1.5-1.1c0.7-0.6,1.2-1.2,1.7-1.9c0.1-0.1,0.2-0.2,0.2-0.4
					c0.4-0.7,0.8-1.3,1-2c0-0.1,0-0.2,0.1-0.2c0.2-0.7,0.4-1.5,0.4-2.2l-0.1,13.6c0,0.1,0,0.1,0,0.2c0,0.4-0.1,0.8-0.1,1.2
					c-0.1,0.3-0.1,0.5-0.2,0.8c0,0.1,0,0.2-0.1,0.2c0,0.1,0,0.1-0.1,0.2c-0.2,0.4-0.3,0.8-0.6,1.2c-0.1,0.2-0.3,0.4-0.4,0.6
					c-0.1,0.1-0.2,0.2-0.2,0.4c-0.1,0.1-0.1,0.2-0.2,0.3c-0.4,0.5-0.8,1-1.3,1.4c0,0-0.1,0.1-0.1,0.1c-0.4,0.4-1,0.8-1.5,1.1
					c-0.4,0.3-0.7,0.5-1.1,0.8c-0.1,0.1-0.2,0.1-0.3,0.2v0L662,823.9z"/>
				</g>
			</g>
			<path fill="#BCB0B0" d="M1087.8,545.3c8.4,4.9,8.4,12.7,0.1,17.6L662,810.3c-8.3,4.9-21.9,4.9-30.3,0L350.6,648
			c-8.4-4.9-8.4-12.7-0.1-17.6L776.4,383c8.4-4.9,21.9-4.9,30.3,0L1087.8,545.3z"/>
			<path fill="#626363" d="M932.9,639.2c2.6,1.5,2.6,3.9,0,5.3l-129.5,75.2c-2.5,1.5-6.7,1.5-9.2,0l-85.5-49.3
			c-2.6-1.5-2.6-3.9,0-5.3l129.5-75.2c2.5-1.5,6.7-1.5,9.2,0L932.9,639.2z"/>
			<g>
				<g enable-background="new    ">
					<g>
						<polygon fill="#626363" points="816.5,419.8 816.5,434.7 795.1,447.1 795.1,432.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="837.8,432.2 837.8,447.1 816.5,434.7 816.5,419.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="837.8,432.2 837.8,447.1 816.4,459.4 816.4,444.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="816.4,444.6 816.4,459.4 795.1,447.1 795.1,432.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="789.4,435.5 789.5,450.3 768,462.7 768,447.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="810.7,447.8 810.8,462.7 789.5,450.3 789.4,435.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="845,436.4 845,451.3 823.6,463.6 823.5,448.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="866.3,448.8 866.3,463.6 845,451.3 845,436.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="789.3,460.2 789.3,475.1 768,462.7 768,447.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="810.7,447.8 810.8,462.7 789.3,475.1 789.3,460.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="844.9,461.1 844.9,476 823.6,463.6 823.5,448.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="866.3,448.8 866.3,463.6 844.9,476 844.9,461.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="762.3,451.1 762.4,466 741,478.3 740.9,463.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="783.6,463.5 783.7,478.3 762.4,466 762.3,451.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="817.9,452 818,466.9 796.5,479.3 796.5,464.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="839.2,464.4 839.3,479.3 818,466.9 817.9,452 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="873.5,453 873.5,467.8 852.1,480.2 852,465.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="894.8,465.3 894.8,480.2 873.5,467.8 873.5,453 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="783.6,463.5 783.7,478.3 762.3,490.7 762.2,475.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="762.3,451.1 783.6,463.5 762.2,475.8 740.9,463.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="762.2,475.8 762.3,490.7 741,478.3 740.9,463.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="839.2,464.4 839.3,479.3 817.8,491.6 817.8,476.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="817.8,476.8 817.8,491.6 796.5,479.3 796.5,464.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="873.4,477.7 873.4,492.6 852.1,480.2 852,465.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="894.8,465.3 894.8,480.2 873.4,492.6 873.4,477.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="735.3,466.7 735.3,481.6 713.9,494 713.8,479.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="756.6,479.1 756.6,494 735.3,481.6 735.3,466.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="790.8,467.6 790.9,482.5 769.5,494.9 769.4,480 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="812.1,480 812.2,494.9 790.9,482.5 790.8,467.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="846.4,468.6 846.5,483.4 825,495.8 825,481 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="867.7,481 867.8,495.8 846.5,483.4 846.4,468.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="902,469.5 902,484.4 880.6,496.8 880.6,481.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="923.3,481.9 923.3,496.8 902,484.4 902,469.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="756.6,479.1 756.6,494 735.2,506.3 735.1,491.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="735.1,491.5 735.2,506.3 713.9,494 713.8,479.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="812.1,480 812.2,494.9 790.8,507.3 790.7,492.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="790.7,492.4 790.8,507.3 769.5,494.9 769.4,480 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="846.3,493.3 846.3,508.2 825,495.8 825,481 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="867.7,481 867.8,495.8 846.3,508.2 846.3,493.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="708.2,482.3 708.3,497.2 686.8,509.6 686.8,494.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="729.5,494.7 729.6,509.6 708.3,497.2 708.2,482.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="923.3,481.9 923.3,496.8 901.9,509.1 901.8,494.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="901.8,494.3 901.9,509.1 880.6,496.8 880.6,481.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="763.8,483.3 763.8,498.1 742.4,510.5 742.3,495.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="785.1,495.7 785.1,510.5 763.8,498.1 763.8,483.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="819.3,484.2 819.4,499.1 798,511.4 797.9,496.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="840.6,496.6 840.7,511.5 819.4,499.1 819.3,484.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="874.9,485.2 875,500 853.5,512.4 853.5,497.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="896.2,497.5 896.3,512.4 875,500 874.9,485.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="930.5,486.1 930.5,501 909.1,513.3 909.1,498.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="951.8,498.5 951.8,513.3 930.5,501 930.5,486.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="708.2,482.3 729.5,494.7 708.1,507.1 686.8,494.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="729.5,494.7 729.6,509.6 708.1,522 708.1,507.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="708.1,507.1 708.1,522 686.8,509.6 686.8,494.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="763.6,508 763.7,522.9 742.4,510.5 742.3,495.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="785.1,495.7 785.1,510.5 763.7,522.9 763.6,508 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="840.6,496.6 840.7,511.5 819.3,523.8 819.2,509 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="819.2,509 819.3,523.8 798,511.4 797.9,496.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="681.2,498 681.2,512.8 659.8,525.2 659.7,510.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="702.5,510.3 702.5,525.2 681.2,512.8 681.2,498 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="874.8,509.9 874.8,524.8 853.5,512.4 853.5,497.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="896.2,497.5 896.3,512.4 874.8,524.8 874.8,509.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="736.7,498.9 736.8,513.8 715.3,526.1 715.3,511.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="758,511.3 758.1,526.1 736.8,513.8 736.7,498.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="930.3,510.8 930.4,525.7 909.1,513.3 909.1,498.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="951.8,498.5 951.8,513.3 930.4,525.7 930.3,510.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="930.5,486.1 951.8,498.5 930.3,510.8 909.1,498.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="792.3,499.8 792.3,514.7 770.9,527.1 770.8,512.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="813.6,512.2 813.6,527.1 792.3,514.7 792.3,499.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="847.9,500.8 847.9,515.6 826.5,528 826.4,513.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="869.1,513.2 869.2,528 847.9,515.6 847.9,500.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="903.4,501.7 903.5,516.6 882,529 882,514.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="924.7,514.1 924.8,528.9 903.5,516.6 903.4,501.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="681,522.7 681.1,537.6 659.7,525.2 659.7,510.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="702.5,510.3 702.5,525.2 681.1,537.6 681,522.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="736.6,523.7 736.6,538.5 715.3,526.1 715.3,511.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="758,511.3 758.1,526.1 736.6,538.5 736.6,523.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="813.6,512.2 813.6,527.1 792.2,539.5 792.1,524.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="792.1,524.6 792.2,539.5 770.9,527.1 770.8,512.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="654.1,513.6 654.1,528.4 632.7,540.8 632.7,526 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="675.4,526 675.4,540.8 654.1,528.4 654.1,513.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="847.9,500.8 869.1,513.2 847.7,525.5 826.4,513.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="869.1,513.2 869.2,528 847.8,540.4 847.7,525.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="847.7,525.5 847.8,540.4 826.5,528 826.4,513.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="709.6,514.5 709.7,529.4 688.2,541.8 688.2,526.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="731,526.9 731,541.8 709.7,529.4 709.6,514.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="903.4,501.7 924.7,514.1 903.3,526.5 882,514.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="903.3,526.5 903.3,541.3 882,529 882,514.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="924.7,514.1 924.8,528.9 903.3,541.3 903.3,526.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="765.2,515.5 765.3,530.3 743.8,542.7 743.8,527.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="786.5,527.8 786.6,542.7 765.3,530.3 765.2,515.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="820.8,516.4 820.8,531.3 799.4,543.6 799.4,528.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="842.1,528.8 842.1,543.6 820.8,531.3 820.8,516.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="876.4,517.3 876.4,532.2 855,544.6 854.9,529.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="897.6,529.7 897.7,544.6 876.4,532.2 876.4,517.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="654.1,513.6 675.4,526 654,538.3 632.7,526 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="654,538.3 654,553.2 632.7,540.8 632.7,526 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="675.4,526 675.4,540.8 654,553.2 654,538.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="709.6,514.5 731,526.9 709.5,539.3 688.2,526.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="731,526.9 731,541.8 709.6,554.1 709.5,539.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="709.5,539.3 709.6,554.1 688.2,541.8 688.2,526.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="786.5,527.8 786.6,542.7 765.1,555.1 765.1,540.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="765.2,515.5 786.5,527.8 765.1,540.2 743.8,527.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="765.1,540.2 765.1,555.1 743.8,542.7 743.8,527.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="605.6,541.6 627,529.2 627.1,544.1 605.6,556.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="648.3,541.6 648.4,556.5 627.1,544.1 627,529.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="842.1,528.8 842.1,543.6 820.7,556 820.6,541.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="820.8,516.4 842.1,528.8 820.6,541.2 799.4,528.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="820.6,541.2 820.7,556 799.4,543.6 799.4,528.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="682.6,530.1 682.6,545 661.2,557.4 661.2,542.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="703.9,542.5 703.9,557.4 682.6,545 682.6,530.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="897.6,529.7 897.7,544.6 876.3,556.9 876.2,542.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="876.2,542.1 876.3,556.9 855,544.6 854.9,529.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="876.4,517.3 897.6,529.7 876.2,542.1 854.9,529.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="738.1,531.1 738.2,545.9 716.7,558.3 716.7,543.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="759.5,543.5 759.5,558.3 738.2,545.9 738.1,531.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="793.7,532 793.8,546.9 772.3,559.3 772.3,544.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="815,544.4 815.1,559.3 793.8,546.9 793.7,532 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="849.3,533 849.3,547.8 827.9,560.2 827.9,545.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="870.6,545.3 870.6,560.2 849.3,547.8 849.3,533 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="648.3,541.6 648.4,556.5 626.9,568.8 626.9,554 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="605.6,541.6 626.9,554 626.9,568.8 605.6,556.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="703.9,542.5 703.9,557.4 682.5,569.8 682.5,554.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="682.5,554.9 682.5,569.8 661.2,557.4 661.2,542.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="738.1,531.1 759.5,543.5 738,555.8 716.7,543.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="738,555.8 738,570.7 716.7,558.3 716.7,543.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="759.5,543.5 759.5,558.3 738,570.7 738,555.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="600,544.8 600,559.7 578.6,572.1 578.5,557.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="621.3,557.2 621.3,572.1 600,559.7 600,544.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="815,544.4 815.1,559.3 793.6,571.6 793.6,556.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="793.7,532 815,544.4 793.6,556.8 772.3,544.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="793.6,556.8 793.6,571.6 772.3,559.3 772.3,544.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="655.5,545.8 655.6,560.6 634.1,573 634.1,558.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="676.8,558.2 676.9,573 655.6,560.6 655.5,545.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="849.1,557.7 849.2,572.6 827.9,560.2 827.9,545.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="870.6,545.3 870.6,560.2 849.2,572.6 849.1,557.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="711.1,546.7 711.1,561.6 689.7,573.9 689.6,559.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="732.4,559.1 732.4,573.9 711.1,561.6 711.1,546.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="766.7,547.7 766.7,562.5 745.3,574.9 745.2,560 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="787.9,560 788,574.9 766.7,562.5 766.7,547.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="843.5,561 843.6,575.8 822.3,563.4 822.2,548.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="599.8,569.6 599.9,584.5 578.6,572.1 578.5,557.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="621.3,557.2 621.3,572.1 599.9,584.5 599.8,569.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="600,544.8 621.3,557.2 599.8,569.6 578.5,557.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="676.8,558.2 676.9,573 655.4,585.4 655.4,570.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="655.5,545.8 676.8,558.2 655.4,570.5 634.1,558.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="655.4,570.5 655.4,585.4 634.1,573 634.1,558.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="732.4,559.1 732.4,573.9 711,586.3 711,571.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="711,571.5 711,586.3 689.7,573.9 689.6,559.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="711.1,546.7 732.4,559.1 711,571.5 689.6,559.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="572.9,560.5 572.9,575.3 551.5,587.7 551.5,572.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="594.2,572.8 594.2,587.7 572.9,575.3 572.9,560.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="766.5,572.4 766.5,587.3 745.3,574.9 745.2,560 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="787.9,560 788,574.9 766.5,587.3 766.5,572.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="766.7,547.7 787.9,560 766.5,572.4 745.2,560 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="607,573.8 628.5,561.4 628.5,576.3 607.1,588.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="649.8,573.8 649.8,588.6 628.5,576.3 628.5,561.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="684,562.3 684.1,577.2 662.6,589.6 662.6,574.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="705.3,574.7 705.4,589.6 684.1,577.2 684,562.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="739.6,563.3 739.7,578.1 718.2,590.5 718.2,575.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="760.9,575.6 760.9,590.5 739.7,578.1 739.6,563.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="572.8,585.2 572.8,600.1 551.5,587.7 551.5,572.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="594.2,572.8 594.2,587.7 572.8,600.1 572.8,585.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="572.9,560.5 594.2,572.8 572.8,585.2 551.5,572.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="649.8,573.8 649.8,588.6 628.4,601 628.3,586.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="607,573.8 628.3,586.2 628.4,601 607.1,588.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="628.5,561.4 649.8,573.8 628.3,586.2 607,573.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="683.9,587.1 683.9,601.9 662.6,589.6 662.6,574.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="684,562.3 705.3,574.7 683.9,587.1 662.6,574.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="705.3,574.7 705.4,589.6 683.9,601.9 683.9,587.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="545.8,576.1 545.9,591 524.4,603.3 524.4,588.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="567.1,588.5 567.2,603.3 545.9,591 545.8,576.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="739.5,588 739.5,602.9 718.2,590.5 718.2,575.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="760.9,575.6 760.9,590.5 739.5,602.9 739.5,588 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="601.4,577 601.4,591.9 580,604.3 580,589.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="622.7,589.4 622.7,604.3 601.4,591.9 601.4,577 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="657,578 657,592.8 635.6,605.2 635.5,590.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="678.3,590.3 678.3,605.2 657,592.8 657,578 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="712.5,578.9 712.6,593.8 691.2,606.1 691.1,591.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="733.8,591.3 733.9,606.1 712.6,593.8 712.5,578.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="545.7,600.8 545.7,615.7 524.4,603.3 524.4,588.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="567.1,588.5 567.2,603.3 545.7,615.7 545.7,600.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="601.4,577 622.7,589.4 601.3,601.8 580,589.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="601.3,601.8 601.3,616.6 580,604.3 580,589.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="622.7,589.4 622.7,604.3 601.3,616.6 601.3,601.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="678.3,590.3 678.3,605.2 656.9,617.6 656.8,602.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="656.8,602.7 656.9,617.6 635.6,605.2 635.5,590.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="657,578 678.3,590.3 656.8,602.7 635.5,590.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="518.8,591.7 518.8,606.6 497.4,619 497.3,604.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="540.1,604.1 540.1,619 518.8,606.6 518.8,591.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="733.8,591.3 733.9,606.1 712.4,618.5 712.4,603.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="712.4,603.6 712.4,618.5 691.2,606.1 691.1,591.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="574.3,592.6 574.4,607.5 552.9,619.9 552.9,605 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="595.6,605 595.7,619.9 574.4,607.5 574.3,592.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="608.5,606 629.9,593.6 629.9,608.5 608.5,620.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="651.2,606 651.2,620.8 629.9,608.5 629.9,593.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="685.5,594.5 685.5,609.4 664.1,621.8 664,606.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="706.8,606.9 706.8,621.8 685.5,609.4 685.5,594.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="518.8,591.7 540.1,604.1 518.6,616.5 497.3,604.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="540.1,604.1 540.1,619 518.7,631.3 518.6,616.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="518.6,616.5 518.7,631.3 497.4,619 497.3,604.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="574.3,592.6 595.6,605 574.2,617.4 552.9,605 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="595.6,605 595.7,619.9 574.2,632.3 574.2,617.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="574.2,617.4 574.2,632.3 552.9,619.9 552.9,605 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="651.2,606 651.2,620.8 629.8,633.2 629.8,618.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="608.5,606 629.8,618.3 629.8,633.2 608.5,620.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="629.9,593.6 651.2,606 629.8,618.3 608.5,606 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="491.7,607.3 491.7,622.2 470.3,634.6 470.3,619.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="513,619.7 513,634.6 491.7,622.2 491.7,607.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="706.8,606.9 706.8,621.8 685.4,634.1 685.3,619.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="685.3,619.3 685.4,634.1 664.1,621.8 664,606.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="685.5,594.5 706.8,606.9 685.3,619.3 664,606.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="547.3,608.3 547.3,623.1 525.9,635.5 525.8,620.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="568.6,620.7 568.6,635.5 547.3,623.1 547.3,608.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="602.8,609.2 602.9,624.1 581.4,636.5 581.4,621.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="602.8,609.2 624.1,621.6 624.2,636.5 602.9,624.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="658.4,610.2 658.4,625 637,637.4 637,622.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="679.7,622.5 679.7,637.4 658.4,625 658.4,610.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="491.6,632.1 491.6,647 470.3,634.6 470.3,619.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="491.7,607.3 513,619.7 491.6,632.1 470.3,619.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="513,619.7 513,634.6 491.6,647 491.6,632.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="547.1,633 547.2,647.9 525.9,635.5 525.8,620.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="568.6,620.7 568.6,635.5 547.2,647.9 547.1,633 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="547.3,608.3 568.6,620.7 547.1,633 525.8,620.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="602.7,634 602.7,648.8 581.4,636.5 581.4,621.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="581.4,621.6 602.8,609.2 624.1,621.6 602.7,634 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="602.7,634 624.1,621.6 624.2,636.5 602.7,648.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="464.6,623 464.7,637.8 443.2,650.2 443.2,635.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="485.9,635.3 486,650.2 464.7,637.8 464.6,623 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="658.3,634.9 658.3,649.8 637,637.4 637,622.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="679.7,622.5 679.7,637.4 658.3,649.8 658.3,634.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="658.4,610.2 679.7,622.5 658.3,634.9 637,622.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="520.2,623.9 520.2,638.8 498.8,651.1 498.8,636.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="541.5,636.3 541.5,651.1 520.2,638.8 520.2,623.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="575.8,624.8 575.8,639.7 554.4,652.1 554.3,637.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="597.1,637.2 597.1,652.1 575.8,639.7 575.8,624.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="609.9,638.2 631.3,625.8 631.4,640.6 609.9,653 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="652.6,638.2 652.7,653 631.4,640.6 631.3,625.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="822.2,548.6 822.3,563.4 665.5,654 665.5,639.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="464.6,623 485.9,635.3 464.5,647.7 443.2,635.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="464.5,647.7 464.5,662.6 443.2,650.2 443.2,635.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="485.9,635.3 486,650.2 464.5,662.6 464.5,647.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="520.2,623.9 541.5,636.3 520.1,648.7 498.8,636.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="541.5,636.3 541.5,651.1 520.1,663.5 520.1,648.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="520.1,648.7 520.1,663.5 498.8,651.1 498.8,636.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="575.8,624.8 597.1,637.2 575.6,649.6 554.3,637.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="575.6,649.6 575.7,664.5 554.4,652.1 554.3,637.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="597.1,637.2 597.1,652.1 575.7,664.5 575.6,649.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="437.6,638.6 437.6,653.5 416.2,665.8 416.1,651 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="458.9,651 458.9,665.8 437.6,653.5 437.6,638.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="631.3,625.8 652.6,638.2 631.2,650.5 609.9,638.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="609.9,638.2 631.2,650.5 631.2,665.4 609.9,653 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="652.6,638.2 652.7,653 631.2,665.4 631.2,650.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="493.1,639.5 493.2,654.4 471.7,666.8 471.7,651.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="514.4,651.9 514.5,666.8 493.2,654.4 493.1,639.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="686.8,651.5 686.8,666.3 665.5,654 665.5,639.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="822.2,548.6 843.5,561 686.8,651.5 665.5,639.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="843.5,561 843.6,575.8 686.8,666.3 686.8,651.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="548.7,640.5 548.7,655.3 527.3,667.7 527.3,652.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="570,652.8 570,667.7 548.7,655.3 548.7,640.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="604.3,641.4 604.3,656.3 582.9,668.6 582.9,653.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="604.3,641.4 625.6,653.8 625.6,668.6 604.3,656.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="659.8,642.3 659.9,657.2 638.4,669.6 638.4,654.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="681.1,654.7 681.2,669.6 659.9,657.2 659.8,642.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="437.5,663.3 437.5,678.2 416.2,665.8 416.1,651 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="437.6,638.6 458.9,651 437.5,663.3 416.1,651 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="458.9,651 458.9,665.8 437.5,678.2 437.5,663.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="493,664.3 493,679.1 471.7,666.8 471.7,651.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="514.4,651.9 514.5,666.8 493,679.1 493,664.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="493.1,639.5 514.4,651.9 493,664.3 471.7,651.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="548.7,640.5 570,652.8 548.6,665.2 527.3,652.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="548.6,665.2 548.6,680.1 527.3,667.7 527.3,652.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="570,652.8 570,667.7 548.6,680.1 548.6,665.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="604.1,666.2 625.6,653.8 625.6,668.6 604.2,681 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="582.9,653.8 604.3,641.4 625.6,653.8 604.1,666.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="604.1,666.2 604.2,681 582.9,668.6 582.9,653.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="466.1,655.2 466.1,670 444.7,682.4 444.6,667.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="487.4,667.5 487.4,682.4 466.1,670 466.1,655.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="681.1,654.7 681.2,669.6 659.7,682 659.7,667.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="659.7,667.1 659.7,682 638.4,669.6 638.4,654.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="659.8,642.3 681.1,654.7 659.7,667.1 638.4,654.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="521.6,656.1 521.7,670.9 500.2,683.3 500.2,668.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="542.9,668.5 543,683.3 521.7,670.9 521.6,656.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="577.2,657 577.3,671.9 555.8,684.3 555.8,669.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="598.5,669.4 598.5,684.3 577.3,671.9 577.2,657 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="611.3,670.3 632.8,658 632.8,672.8 611.4,685.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="654.1,670.3 654.1,685.2 632.8,672.8 632.8,658 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="465.9,679.9 466,694.8 444.7,682.4 444.6,667.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="466.1,655.2 487.4,667.5 465.9,679.9 444.6,667.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="487.4,667.5 487.4,682.4 466,694.8 465.9,679.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="521.5,680.8 521.5,695.7 500.2,683.3 500.2,668.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="542.9,668.5 543,683.3 521.5,695.7 521.5,680.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="521.6,656.1 542.9,668.5 521.5,680.8 500.2,668.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="577.1,681.8 577.1,696.6 555.8,684.3 555.8,669.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="598.5,669.4 598.5,684.3 577.1,696.6 577.1,681.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="577.2,657 598.5,669.4 577.1,681.8 555.8,669.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="654.1,670.3 654.1,685.2 632.7,697.6 632.6,682.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="611.3,670.3 632.6,682.7 632.7,697.6 611.4,685.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="632.8,658 654.1,670.3 632.6,682.7 611.3,670.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="494.6,671.7 494.6,686.6 473.2,698.9 473.1,684.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="515.9,684.1 515.9,699 494.6,686.6 494.6,671.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="550.2,672.7 550.2,687.5 528.8,699.9 528.7,685 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="571.4,685 571.5,699.9 550.2,687.5 550.2,672.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="605.7,673.6 605.8,688.5 584.3,700.8 584.3,686 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="605.7,673.6 627,686 627,700.8 605.8,688.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="494.4,696.5 494.5,711.3 473.2,698.9 473.1,684.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="494.6,671.7 515.9,684.1 494.4,696.5 473.1,684.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="515.9,684.1 515.9,699 494.5,711.3 494.4,696.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="571.4,685 571.5,699.9 550,712.3 550,697.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="550,697.4 550,712.3 528.8,699.9 528.7,685 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="550.2,672.7 571.4,685 550,697.4 528.7,685 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="605.6,698.3 627,686 627,700.8 605.6,713.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="605.6,698.3 605.6,713.2 584.3,700.8 584.3,686 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="584.3,686 605.7,673.6 627,686 605.6,698.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="523.1,688.3 523.1,703.2 501.7,715.5 501.7,700.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="544.4,700.7 544.4,715.5 523.1,703.2 523.1,688.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="578.7,689.2 578.7,704.1 557.3,716.5 557.2,701.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="599.9,701.6 600,716.5 578.7,704.1 578.7,689.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="544.4,700.7 544.4,715.5 523,727.9 522.9,713 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="523.1,688.3 544.4,700.7 522.9,713 501.7,700.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="522.9,713 523,727.9 501.7,715.5 501.7,700.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="599.9,701.6 600,716.5 578.5,728.8 578.5,714 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="578.5,714 578.5,728.8 557.3,716.5 557.2,701.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="578.7,689.2 599.9,701.6 578.5,714 557.2,701.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="551.6,704.9 551.6,719.7 530.2,732.1 530.2,717.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="572.9,717.2 572.9,732.1 551.6,719.7 551.6,704.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="551.6,704.9 572.9,717.2 551.4,729.6 530.2,717.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="551.4,729.6 551.5,744.5 530.2,732.1 530.2,717.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="572.9,717.2 572.9,732.1 551.5,744.5 551.4,729.6 					"/>
					</g>
					<g>
						<path fill="#383838" d="M542.3,750.4l443.6-255.8l-164.6-95.7L377.7,654.7L542.3,750.4z M501.7,700.7l21.4-12.4l21.3,12.4
						L522.9,713L501.7,700.7z M813.6,512.2l-21.4,12.4l-21.3-12.4l21.4-12.4L813.6,512.2z M797.9,496.6l21.4-12.4l21.3,12.4
						L819.2,509L797.9,496.6z M786.5,527.8l-21.4,12.4l-21.3-12.4l21.4-12.4L786.5,527.8z M759.5,543.5L738,555.8l-21.3-12.4
						l21.4-12.4L759.5,543.5z M732.4,559.1L711,571.5l-21.3-12.4l21.4-12.4L732.4,559.1z M705.3,574.7l-21.4,12.4l-21.3-12.4
						l21.4-12.4L705.3,574.7z M678.3,590.3l-21.4,12.4l-21.3-12.4L657,578L678.3,590.3z M651.2,606l-21.4,12.4L608.5,606l21.4-12.4
						L651.2,606z M624.1,621.6L602.7,634l-21.3-12.4l21.4-12.4L624.1,621.6z M597.1,637.2l-21.4,12.4l-21.3-12.4l21.4-12.4
						L597.1,637.2z M570,652.8l-21.4,12.4l-21.3-12.4l21.4-12.4L570,652.8z M542.9,668.5l-21.4,12.4l-21.3-12.4l21.4-12.4
						L542.9,668.5z M493,664.3l-21.3-12.4l21.4-12.4l21.3,12.4L493,664.3z M498.8,636.3l21.4-12.4l21.3,12.4l-21.4,12.4L498.8,636.3
						z M525.8,620.7l21.4-12.4l21.3,12.4L547.1,633L525.8,620.7z M552.9,605l21.4-12.4l21.3,12.4l-21.4,12.4L552.9,605z M580,589.4
						l21.4-12.4l21.3,12.4l-21.4,12.4L580,589.4z M607,573.8l21.4-12.4l21.3,12.4l-21.4,12.4L607,573.8z M634.1,558.1l21.4-12.4
						l21.3,12.4l-21.4,12.4L634.1,558.1z M661.2,542.5l21.4-12.4l21.3,12.4l-21.4,12.4L661.2,542.5z M688.2,526.9l21.4-12.4
						l21.3,12.4l-21.4,12.4L688.2,526.9z M715.3,511.3l21.4-12.4l21.3,12.4l-21.4,12.4L715.3,511.3z M742.3,495.7l21.4-12.4
						l21.3,12.4L763.6,508L742.3,495.7z M769.4,480l21.4-12.4l21.3,12.4l-21.4,12.4L769.4,480z M796.5,464.4l21.4-12.4l21.3,12.4
						l-21.4,12.4L796.5,464.4z M846.4,468.6l21.3,12.4l-21.4,12.4L825,481L846.4,468.6z M874.9,485.2l21.3,12.4l-21.4,12.4
						l-21.3-12.4L874.9,485.2z M869.1,513.2l-21.4,12.4l-21.3-12.4l21.4-12.4L869.1,513.2z M842.1,528.8l-21.4,12.4l-21.3-12.4
						l21.4-12.4L842.1,528.8z M815,544.4l-21.4,12.4l-21.3-12.4l21.4-12.4L815,544.4z M787.9,560l-21.4,12.4L745.2,560l21.4-12.4
						L787.9,560z M760.9,575.6L739.5,588l-21.3-12.4l21.4-12.4L760.9,575.6z M733.8,591.3l-21.4,12.4l-21.3-12.4l21.4-12.4
						L733.8,591.3z M706.8,606.9l-21.4,12.4L664,606.9l21.4-12.4L706.8,606.9z M679.7,622.5l-21.4,12.4L637,622.5l21.4-12.4
						L679.7,622.5z M652.6,638.2l-21.4,12.4l-21.3-12.4l21.4-12.4L652.6,638.2z M625.6,653.8l-21.4,12.4l-21.3-12.4l21.4-12.4
						L625.6,653.8z M598.5,669.4l-21.4,12.4l-21.3-12.4l21.4-12.4L598.5,669.4z M571.4,685L550,697.4L528.7,685l21.4-12.4L571.4,685
						z M473.1,684.1l21.4-12.4l21.3,12.4l-21.4,12.4L473.1,684.1z M444.6,667.5l21.4-12.4l21.3,12.4l-21.4,12.4L444.6,667.5z
						 M437.6,638.6l21.3,12.4l-21.4,12.4L416.1,651L437.6,638.6z M464.6,623l21.3,12.4l-21.4,12.4l-21.3-12.4L464.6,623z
						 M491.7,607.3l21.3,12.4l-21.4,12.4l-21.3-12.4L491.7,607.3z M518.8,591.7l21.3,12.4l-21.4,12.4l-21.3-12.4L518.8,591.7z
						 M545.8,576.1l21.3,12.4l-21.4,12.4l-21.3-12.4L545.8,576.1z M572.9,560.5l21.3,12.4l-21.4,12.4l-21.3-12.4L572.9,560.5z
						 M600,544.8l21.3,12.4l-21.4,12.4l-21.3-12.4L600,544.8z M627,529.2l21.3,12.4L626.9,554l-21.3-12.4L627,529.2z M654.1,513.6
						l21.3,12.4L654,538.3L632.7,526L654.1,513.6z M681.2,498l21.3,12.4L681,522.7l-21.3-12.4L681.2,498z M708.2,482.3l21.3,12.4
						l-21.4,12.4l-21.3-12.4L708.2,482.3z M735.3,466.7l21.3,12.4l-21.4,12.4l-21.3-12.4L735.3,466.7z M762.3,451.1l21.3,12.4
						l-21.4,12.4l-21.3-12.4L762.3,451.1z M789.4,435.5l21.3,12.4l-21.4,12.4L768,447.8L789.4,435.5z M837.8,432.2l-21.4,12.4
						l-21.3-12.4l21.4-12.4L837.8,432.2z M866.3,448.8l-21.4,12.4l-21.3-12.4l21.4-12.4L866.3,448.8z M894.8,465.3l-21.4,12.4
						L852,465.3l21.4-12.4L894.8,465.3z M923.3,481.9l-21.4,12.4l-21.3-12.4l21.4-12.4L923.3,481.9z M930.3,510.8l-21.3-12.4
						l21.4-12.4l21.3,12.4L930.3,510.8z M903.3,526.5L882,514.1l21.4-12.4l21.3,12.4L903.3,526.5z M876.2,542.1l-21.3-12.4
						l21.4-12.4l21.3,12.4L876.2,542.1z M849.1,557.7l-21.3-12.4l21.4-12.4l21.3,12.4L849.1,557.7z M686.8,651.5l-21.3-12.4
						l156.8-90.5l21.3,12.4L686.8,651.5z M659.7,667.1l-21.3-12.4l21.4-12.4l21.3,12.4L659.7,667.1z M632.6,682.7l-21.3-12.4
						l21.4-12.4l21.3,12.4L632.6,682.7z M605.6,698.3L584.3,686l21.4-12.4L627,686L605.6,698.3z M578.5,714l-21.3-12.4l21.4-12.4
						l21.3,12.4L578.5,714z M551.4,729.6l-21.3-12.4l21.4-12.4l21.3,12.4L551.4,729.6z"/>
					</g>
					<g>
						<polygon fill="#626363" points="816.5,419.8 837.8,432.2 816.4,444.6 795.1,432.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="789.4,435.5 810.7,447.8 789.3,460.2 768,447.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="845,436.4 866.3,448.8 844.9,461.1 823.5,448.8 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="817.9,452 839.2,464.4 817.8,476.8 796.5,464.4 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="873.5,453 894.8,465.3 873.4,477.7 852,465.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="735.3,466.7 756.6,479.1 735.1,491.5 713.8,479.1 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="790.8,467.6 812.1,480 790.7,492.4 769.4,480 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="846.4,468.6 867.7,481 846.3,493.3 825,481 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="902,469.5 923.3,481.9 901.8,494.3 880.6,481.9 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="763.8,483.3 785.1,495.7 763.6,508 742.3,495.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="819.3,484.2 840.6,496.6 819.2,509 797.9,496.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="874.9,485.2 896.2,497.5 874.8,509.9 853.5,497.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="681.2,498 702.5,510.3 681,522.7 659.7,510.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="736.7,498.9 758,511.3 736.6,523.7 715.3,511.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="792.3,499.8 813.6,512.2 792.1,524.6 770.8,512.2 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="627,529.2 648.3,541.6 626.9,554 605.6,541.6 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="682.6,530.1 703.9,542.5 682.5,554.9 661.2,542.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="849.3,533 870.6,545.3 849.1,557.7 827.9,545.3 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="739.6,563.3 760.9,575.6 739.5,588 718.2,575.7 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="545.8,576.1 567.1,588.5 545.7,600.8 524.4,588.5 					"/>
					</g>
					<g>
						<polygon fill="#626363" points="712.5,578.9 733.8,591.3 712.4,603.6 691.1,591.3 					"/>
					</g>
				</g>
			</g>
		</g>
		<g>
			<path fill="#E15F41" d="M1155.5,234.6h-22.4l1.7-10.3h20.4c8.2,0,14.9,6.7,14.9,14.9v15c0,4.2-2.1,8.2-5.7,10.5l-30.8,20.4
			l-0.4-9.6c-0.1-1.8,0.8-3.6,2.4-4.6l20-12.3c3-1.9,4.9-5.2,4.9-8.8v-10.3C1160.6,236.9,1158.3,234.6,1155.5,234.6z"/>
			<g>
				<g enable-background="new    ">
					<path fill="#F9AB7D" d="M1150,291.7c0,0.2,0,0.5,0,0.7c0,0.2,0,0.4-0.1,0.6c0,0.2-0.1,0.5-0.1,0.7c0,0.1,0,0.2,0,0.2
					c0,0.1-0.1,0.2-0.1,0.4c0,0.2-0.1,0.4-0.2,0.7c-0.1,0.2-0.1,0.4-0.2,0.6c-0.1,0.2-0.1,0.4-0.2,0.7c0,0.1-0.1,0.2-0.1,0.3
					c0,0.1-0.1,0.2-0.1,0.3c-0.1,0.2-0.2,0.5-0.3,0.7c-0.1,0.2-0.2,0.4-0.3,0.6c-0.1,0.2-0.2,0.5-0.3,0.7c-0.1,0.1-0.1,0.2-0.2,0.3
					c0,0.1-0.1,0.1-0.1,0.2c-0.2,0.3-0.3,0.5-0.5,0.8c-0.1,0.2-0.2,0.3-0.3,0.5c-0.2,0.3-0.4,0.6-0.6,0.9c-0.1,0.1-0.2,0.2-0.2,0.3
					c0,0,0,0,0,0.1c-0.4,0.5-0.8,0.9-1.2,1.4c-0.1,0.1-0.2,0.2-0.3,0.3c-0.3,0.3-0.7,0.7-1,1c-0.1,0.1-0.1,0.2-0.2,0.2
					c-0.1,0.1-0.2,0.2-0.3,0.2c-0.2,0.2-0.4,0.4-0.7,0.6c-0.2,0.2-0.4,0.3-0.6,0.5c-0.2,0.2-0.5,0.4-0.7,0.6
					c-0.2,0.2-0.4,0.3-0.7,0.5c-0.2,0.2-0.5,0.4-0.8,0.5c-0.2,0.2-0.5,0.3-0.7,0.5c-0.3,0.2-0.5,0.3-0.8,0.5
					c-0.2,0.1-0.3,0.2-0.5,0.3c-0.2,0.1-0.4,0.2-0.6,0.3c-0.7,0.4-1.4,0.8-2.1,1.1c-0.2,0.1-0.4,0.2-0.6,0.3
					c-0.6,0.3-1.1,0.5-1.7,0.8c-0.2,0.1-0.4,0.2-0.6,0.3c-0.7,0.3-1.5,0.6-2.3,0.9c-0.1,0.1-0.3,0.1-0.4,0.1c-0.6,0.2-1.3,0.5-2,0.7
					c-0.1,0-0.2,0.1-0.3,0.1c-0.2,0.1-0.3,0.1-0.5,0.1c-0.4,0.1-0.7,0.2-1.1,0.3c-0.3,0.1-0.6,0.2-0.9,0.3c-0.4,0.1-0.7,0.2-1.1,0.3
					c-0.3,0.1-0.6,0.2-0.9,0.2c-0.4,0.1-0.8,0.2-1.2,0.3c-0.3,0.1-0.6,0.1-1,0.2c-0.4,0.1-0.8,0.2-1.2,0.2c-0.2,0-0.4,0.1-0.7,0.1
					c-0.1,0-0.2,0-0.2,0c-0.8,0.1-1.7,0.3-2.6,0.4c-0.1,0-0.2,0-0.4,0c-0.7,0.1-1.5,0.2-2.3,0.3c-0.1,0-0.2,0-0.4,0
					c-0.2,0-0.3,0-0.5,0c-0.5,0-1,0.1-1.4,0.1c-0.3,0-0.6,0-0.9,0.1c-0.5,0-1,0.1-1.5,0.1c-0.2,0-0.4,0-0.6,0c-0.1,0-0.2,0-0.2,0
					c-0.4,0-0.9,0-1.3,0c-0.3,0-0.6,0-0.9,0c-0.5,0-0.9,0-1.4,0c-0.2,0-0.5,0-0.7,0c0,0-0.1,0-0.1,0c-0.4,0-0.9,0-1.3-0.1
					c-0.3,0-0.6,0-0.9,0c-0.5,0-0.9-0.1-1.4-0.1c-0.3,0-0.5,0-0.8-0.1c0,0,0,0,0,0c-0.6,0-1.1-0.1-1.7-0.2c-0.2,0-0.3,0-0.5,0
					c-0.7-0.1-1.4-0.2-2.2-0.3c0,0,0,0,0,0c-0.1,0-0.2,0-0.3-0.1c-0.6-0.1-1.2-0.2-1.8-0.3c-0.3,0-0.5-0.1-0.8-0.1
					c-0.5-0.1-0.9-0.2-1.4-0.3c-0.1,0-0.1,0-0.2,0c-0.2,0-0.4-0.1-0.6-0.1c-0.5-0.1-1-0.2-1.5-0.3c-0.3-0.1-0.6-0.1-0.8-0.2
					c-0.5-0.1-0.9-0.2-1.4-0.4c-0.1,0-0.3-0.1-0.4-0.1c-0.1,0-0.2-0.1-0.4-0.1c-0.7-0.2-1.4-0.4-2.1-0.7c-0.1,0-0.3-0.1-0.4-0.1
					c-0.8-0.3-1.6-0.6-2.4-0.9c-0.1,0-0.2-0.1-0.2-0.1c-0.2-0.1-0.5-0.2-0.7-0.3c-0.2-0.1-0.5-0.2-0.7-0.3c-0.4-0.2-0.7-0.3-1.1-0.5
					c-0.2-0.1-0.5-0.2-0.7-0.3c-0.4-0.2-0.8-0.4-1.1-0.6c-0.2-0.1-0.4-0.2-0.6-0.3c-0.6-0.3-1.1-0.6-1.6-0.9
					c-8.9-5.1-13.4-11.9-13.3-18.6l0.2-79.9c0,6.7,4.4,13.5,13.3,18.6c0.5,0.3,1.1,0.6,1.6,0.9c0.2,0.1,0.4,0.2,0.6,0.3
					c0.4,0.2,0.7,0.4,1.1,0.6c0.2,0.1,0.5,0.2,0.7,0.3c0.3,0.2,0.7,0.3,1.1,0.5c0.2,0.1,0.5,0.2,0.7,0.3c0.3,0.1,0.6,0.3,1,0.4
					c0.8,0.3,1.6,0.6,2.4,0.9c0.1,0,0.3,0.1,0.4,0.1c0.7,0.2,1.4,0.5,2.1,0.7c0.3,0.1,0.5,0.1,0.8,0.2c0.5,0.1,0.9,0.2,1.4,0.4
					c0.3,0.1,0.6,0.1,0.8,0.2c0.5,0.1,1,0.2,1.5,0.3c0.2,0.1,0.5,0.1,0.7,0.2c0.5,0.1,0.9,0.2,1.4,0.3c0.3,0,0.5,0.1,0.8,0.1
					c0.6,0.1,1.2,0.2,1.8,0.3c0.1,0,0.2,0,0.4,0.1c0.7,0.1,1.4,0.2,2.2,0.3c0.2,0,0.3,0,0.5,0c0.6,0.1,1.1,0.1,1.7,0.2
					c0.3,0,0.5,0,0.8,0.1c0.5,0,0.9,0.1,1.4,0.1c0.3,0,0.6,0,0.9,0c0.4,0,0.9,0,1.3,0.1c0.3,0,0.6,0,0.8,0c0.5,0,0.9,0,1.4,0
					c0.3,0,0.6,0,0.9,0c0.4,0,0.9,0,1.3,0c0.3,0,0.6,0,0.9,0c0.5,0,1,0,1.5-0.1c0.3,0,0.6,0,0.9-0.1c0.5,0,1-0.1,1.4-0.1
					c0.3,0,0.6-0.1,0.9-0.1c0.8-0.1,1.5-0.2,2.3-0.3c0.1,0,0.2,0,0.4,0c0.9-0.1,1.7-0.3,2.6-0.4c0.3-0.1,0.6-0.1,0.9-0.2
					c0.4-0.1,0.8-0.2,1.2-0.2c0.3-0.1,0.6-0.1,1-0.2c0.4-0.1,0.8-0.2,1.2-0.3c0.3-0.1,0.6-0.2,0.9-0.2c0.4-0.1,0.8-0.2,1.1-0.3
					c0.3-0.1,0.6-0.2,0.9-0.3c0.4-0.1,0.7-0.2,1.1-0.3c0.3-0.1,0.5-0.2,0.8-0.3c0.7-0.2,1.3-0.4,2-0.7c0.1-0.1,0.3-0.1,0.4-0.1
					c0.8-0.3,1.5-0.6,2.3-0.9c0.2-0.1,0.4-0.2,0.6-0.3c0.6-0.3,1.1-0.5,1.7-0.8c0.2-0.1,0.4-0.2,0.6-0.3c0.7-0.4,1.4-0.7,2.1-1.1
					c0.4-0.2,0.7-0.4,1-0.6c0.3-0.2,0.6-0.3,0.8-0.5c0.2-0.2,0.5-0.3,0.7-0.5c0.3-0.2,0.5-0.4,0.8-0.5c0.2-0.2,0.5-0.3,0.7-0.5
					c0.2-0.2,0.5-0.4,0.7-0.6c0.2-0.2,0.4-0.3,0.6-0.5c0.2-0.2,0.4-0.4,0.7-0.6c0.2-0.2,0.3-0.3,0.5-0.5c0.4-0.3,0.7-0.7,1-1
					c0.1-0.1,0.2-0.2,0.3-0.3c0.4-0.5,0.8-0.9,1.2-1.4c0.1-0.1,0.2-0.3,0.3-0.4c0.2-0.3,0.4-0.6,0.6-0.9c0.1-0.2,0.2-0.3,0.3-0.5
					c0.2-0.3,0.3-0.5,0.5-0.8c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.2,0.2-0.5,0.3-0.7c0.1-0.2,0.2-0.4,0.3-0.6c0.1-0.2,0.2-0.5,0.3-0.7
					c0.1-0.2,0.2-0.4,0.2-0.6c0.1-0.2,0.1-0.4,0.2-0.7c0.1-0.2,0.1-0.4,0.2-0.6c0.1-0.2,0.1-0.4,0.2-0.7c0-0.2,0.1-0.4,0.1-0.6
					c0-0.2,0.1-0.5,0.1-0.7c0-0.2,0.1-0.4,0.1-0.6c0-0.2,0-0.5,0-0.7c0-0.3,0-0.5,0-0.8l-0.2,79.9c0,0.1,0,0.3,0,0.4
					C1150.1,291.4,1150,291.5,1150,291.7z"/>
					<path fill="#F47A49" d="M1150,291.7c0,0.2,0,0.5,0,0.7c0,0.2,0,0.4-0.1,0.6c0,0.2-0.1,0.5-0.1,0.7c0,0.1,0,0.2,0,0.2
					c0,0.1-0.1,0.2-0.1,0.4c0,0.2-0.1,0.4-0.2,0.7c-0.1,0.2-0.1,0.4-0.2,0.6c-0.1,0.2-0.1,0.4-0.2,0.7c0,0.1-0.1,0.2-0.1,0.3
					c0,0.1-0.1,0.2-0.1,0.3c-0.1,0.2-0.2,0.5-0.3,0.7c-0.1,0.2-0.2,0.4-0.3,0.6c-0.1,0.2-0.2,0.5-0.3,0.7c-0.1,0.1-0.1,0.2-0.2,0.3
					c0,0.1-0.1,0.1-0.1,0.2c-0.2,0.3-0.3,0.5-0.5,0.8c-0.1,0.2-0.2,0.3-0.3,0.5c-0.2,0.3-0.4,0.6-0.6,0.9c-0.1,0.1-0.2,0.2-0.2,0.3
					c0,0,0,0,0,0.1c-0.4,0.5-0.8,0.9-1.2,1.4c-0.1,0.1-0.2,0.2-0.3,0.3c-0.3,0.3-0.7,0.7-1,1c-0.1,0.1-0.1,0.2-0.2,0.2
					c-0.1,0.1-0.2,0.2-0.3,0.2c-0.2,0.2-0.4,0.4-0.7,0.6c-0.2,0.2-0.4,0.3-0.6,0.5c-0.2,0.2-0.5,0.4-0.7,0.6
					c-0.2,0.2-0.4,0.3-0.7,0.5c-0.2,0.2-0.5,0.4-0.8,0.5c-0.2,0.2-0.5,0.3-0.7,0.5c-0.3,0.2-0.5,0.3-0.8,0.5
					c-0.2,0.1-0.3,0.2-0.5,0.3c-0.2,0.1-0.4,0.2-0.6,0.3c-0.7,0.4-1.4,0.8-2.1,1.1c-0.2,0.1-0.4,0.2-0.6,0.3
					c-0.6,0.3-1.1,0.5-1.7,0.8c-0.2,0.1-0.4,0.2-0.6,0.3c-0.7,0.3-1.5,0.6-2.3,0.9c-0.1,0.1-0.3,0.1-0.4,0.1c-0.6,0.2-1.3,0.5-2,0.7
					c-0.1,0-0.2,0.1-0.3,0.1c-0.2,0.1-0.3,0.1-0.5,0.1c-0.4,0.1-0.7,0.2-1.1,0.3c-0.3,0.1-0.6,0.2-0.9,0.3c-0.4,0.1-0.7,0.2-1.1,0.3
					c-0.3,0.1-0.6,0.2-0.9,0.2c-0.1,0-0.2,0.1-0.3,0.1v-79.9c0.2,0,0.4-0.1,0.6-0.1c0.3-0.1,0.6-0.2,0.9-0.2
					c0.4-0.1,0.8-0.2,1.1-0.3c0.3-0.1,0.6-0.2,0.9-0.3c0.4-0.1,0.7-0.2,1.1-0.3c0.3-0.1,0.5-0.2,0.8-0.3c0.7-0.2,1.3-0.4,2-0.7
					c0.1-0.1,0.3-0.1,0.4-0.1c0.8-0.3,1.5-0.6,2.3-0.9c0.2-0.1,0.4-0.2,0.6-0.3c0.6-0.3,1.1-0.5,1.7-0.8c0.2-0.1,0.4-0.2,0.6-0.3
					c0.7-0.4,1.4-0.7,2.1-1.1c0.4-0.2,0.7-0.4,1-0.6c0.3-0.2,0.6-0.3,0.8-0.5c0.2-0.2,0.5-0.3,0.7-0.5c0.3-0.2,0.5-0.4,0.8-0.5
					c0.2-0.2,0.5-0.3,0.7-0.5c0.2-0.2,0.5-0.4,0.7-0.6c0.2-0.2,0.4-0.3,0.6-0.5c0.2-0.2,0.4-0.4,0.7-0.6c0.2-0.2,0.3-0.3,0.5-0.5
					c0.4-0.3,0.7-0.7,1-1c0.1-0.1,0.2-0.2,0.3-0.3c0.4-0.5,0.8-0.9,1.2-1.4c0.1-0.1,0.2-0.3,0.3-0.4c0.2-0.3,0.4-0.6,0.6-0.9
					c0.1-0.2,0.2-0.3,0.3-0.5c0.2-0.3,0.3-0.5,0.5-0.8c0.1-0.2,0.2-0.4,0.3-0.5c0.1-0.2,0.2-0.5,0.3-0.7c0.1-0.2,0.2-0.4,0.3-0.6
					c0.1-0.2,0.2-0.5,0.3-0.7c0.1-0.2,0.2-0.4,0.2-0.6c0.1-0.2,0.1-0.4,0.2-0.7c0.1-0.2,0.1-0.4,0.2-0.6c0.1-0.2,0.1-0.4,0.2-0.7
					c0-0.2,0.1-0.4,0.1-0.6c0-0.2,0.1-0.5,0.1-0.7c0-0.2,0.1-0.4,0.1-0.6c0-0.2,0-0.5,0-0.7c0-0.3,0-0.5,0-0.8l-0.2,79.9
					c0,0.1,0,0.3,0,0.4C1150.1,291.4,1150,291.5,1150,291.7z"/>
					<g>
						<path fill="#FBFCFC" d="M1073.3,229.3c-17.7-10.2-17.8-26.8-0.2-37c17.6-10.2,46.2-10.2,63.9,0c17.7,10.2,17.8,26.8,0.2,37
						C1119.6,239.5,1091,239.5,1073.3,229.3z"/>
						<path fill="#EBE9DA" d="M1105.3,233.2c-11.4,0-22.1-2.5-30.1-7.2c-7.4-4.3-11.5-9.7-11.5-15.3c0-5.6,4-11,11.3-15.2
						c7.9-4.6,18.6-7.2,30-7.2c11.4,0,22.1,2.5,30.1,7.2c7.4,4.3,11.5,9.7,11.5,15.3c0,5.6-4,11-11.3,15.2
						C1127.4,230.7,1116.7,233.2,1105.3,233.2z"/>
						<path fill="#F0F1F2" d="M1063.7,210.7c0-5.6,4-11,11.3-15.2c5.1-3,11.3-5.1,18.2-6.2l19.3,43.6c-2.3,0.2-4.7,0.3-7.1,0.3
						c-11.4,0-22.1-2.5-30.1-7.2C1067.7,221.8,1063.7,216.4,1063.7,210.7z"/>
						<path fill="#502D16" d="M1075.1,226.1c-2.1-1.2-3.9-2.5-5.4-3.8c1.5-1.3,3.2-2.5,5.2-3.7c7.9-4.6,18.6-7.2,30-7.2
						c11.4,0,22.1,2.5,30.1,7.2c2.1,1.2,3.9,2.5,5.4,3.8c-1.5,1.3-3.2,2.5-5.2,3.7c-7.9,4.6-18.6,7.2-30,7.2
						C1093.8,233.2,1083.1,230.7,1075.1,226.1z"/>
					</g>
				</g>
			</g>
		</g>
		<g>
			<g>
				<g>
					<g enable-background="new    ">
						<path fill="#48C0B7" d="M920.3,276.3c0,0.3,0,0.5,0.1,0.8c0,0.2,0.1,0.4,0.1,0.7c0,0.3,0.1,0.5,0.1,0.8c0,0.1,0,0.2,0,0.3
						c0,0.1,0.1,0.3,0.1,0.4c0.1,0.2,0.1,0.5,0.2,0.7c0.1,0.2,0.1,0.4,0.2,0.7c0.1,0.2,0.2,0.5,0.2,0.7c0,0.1,0.1,0.2,0.1,0.3
						c0,0.1,0.1,0.2,0.1,0.3c0.1,0.3,0.2,0.5,0.3,0.8c0.1,0.2,0.2,0.4,0.3,0.6c0.1,0.3,0.3,0.5,0.4,0.8c0.1,0.1,0.1,0.2,0.2,0.4
						c0,0.1,0.1,0.2,0.2,0.2c0.2,0.3,0.4,0.6,0.5,0.9c0.1,0.2,0.2,0.4,0.4,0.5c0.2,0.3,0.5,0.7,0.7,1c0.1,0.1,0.2,0.2,0.3,0.4
						c0,0,0,0,0.1,0.1c0.4,0.5,0.8,1,1.3,1.5c0.1,0.1,0.2,0.3,0.4,0.4c0.4,0.4,0.7,0.8,1.1,1.1c0.1,0.1,0.2,0.2,0.3,0.3
						c0.1,0.1,0.2,0.2,0.3,0.3c0.2,0.2,0.5,0.4,0.7,0.6c0.2,0.2,0.5,0.4,0.7,0.6c0.3,0.2,0.5,0.4,0.8,0.6c0.2,0.2,0.5,0.4,0.7,0.6
						c0.3,0.2,0.6,0.4,0.8,0.6c0.3,0.2,0.5,0.4,0.8,0.5c0.3,0.2,0.6,0.4,0.9,0.6c0.2,0.1,0.4,0.2,0.6,0.3c0.2,0.1,0.4,0.2,0.6,0.4
						c0.8,0.4,1.5,0.9,2.3,1.3c0.2,0.1,0.5,0.2,0.7,0.3c0.6,0.3,1.2,0.6,1.9,0.9c0.2,0.1,0.4,0.2,0.6,0.3c0.8,0.4,1.7,0.7,2.5,1
						c0.1,0.1,0.3,0.1,0.5,0.2c0.7,0.3,1.4,0.5,2.2,0.8c0.1,0,0.2,0.1,0.4,0.1c0.2,0.1,0.4,0.1,0.5,0.2c0.4,0.1,0.8,0.3,1.2,0.4
						c0.3,0.1,0.7,0.2,1,0.3c0.4,0.1,0.8,0.2,1.3,0.3c0.4,0.1,0.7,0.2,1.1,0.3c0.4,0.1,0.9,0.2,1.3,0.3c0.4,0.1,0.7,0.2,1.1,0.2
						c0.4,0.1,0.9,0.2,1.3,0.3c0.2,0,0.5,0.1,0.7,0.1c0.1,0,0.2,0,0.3,0c0.9,0.2,1.9,0.3,2.8,0.5c0.1,0,0.3,0,0.4,0.1
						c0.8,0.1,1.7,0.2,2.5,0.3c0.1,0,0.3,0,0.4,0c0.2,0,0.4,0,0.6,0c0.5,0,1.1,0.1,1.6,0.1c0.3,0,0.7,0,1,0.1c0.6,0,1.1,0.1,1.7,0.1
						c0.2,0,0.5,0,0.7,0c0.1,0,0.2,0,0.3,0c0.5,0,1,0,1.5,0c0.3,0,0.7,0,1,0c0.5,0,1.1,0,1.6,0c0.3,0,0.5,0,0.8,0c0,0,0.1,0,0.1,0
						c0.5,0,1,0,1.5-0.1c0.3,0,0.7,0,1,0c0.5,0,1-0.1,1.5-0.1c0.3,0,0.6,0,0.8-0.1c0,0,0,0,0,0c0.6-0.1,1.2-0.1,1.9-0.2
						c0.2,0,0.4,0,0.6-0.1c0.8-0.1,1.6-0.2,2.4-0.3c0,0,0,0,0,0c0.1,0,0.2,0,0.4-0.1c0.7-0.1,1.4-0.2,2-0.3c0.3,0,0.6-0.1,0.8-0.2
						c0.5-0.1,1-0.2,1.6-0.3c0.1,0,0.1,0,0.2,0c0.2,0,0.4-0.1,0.6-0.1c0.6-0.1,1.1-0.2,1.7-0.4c0.3-0.1,0.6-0.2,0.9-0.2
						c0.5-0.1,1-0.3,1.5-0.4c0.2,0,0.3-0.1,0.5-0.1c0.1,0,0.3-0.1,0.4-0.1c0.8-0.2,1.6-0.5,2.4-0.7c0.1,0,0.3-0.1,0.4-0.1
						c0.9-0.3,1.8-0.6,2.7-1c0.1,0,0.2-0.1,0.3-0.1c0.3-0.1,0.5-0.2,0.8-0.3c0.3-0.1,0.6-0.2,0.8-0.3c0.4-0.2,0.8-0.3,1.2-0.5
						c0.3-0.1,0.5-0.2,0.8-0.3c0.4-0.2,0.8-0.4,1.3-0.6c0.2-0.1,0.4-0.2,0.6-0.3c0.6-0.3,1.2-0.7,1.8-1c9.9-5.7,14.9-13.2,14.8-20.7
						l-0.3-112.1c0,7.5-4.9,15-14.8,20.7c-0.6,0.3-1.2,0.7-1.8,1c-0.2,0.1-0.4,0.2-0.6,0.3c-0.4,0.2-0.8,0.4-1.3,0.6
						c-0.2,0.1-0.5,0.2-0.8,0.3c-0.4,0.2-0.8,0.4-1.2,0.5c-0.3,0.1-0.6,0.2-0.8,0.3c-0.4,0.1-0.7,0.3-1.1,0.4
						c-0.9,0.3-1.8,0.7-2.7,1c-0.1,0-0.3,0.1-0.4,0.1c-0.8,0.3-1.6,0.5-2.4,0.7c-0.3,0.1-0.6,0.2-0.9,0.2c-0.5,0.1-1,0.3-1.5,0.4
						c-0.3,0.1-0.6,0.2-0.9,0.2c-0.6,0.1-1.1,0.3-1.7,0.4c-0.3,0.1-0.5,0.1-0.8,0.2c-0.5,0.1-1,0.2-1.6,0.3
						c-0.3,0.1-0.6,0.1-0.8,0.2c-0.7,0.1-1.4,0.2-2,0.3c-0.1,0-0.3,0-0.4,0.1c-0.8,0.1-1.6,0.2-2.4,0.3c-0.2,0-0.4,0-0.6,0.1
						c-0.6,0.1-1.2,0.1-1.9,0.2c-0.3,0-0.6,0-0.9,0.1c-0.5,0-1,0.1-1.5,0.1c-0.3,0-0.7,0-1,0c-0.5,0-1,0-1.5,0.1c-0.3,0-0.6,0-0.9,0
						c-0.5,0-1.1,0-1.6,0c-0.3,0-0.7,0-1,0c-0.5,0-1,0-1.5,0c-0.3,0-0.6,0-1,0c-0.6,0-1.1-0.1-1.7-0.1c-0.3,0-0.7,0-1-0.1
						c-0.5,0-1.1-0.1-1.6-0.1c-0.3,0-0.6-0.1-1-0.1c-0.8-0.1-1.7-0.2-2.5-0.3c-0.1,0-0.3,0-0.4-0.1c-1-0.1-1.9-0.3-2.8-0.5
						c-0.3-0.1-0.7-0.1-1-0.2c-0.4-0.1-0.9-0.2-1.3-0.3c-0.4-0.1-0.7-0.2-1.1-0.2c-0.4-0.1-0.9-0.2-1.3-0.3
						c-0.4-0.1-0.7-0.2-1.1-0.3c-0.4-0.1-0.8-0.2-1.3-0.3c-0.3-0.1-0.7-0.2-1-0.3c-0.4-0.1-0.8-0.2-1.2-0.4
						c-0.3-0.1-0.6-0.2-0.9-0.3c-0.7-0.2-1.5-0.5-2.2-0.8c-0.2-0.1-0.3-0.1-0.5-0.2c-0.9-0.3-1.7-0.7-2.5-1
						c-0.2-0.1-0.4-0.2-0.6-0.3c-0.6-0.3-1.3-0.6-1.9-0.9c-0.2-0.1-0.5-0.2-0.7-0.3c-0.8-0.4-1.6-0.8-2.3-1.3
						c-0.4-0.2-0.8-0.5-1.2-0.7c-0.3-0.2-0.6-0.4-0.9-0.6c-0.3-0.2-0.5-0.4-0.8-0.5c-0.3-0.2-0.6-0.4-0.8-0.6
						c-0.3-0.2-0.5-0.4-0.7-0.6c-0.3-0.2-0.5-0.4-0.8-0.6c-0.2-0.2-0.5-0.4-0.7-0.6c-0.2-0.2-0.5-0.4-0.7-0.6
						c-0.2-0.2-0.4-0.3-0.5-0.5c-0.4-0.4-0.8-0.8-1.1-1.1c-0.1-0.1-0.3-0.3-0.4-0.4c-0.5-0.5-0.9-1-1.3-1.5
						c-0.1-0.1-0.2-0.3-0.3-0.4c-0.2-0.3-0.5-0.6-0.7-1c-0.1-0.2-0.2-0.4-0.3-0.5c-0.2-0.3-0.4-0.6-0.6-0.9
						c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.3-0.3-0.5-0.4-0.8c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.3-0.2-0.5-0.3-0.8
						c-0.1-0.2-0.2-0.4-0.2-0.6c-0.1-0.2-0.2-0.5-0.2-0.7c-0.1-0.2-0.1-0.4-0.2-0.7c-0.1-0.2-0.1-0.5-0.2-0.7c0-0.2-0.1-0.4-0.1-0.7
						c0-0.3-0.1-0.5-0.1-0.8c0-0.2-0.1-0.4-0.1-0.7c0-0.3,0-0.5-0.1-0.8c0-0.3,0-0.6,0-0.9l0.3,112.1c0,0.1,0,0.3,0,0.4
						C920.2,276,920.2,276.1,920.3,276.3z"/>
						<path fill="#00A79D" d="M920.3,276.3c0,0.3,0,0.5,0.1,0.8c0,0.2,0.1,0.4,0.1,0.7c0,0.3,0.1,0.5,0.1,0.8c0,0.1,0,0.2,0,0.3
						c0,0.1,0.1,0.3,0.1,0.4c0.1,0.2,0.1,0.5,0.2,0.7c0.1,0.2,0.1,0.4,0.2,0.7c0.1,0.2,0.2,0.5,0.2,0.7c0,0.1,0.1,0.2,0.1,0.3
						c0,0.1,0.1,0.2,0.1,0.3c0.1,0.3,0.2,0.5,0.3,0.8c0.1,0.2,0.2,0.4,0.3,0.6c0.1,0.3,0.3,0.5,0.4,0.8c0.1,0.1,0.1,0.2,0.2,0.4
						c0,0.1,0.1,0.2,0.2,0.2c0.2,0.3,0.4,0.6,0.5,0.9c0.1,0.2,0.2,0.4,0.4,0.5c0.2,0.3,0.5,0.7,0.7,1c0.1,0.1,0.2,0.2,0.3,0.4
						c0,0,0,0,0.1,0.1c0.4,0.5,0.8,1,1.3,1.5c0.1,0.1,0.2,0.3,0.4,0.4c0.4,0.4,0.7,0.8,1.1,1.1c0.1,0.1,0.2,0.2,0.3,0.3
						c0.1,0.1,0.2,0.2,0.3,0.3c0.2,0.2,0.5,0.4,0.7,0.6c0.2,0.2,0.5,0.4,0.7,0.6c0.3,0.2,0.5,0.4,0.8,0.6c0.2,0.2,0.5,0.4,0.7,0.6
						c0.3,0.2,0.6,0.4,0.8,0.6c0.3,0.2,0.5,0.4,0.8,0.5c0.3,0.2,0.6,0.4,0.9,0.6c0.2,0.1,0.4,0.2,0.6,0.3c0.2,0.1,0.4,0.2,0.6,0.4
						c0.8,0.4,1.5,0.9,2.3,1.3c0.2,0.1,0.5,0.2,0.7,0.3c0.6,0.3,1.2,0.6,1.9,0.9c0.2,0.1,0.4,0.2,0.6,0.3c0.8,0.4,1.7,0.7,2.5,1
						c0.1,0.1,0.3,0.1,0.5,0.2c0.7,0.3,1.4,0.5,2.2,0.8c0.1,0,0.2,0.1,0.4,0.1c0.2,0.1,0.4,0.1,0.5,0.2c0.4,0.1,0.8,0.3,1.2,0.4
						c0.3,0.1,0.7,0.2,1,0.3c0.4,0.1,0.8,0.2,1.3,0.3c0.4,0.1,0.7,0.2,1.1,0.3c0.1,0,0.2,0.1,0.4,0.1v-112c-0.2,0-0.4-0.1-0.6-0.1
						c-0.4-0.1-0.7-0.2-1.1-0.3c-0.4-0.1-0.8-0.2-1.3-0.3c-0.3-0.1-0.7-0.2-1-0.3c-0.4-0.1-0.8-0.2-1.2-0.4
						c-0.3-0.1-0.6-0.2-0.9-0.3c-0.7-0.2-1.5-0.5-2.2-0.8c-0.2-0.1-0.3-0.1-0.5-0.2c-0.9-0.3-1.7-0.7-2.5-1
						c-0.2-0.1-0.4-0.2-0.6-0.3c-0.6-0.3-1.3-0.6-1.9-0.9c-0.2-0.1-0.5-0.2-0.7-0.3c-0.8-0.4-1.6-0.8-2.3-1.3
						c-0.4-0.2-0.8-0.5-1.2-0.7c-0.3-0.2-0.6-0.4-0.9-0.6c-0.3-0.2-0.5-0.4-0.8-0.5c-0.3-0.2-0.6-0.4-0.8-0.6
						c-0.3-0.2-0.5-0.4-0.7-0.6c-0.3-0.2-0.5-0.4-0.8-0.6c-0.2-0.2-0.5-0.4-0.7-0.6c-0.2-0.2-0.5-0.4-0.7-0.6
						c-0.2-0.2-0.4-0.3-0.5-0.5c-0.4-0.4-0.8-0.8-1.1-1.1c-0.1-0.1-0.3-0.3-0.4-0.4c-0.5-0.5-0.9-1-1.3-1.5
						c-0.1-0.1-0.2-0.3-0.3-0.4c-0.2-0.3-0.5-0.6-0.7-1c-0.1-0.2-0.2-0.4-0.3-0.5c-0.2-0.3-0.4-0.6-0.6-0.9
						c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.3-0.3-0.5-0.4-0.8c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.3-0.2-0.5-0.3-0.8
						c-0.1-0.2-0.2-0.4-0.2-0.6c-0.1-0.2-0.2-0.5-0.2-0.7c-0.1-0.2-0.1-0.4-0.2-0.7c-0.1-0.2-0.1-0.5-0.2-0.7c0-0.2-0.1-0.4-0.1-0.7
						c0-0.3-0.1-0.5-0.1-0.8c0-0.2-0.1-0.4-0.1-0.7c0-0.3,0-0.5-0.1-0.8c0-0.3,0-0.6,0-0.9l0.3,112.1c0,0.1,0,0.3,0,0.4
						C920.2,276,920.2,276.1,920.3,276.3z"/>
						<g>
							<path fill="#FBFCFC" d="M1005.7,183.8c19.7-11.4,19.8-29.8,0.2-41.2c-19.6-11.4-51.4-11.4-71.1,0
							c-19.7,11.4-19.8,29.8-0.2,41.2C954.1,195.2,986,195.2,1005.7,183.8z"/>
							<path fill="#4D4C4A" d="M970.1,188.2c12.7,0,24.6-2.8,33.5-8c8.2-4.7,12.8-10.8,12.8-17.1c0-6.2-4.4-12.2-12.5-16.9
							c-8.8-5.1-20.7-8-33.4-8c-12.7,0-24.6,2.8-33.5,8c-8.2,4.7-12.8,10.8-12.8,17.1c0,6.2,4.4,12.2,12.5,16.9
							C945.5,185.3,957.4,188.2,970.1,188.2z"/>
						</g>
					</g>
				</g>
			</g>
		</g>
		<g>
			<g>
				<g>
					<path fill="#8A8C8D" d="M1127.5,500.7l17.7,10.4c0.2,0.1,0.3,0.2,0.5,0.2c0,0,0.1,0,0.1,0.1c0.1,0,0.2,0.1,0.4,0.1
					c0.1,0,0.2,0.1,0.4,0.1c0.1,0,0.3,0.1,0.5,0.1c0,0,0.1,0,0.1,0c0.2,0,0.4,0,0.6,0c0,0,0.1,0,0.1,0c0.2,0,0.4,0,0.6,0
					c0,0,0.1,0,0.1,0c0.2,0,0.4-0.1,0.6-0.1c0,0,0.1,0,0.1,0c0.2,0,0.4-0.1,0.5-0.2c0,0,0.1,0,0.1,0c0.2-0.1,0.4-0.2,0.6-0.3l12.6-7
					c0.7-0.4,1.1-1,1.1-1.5l0,6.1c0,0.6-0.4,1.1-1.1,1.5l-12.6,7c-0.2,0.1-0.3,0.2-0.5,0.3c0,0,0,0,0,0c0,0-0.1,0-0.1,0
					c-0.1,0-0.2,0.1-0.3,0.1c-0.1,0-0.1,0-0.2,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.4,0.1c0,0-0.1,0-0.1,0
					c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.4,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.3,0-0.4,0
					c0,0,0,0,0,0c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.3,0c0,0-0.1,0-0.1,0c-0.1,0-0.3-0.1-0.4-0.1c-0.1,0-0.1,0-0.2,0
					c-0.1,0-0.1,0-0.2-0.1c0,0-0.1,0-0.1-0.1c-0.2-0.1-0.4-0.2-0.5-0.2l-17.7-10.4V500.7z"/>
					<path fill="#BABABA" d="M1163,501c1.5,0.8,1.5,2.2,0,3.1l-12.6,7c-1.5,0.8-3.8,0.8-5.3,0l-17.7-10.4l18-10L1163,501z"/>
				</g>
				<g>
					<g>
						<g enable-background="new    ">
							<g>
								<path fill="#FFC849" d="M1139.1,507c-2.6,1.5-2.6,3.9,0,5.4l72.2,42.5c2.6,1.5,6.7,1.5,9.3,0l22.1-12.3
								c2.6-1.5,2.6-3.9,0-5.4l-72.2-42.5c-2.6-1.5-6.7-1.5-9.3,0L1139.1,507z"/>
							</g>
							<path fill="#D1992A" d="M1211.3,565.6c0.3,0.2,0.6,0.3,0.9,0.4c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.2,0.1,0.3,0.1
							c0.1,0,0.2,0.1,0.3,0.1c0.2,0.1,0.4,0.1,0.7,0.2c0.1,0,0.2,0,0.2,0.1c0.2,0,0.4,0.1,0.6,0.1c0.1,0,0.1,0,0.2,0
							c0,0,0.1,0,0.1,0c0.2,0,0.5,0,0.7,0c0.1,0,0.2,0,0.3,0c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.2,0,0.4,0,0.7,0
							c0.1,0,0.2,0,0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.2,0c0.2,0,0.4-0.1,0.7-0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0
							c0.1,0,0.2-0.1,0.3-0.1c0.2-0.1,0.4-0.1,0.6-0.2c0.1,0,0.1,0,0.2-0.1c0,0,0,0,0.1,0c0.3-0.1,0.7-0.3,0.9-0.5l22.1-12.3
							c1.3-0.7,1.9-1.7,1.9-2.7l0-10.7c0,1-0.6,2-1.9,2.7l-22.1,12.3c-0.3,0.2-0.7,0.3-1,0.5c-0.1,0-0.1,0-0.2,0.1
							c-0.3,0.1-0.6,0.2-0.9,0.3c-0.1,0-0.1,0-0.2,0c-0.3,0.1-0.7,0.1-1.1,0.2c-0.1,0-0.1,0-0.2,0c-0.4,0-0.7,0.1-1.1,0.1
							c-0.1,0-0.1,0-0.2,0c-0.4,0-0.7,0-1.1-0.1c-0.1,0-0.1,0-0.2,0c-0.3,0-0.5-0.1-0.8-0.1c-0.2,0-0.4-0.1-0.7-0.2
							c-0.2-0.1-0.4-0.1-0.6-0.2c-0.1,0-0.2-0.1-0.3-0.1c-0.3-0.1-0.6-0.3-0.9-0.4l-72.2-42.5c-0.2-0.1-0.3-0.2-0.4-0.3
							c-0.2-0.1-0.3-0.2-0.5-0.3c-0.2-0.2-0.4-0.4-0.5-0.6c0,0,0-0.1-0.1-0.1c-0.1-0.2-0.2-0.4-0.3-0.6c0,0,0,0,0-0.1
							c-0.1-0.2-0.1-0.5-0.1-0.7l0,10.7c0,0,0,0,0,0.1c0,0.1,0,0.3,0,0.4c0,0.1,0,0.2,0.1,0.2c0,0,0,0,0,0.1c0,0,0,0,0,0.1
							c0,0.1,0.1,0.3,0.2,0.4c0,0.1,0.1,0.1,0.1,0.2c0,0,0,0.1,0.1,0.1c0,0,0,0.1,0.1,0.1c0.1,0.2,0.3,0.3,0.4,0.4c0,0,0,0,0,0
							c0.1,0.1,0.3,0.2,0.5,0.3c0.1,0.1,0.2,0.2,0.3,0.2c0,0,0.1,0,0.1,0v0L1211.3,565.6z"/>
						</g>
					</g>
				</g>
				<g>
					<polygon fill="#626363" points="1146.5,496.2 1149.1,497.8 1146.4,499.4 1143.8,497.8 				"/>
				</g>
				<g>
					<polygon fill="#626363" points="1141.4,499.2 1144.1,500.7 1141.4,502.3 1138.7,500.7 				"/>
				</g>
			</g>
			<g>
				<g>
					<g>
						<g enable-background="new    ">
							<g>
								<path fill="#FFC849" d="M1095.5,521.5c-2.6,1.5-2.6,3.9,0,5.4l24.6,14.7c2.6,1.5,6.7,1.5,9.3,0l22.1-12.3
								c2.6-1.5,2.6-3.9,0-5.4l-24.6-14.7c-2.6-1.5-6.7-1.5-9.3,0L1095.5,521.5z"/>
							</g>
							<path fill="#D1992A" d="M1120,552.4c0.3,0.2,0.6,0.3,0.9,0.4c0.1,0,0.2,0.1,0.3,0.1c0.1,0,0.2,0.1,0.3,0.1
							c0.1,0,0.2,0.1,0.3,0.1c0.2,0.1,0.4,0.1,0.7,0.2c0.1,0,0.2,0,0.2,0.1c0.2,0,0.4,0.1,0.6,0.1c0.1,0,0.1,0,0.2,0
							c0,0,0.1,0,0.1,0c0.2,0,0.5,0,0.7,0c0.1,0,0.2,0,0.3,0c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.2,0,0.4,0,0.7,0
							c0.1,0,0.2,0,0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.2,0c0.2,0,0.4-0.1,0.7-0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0
							c0.1,0,0.2-0.1,0.3-0.1c0.2-0.1,0.4-0.1,0.6-0.2c0.1,0,0.1,0,0.2-0.1c0,0,0,0,0.1,0c0.3-0.1,0.7-0.3,0.9-0.5l22.1-12.3
							c1.3-0.7,1.9-1.7,1.9-2.7l0-10.7c0,1-0.6,2-1.9,2.7l-22.1,12.3c-0.3,0.2-0.7,0.3-1,0.5c-0.1,0-0.1,0-0.2,0.1
							c-0.3,0.1-0.6,0.2-0.9,0.3c-0.1,0-0.1,0-0.2,0c-0.3,0.1-0.7,0.1-1.1,0.2c-0.1,0-0.1,0-0.2,0c-0.4,0-0.7,0.1-1.1,0.1
							c-0.1,0-0.1,0-0.2,0c-0.4,0-0.7,0-1.1-0.1c-0.1,0-0.1,0-0.2,0c-0.3,0-0.5-0.1-0.8-0.1c-0.2,0-0.4-0.1-0.7-0.2
							c-0.2-0.1-0.4-0.1-0.6-0.2c-0.1,0-0.2-0.1-0.3-0.1c-0.3-0.1-0.6-0.3-0.9-0.4l-24.6-14.7c-0.2-0.1-0.3-0.2-0.4-0.3
							c-0.2-0.1-0.3-0.2-0.5-0.3c-0.2-0.2-0.4-0.4-0.5-0.6c0,0,0-0.1-0.1-0.1c-0.1-0.2-0.2-0.4-0.3-0.6c0,0,0,0,0-0.1
							c-0.1-0.2-0.1-0.5-0.1-0.7l0,10.7c0,0,0,0,0,0.1c0,0.1,0,0.3,0,0.4c0,0.1,0,0.2,0.1,0.2c0,0,0,0,0,0.1c0,0,0,0,0,0.1
							c0,0.1,0.1,0.3,0.2,0.4c0,0.1,0.1,0.1,0.1,0.2c0,0,0,0.1,0.1,0.1c0,0,0,0.1,0.1,0.1c0.1,0.2,0.3,0.3,0.4,0.4c0,0,0,0,0,0
							c0.1,0.1,0.3,0.2,0.5,0.3c0.1,0.1,0.2,0.2,0.3,0.2c0,0,0.1,0,0.1,0v0L1120,552.4z"/>
						</g>
					</g>
				</g>
				<polygon fill="#383838" points="1130,543.2 1150.5,531.2 1150.5,538.5 1130,550.5 			"/>
			</g>
		</g>
		<g>
			<g>
				<g>
					<g enable-background="new    ">
						<g>
							<path fill="#A3A4A4" d="M262,461.9c-2.4-1.4-6.3-1.4-8.6,0l-96.2,55.9c-2.4,1.4-2.4,3.6,0,5l57.8,32.7c2.4,1.4,6.3,1.4,8.6,0
							l96.2-55.9c2.4-1.4,2.4-3.6,0-5L262,461.9z"/>
						</g>
						<path fill="#8A8C8D" d="M223.5,727.6c-0.3,0.2-0.6,0.3-0.9,0.4c-0.1,0-0.2,0.1-0.2,0.1c-0.1,0-0.2,0.1-0.3,0.1
						c-0.1,0-0.2,0.1-0.3,0.1c-0.2,0.1-0.4,0.1-0.6,0.2c-0.1,0-0.1,0-0.2,0.1c-0.2,0-0.3,0-0.5,0.1c-0.1,0-0.1,0-0.2,0
						c0,0-0.1,0-0.1,0c-0.2,0-0.5,0-0.7,0c-0.1,0-0.2,0-0.3,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0c-0.2,0-0.4,0-0.6,0
						c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0c-0.1,0-0.2,0-0.2,0c-0.2,0-0.4-0.1-0.6-0.1c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0
						c-0.1,0-0.2,0-0.3-0.1c-0.2-0.1-0.4-0.1-0.5-0.2c-0.1,0-0.1,0-0.2-0.1c0,0,0,0-0.1,0c-0.3-0.1-0.6-0.3-0.9-0.4l-57.8-32.7
						c-1.2-0.7-1.8-1.6-1.8-2.5l0-172.1c0,0.9,0.6,1.8,1.8,2.5l57.8,32.7c0.3,0.2,0.6,0.3,0.9,0.4c0,0,0.1,0,0.2,0.1
						c0.3,0.1,0.6,0.2,0.8,0.3c0.1,0,0.1,0,0.2,0c0.3,0.1,0.6,0.1,1,0.2c0.1,0,0.1,0,0.2,0c0.3,0,0.7,0.1,1,0.1c0.1,0,0.1,0,0.2,0
						c0.3,0,0.7,0,1-0.1c0.1,0,0.1,0,0.2,0c0.2,0,0.5-0.1,0.7-0.1c0.2,0,0.4-0.1,0.6-0.2c0.2-0.1,0.4-0.1,0.6-0.2
						c0.1,0,0.2-0.1,0.2-0.1c0.3-0.1,0.6-0.3,0.9-0.4l96.2-55.9c0.1-0.1,0.3-0.2,0.4-0.3c0.2-0.1,0.3-0.2,0.4-0.3
						c0.2-0.2,0.4-0.4,0.5-0.5c0,0,0-0.1,0.1-0.1c0.1-0.2,0.2-0.4,0.3-0.6c0,0,0,0,0-0.1c0.1-0.2,0.1-0.4,0.1-0.6l0,172.1
						c0,0,0,0,0,0.1c0,0.1,0,0.2,0,0.4c0,0.1,0,0.1-0.1,0.2c0,0,0,0,0,0.1c0,0,0,0,0,0.1c0,0.1-0.1,0.2-0.2,0.3
						c0,0.1-0.1,0.1-0.1,0.2c0,0,0,0.1-0.1,0.1c0,0,0,0.1-0.1,0.1c-0.1,0.1-0.2,0.3-0.4,0.4c0,0,0,0,0,0c-0.1,0.1-0.3,0.2-0.4,0.3
						c-0.1,0.1-0.2,0.2-0.3,0.2c0,0,0,0-0.1,0v0L223.5,727.6z"/>
						<path fill="#3A3A3A" d="M321.5,497.7C321.4,497.8,321.4,497.8,321.5,497.7c-0.1,0.3-0.2,0.5-0.3,0.6c0,0,0,0.1-0.1,0.1
						c-0.1,0.2-0.3,0.4-0.5,0.5c-0.1,0.1-0.3,0.2-0.4,0.3c-0.1,0.1-0.2,0.2-0.4,0.3l-96.2,55.9c-0.3,0.2-0.6,0.3-0.9,0.4
						c-0.1,0-0.2,0.1-0.2,0.1c-0.2,0.1-0.4,0.1-0.6,0.2c-0.2,0.1-0.4,0.1-0.6,0.2c-0.2,0-0.5,0.1-0.7,0.1c-0.1,0-0.1,0-0.2,0
						c-0.3,0-0.7,0.1-1,0.1c-0.1,0-0.1,0-0.2,0c-0.3,0-0.7,0-1-0.1c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.2,0v172.1c0.1,0,0.1,0,0.2,0
						c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.2,0,0.4,0,0.6,0c0.1,0,0.1,0,0.2,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0
						c0.2,0,0.5,0,0.7,0c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.2,0c0.2,0,0.3,0,0.5-0.1c0.1,0,0.1,0,0.2-0.1c0.2,0,0.4-0.1,0.6-0.2
						c0.1,0,0.2,0,0.3-0.1c0.1,0,0.2-0.1,0.3-0.1c0.1,0,0.2-0.1,0.2-0.1c0.3-0.1,0.6-0.3,0.9-0.4l96.2-55.9v0c0,0,0.1,0,0.1,0
						c0.1-0.1,0.2-0.1,0.3-0.2c0.1-0.1,0.3-0.2,0.4-0.3c0,0,0,0,0,0c0.1-0.1,0.3-0.3,0.4-0.4c0,0,0-0.1,0.1-0.1c0,0,0-0.1,0.1-0.1
						c0-0.1,0.1-0.1,0.1-0.2c0.1-0.1,0.1-0.2,0.2-0.3c0,0,0,0,0-0.1c0,0,0,0,0-0.1c0-0.1,0-0.1,0.1-0.2c0-0.1,0-0.2,0-0.4
						c0,0,0,0,0-0.1l0-172.1C321.6,497.3,321.5,497.5,321.5,497.7z"/>
					</g>
				</g>
			</g>
			<g>
				<path fill="#8D8E8F" d="M271.2,556c22.3-12.9,40.4-2.5,40.5,23.1c0.1,25.6-17.9,56.8-40.2,69.7s-40.4,2.5-40.5-23.1
				C230.9,600,248.9,568.9,271.2,556z"/>
			</g>
			<g>
				<path fill="#3A3A3A" d="M271.3,565.4c17.7-10.2,32.2-2,32.2,18.4c0.1,20.4-14.3,45.2-32,55.5c-17.7,10.2-32.2,2-32.2-18.4
				C239.2,600.5,253.5,575.7,271.3,565.4z"/>
			</g>
			<g>
				<path fill="#8D8E8F" d="M271.3,587.5c7.2-4.1,13-0.8,13,7.4c0,8.2-5.8,18.2-12.9,22.4c-7.2,4.1-13,0.8-13-7.4
				C258.4,601.6,264.2,591.6,271.3,587.5z"/>
			</g>
			<g>
				<path fill="#8D8E8F" d="M264.6,677.1c3.2-1.9,5.9-0.4,5.9,3.4c0,3.7-2.6,8.3-5.9,10.1c-3.2,1.9-5.9,0.4-5.9-3.4
				C258.7,683.5,261.3,679,264.6,677.1z"/>
			</g>
			<g>
				<path fill="#8D8E8F" d="M283.6,666.6c3.2-1.9,5.9-0.4,5.9,3.4c0,3.7-2.6,8.3-5.9,10.1c-3.2,1.9-5.9,0.4-5.9-3.4
				S280.3,668.4,283.6,666.6z"/>
			</g>
		</g>
		<g>
			<g>
				<g>
					<g>
						<g enable-background="new    ">
							<g>
								<g>
									<path fill="#A63222" d="M201.4,772c-4.7,2.7-4.7,7.1,0,9.8l238,138.3c4.7,2.7,12.3,2.7,17,0l139-78.6c4.7-2.7,4.7-7.1,0-9.8
									l-238-138.3c-4.7-2.7-12.3-2.7-17,0L201.4,772z"/>
								</g>
							</g>
							<path fill="#701E15" d="M439.5,931.9c0.5,0.3,1.1,0.6,1.7,0.8c0.2,0.1,0.3,0.1,0.5,0.2c0.2,0.1,0.3,0.1,0.5,0.2
							c0.2,0.1,0.4,0.1,0.6,0.2c0.4,0.1,0.8,0.2,1.2,0.3c0.1,0,0.3,0.1,0.4,0.1c0.3,0.1,0.7,0.1,1,0.1c0.1,0,0.2,0,0.4,0.1
							c0.1,0,0.1,0,0.2,0c0.4,0,0.9,0.1,1.3,0.1c0.2,0,0.3,0,0.5,0c0.1,0,0.2,0,0.3,0c0.1,0,0.3,0,0.4,0c0.4,0,0.8,0,1.2-0.1
							c0.1,0,0.3,0,0.4,0c0.1,0,0.2,0,0.3,0c0.1,0,0.3,0,0.4,0c0.4-0.1,0.8-0.1,1.2-0.2c0.1,0,0.2-0.1,0.3-0.1
							c0.1,0,0.2-0.1,0.3-0.1c0.2,0,0.4-0.1,0.6-0.1c0.4-0.1,0.7-0.2,1.1-0.4c0.1,0,0.2-0.1,0.3-0.1c0,0,0.1,0,0.1,0
							c0.6-0.2,1.2-0.5,1.7-0.8l139-78.6c2.4-1.4,3.5-3.2,3.5-4.9l0-11.7c0,1.8-1.2,3.6-3.5,4.9l-139,78.6c-0.6,0.3-1.2,0.6-1.8,0.9
							c-0.1,0-0.2,0.1-0.3,0.1c-0.5,0.2-1.1,0.4-1.7,0.5c-0.1,0-0.2,0.1-0.3,0.1c-0.6,0.1-1.3,0.3-1.9,0.3c-0.1,0-0.2,0-0.3,0
							c-0.7,0.1-1.3,0.1-2,0.1c-0.1,0-0.2,0-0.3,0c-0.7,0-1.3,0-2-0.1c-0.1,0-0.2,0-0.4-0.1c-0.5-0.1-1-0.2-1.4-0.2
							c-0.4-0.1-0.8-0.2-1.2-0.3c-0.4-0.1-0.8-0.2-1.1-0.3c-0.2-0.1-0.3-0.1-0.5-0.2c-0.6-0.2-1.2-0.5-1.7-0.8l-238-138.3
							c-0.3-0.2-0.5-0.3-0.7-0.5c-0.3-0.2-0.6-0.4-0.9-0.6c-0.4-0.3-0.7-0.7-1-1c0-0.1-0.1-0.1-0.1-0.2c-0.2-0.4-0.4-0.7-0.6-1.1
							c0,0,0-0.1,0-0.1c-0.1-0.4-0.2-0.8-0.2-1.2l0,11.7c0,0,0,0.1,0,0.1c0,0.2,0,0.5,0.1,0.7c0,0.1,0.1,0.3,0.1,0.4
							c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0.1,0.2,0.2,0.5,0.3,0.7c0.1,0.1,0.2,0.2,0.2,0.3c0,0.1,0.1,0.1,0.1,0.2
							c0,0.1,0.1,0.1,0.1,0.2c0.2,0.3,0.5,0.5,0.7,0.8c0,0,0.1,0,0.1,0.1c0.2,0.2,0.6,0.4,0.9,0.6c0.2,0.1,0.4,0.3,0.6,0.4
							c0,0,0.1,0.1,0.1,0.1v0L439.5,931.9z"/>
							<path fill="#FFFFFF" d="M594.2,844.3L458.6,921c-0.6,0.4-1.3,0.7-2.1,1c-0.1,0-0.2,0.1-0.3,0.1c-0.6,0.2-1.2,0.4-1.9,0.6
							l-0.4,0.1c-0.7,0.2-1.4,0.3-2.1,0.4l-0.3,0c-0.7,0.1-1.5,0.1-2.2,0.1l-0.4,0c-0.8,0-1.5,0-2.2-0.1c-0.1,0-0.4-0.1-0.4-0.1
							c-0.5-0.1-1.1-0.2-1.6-0.3c-0.5-0.1-0.9-0.2-1.4-0.3c-0.4-0.1-0.8-0.2-1.2-0.4c-0.2-0.1-0.4-0.1-0.5-0.2
							c-0.8-0.3-1.4-0.6-1.9-0.9l-238-138.3c-0.2-0.1-0.3-0.2-0.5-0.3l0,5.5c0,0.1,0,0.2,0,0.3c0,0,0,0.1,0.1,0.2
							c0,0,0.1,0.2,0.1,0.2c0,0.1,0.1,0.2,0.2,0.4l0.1,0.2l0.2,0.3c0.1,0.2,0.3,0.3,0.4,0.5l0,0l0.1,0.1c0.1,0.1,0.3,0.2,0.5,0.3
							l0.2,0.1c0.1,0.1,0.2,0.2,0.3,0.2c0,0,0.1,0.1,0.2,0.1l238.1,138.4c0.4,0.2,0.8,0.4,1.4,0.7c0.1,0.1,0.8,0.3,0.8,0.3
							c0.1,0,0.1,0,0.2,0c0.1,0,0.3,0.1,0.4,0.1c0.4,0.1,0.7,0.2,1.1,0.3c0.1,0,0.2,0.1,0.4,0.1c0.2,0,0.5,0.1,0.7,0.1l0.5,0.1
							c0.1,0,0.1,0,0.2,0c0.4,0,0.8,0.1,1.2,0.1l1.1,0h0c0.4,0,0.7,0,1.1-0.1l1-0.1c0.4-0.1,0.7-0.1,1.1-0.2l0.7-0.2
							c0.1,0,0.2,0,0.3-0.1c0.3-0.1,0.6-0.2,0.9-0.3c0,0,0.4-0.1,0.4-0.1c0,0,0,0,0,0c0.5-0.2,1-0.4,1.5-0.7l137.6-77.9V844.3z"/>
						</g>
					</g>
				</g>
			</g>
			<path fill="#FFFFFF" d="M414.3,756.6c1.7,1,1.7,2.6,0,3.6l-88,51.1c-1.7,1-4.5,1-6.3,0L262,777.9c-1.7-1-1.7-2.6,0-3.6l88-51.1
			c1.7-1,4.5-1,6.3,0L414.3,756.6z"/>
		</g>
		<g>
			<path fill="#8DC63F" d="M969.3,169.6c0,0,40.2-56.3,94-37C1063.3,132.7,1000.1,77.6,969.3,169.6z"/>
			<path fill="#8DC63F" d="M969.3,169.6c0,0,14.8-77.2,84.6-79.7c0,0-38.2-19.3-65.3,11.5S969.3,169.6,969.3,169.6z"/>
			<path fill="#8DC63F" d="M969.3,169.6c0,0-40.2-56.3-94-37C875.2,132.7,938.5,77.6,969.3,169.6z"/>
			<path fill="#8DC63F" d="M969.3,169.6c0,0-14.8-77.2-84.6-79.7c0,0,38.2-19.3,65.3,11.5C977.1,132.2,969.3,169.6,969.3,169.6z"/>
		</g>
	</g>
</svg>

	<?php
	/*include($_SERVER['HTTP_HOST']."/img/svg/ISOMETRIC WORKSPACE.svg");*/
	/*include("img\svg\bootstrap.svg");
	include("img\svg\css-3.svg");
	include("img\svg\html-5.svg");
	include("img\svg\js-file.svg");
	include("img\svg\php.svg");*/
	?>
	</div>
</body>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/index.js"></script>
</html>