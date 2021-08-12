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
						<a class="nav-link" href="#projects">Proyectos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#hab">Habilidades</a>
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
								<img src="img/pc-placeholder.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">TITULO</h5>
									<p class="card-text">Lorem ipsum, </p>
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
									<p class="card-text">sapiente vitae cumque fugit reiciendis voluptatem tempore omnis ut asperiores. Eveniet sit quas quae officiis repellat nulla ea doloremque voluptates adipisci!</p>
									<a href="#" class="btn btn-primary">GitHub</a>
									<a href="#" class="btn btn-primary">Visitar</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row collapse row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="collapseExample">
						<div class="col">
							<div class="card text-center">
								<img src="img/pc-placeholder.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">TITULO</h5>
									<p class="card-text">Lorem ipsum, dolor sit amet consectetur ciendis voluptatem tempore omnis ut asperiores. Eveniet sit quas quae officiis repellat nulla ea doloremque voluptates adipisci!</p>
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
						</div>
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
								<div id="emailHelp" class="form-text">No compartiremos tu datos personales con nadie</div>
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
	<?php
	include($_SERVER['HTTP_HOST']."/img/svg/ISOMETRIC WORKSPACE.svg");
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