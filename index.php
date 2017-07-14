<!DOCTYPE HTML>
<?php require "most.php"; ?>
<?php require "insert.php"; ?>
<html>
	<head>
		<title>Dev life</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body >

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-diamond"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>DEV LIFE</h1>
								<p>Sistema de control de pacientes a cirujia</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#registro">registro</a></li>
								<li><a href="#work">CEYE</a></li>
								<li><a href="#about">Equipo</a></li>
								<li><a href="#contact">Contacto</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="registro">
								<h2 class="major">Registrar Paciente</h2>
									<img src="images/dc.jpg" alt="" style="width: 559px;height: 150px;" />
								<div>
		<form class="insertarp" method="post" action="insert.php">
		<div style=' background-color: #7E9ECC; color: black;'>
			<table>
				<tr>
					<td>
						<label><font style='color: black; font-family: Tahoma, Geneva, sans-serif;font-size: 15px;font-weight: bold;'>Nombre del paciente</label>
					</td>
					<td>
						<input type="text" name="nom" required/>
					</td>
				</tr>
				<tr>
					<td>
						<label><font style='color: black; font-family: Tahoma, Geneva, sans-serif;font-size: 15px;font-weight: bold;'>Numero de seguro</label>
					</td>
					<td>
						<input type="text" name="num" required/>
					</td>
				</tr>
				<tr>
					<td>
						<label><font style='color: black; font-family: Tahoma, Geneva, sans-serif;font-size: 15px;font-weight: bold;'>Doctor responsable</label>
					</td>
					<td>
						<input type="text" name="dr" required/>
					</td>
				</tr>
				<tr>
					<td >
						<label><font style='color: black; font-family: Tahoma, Geneva, sans-serif;font-size: 15px;font-weight: bold;'>Enfermer@ responsable</label>
					</td>
					<td>
						<input type="text" name="enf" required/>
					</td>
				</tr>
				<tr>
					<td>
						<label><font style='color: black; font-family: Tahoma, Geneva, sans-serif;font-size: 15px;font-weight: bold;'>Sexo</label>
					</td>
					<td>
						<select style="width: 195px;" name="sex" required/>
							<option value="Femenino">Femenino</option>
							<option value="Masculino">Masculino</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label><font style='color: black; font-family: Tahoma, Geneva, sans-serif;font-size: 15px;font-weight: bold;'>Motivo de envio</label>
					</td>
					<td>
						<select style="width: 195px;" name="mot" required/>
							<option value="Evolucion del producto">Evolucion del producto</option>
							<option value="Legrado">Legrado</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label><font style='color: black; font-family: Tahoma, Geneva, sans-serif;font-size: 15px;font-weight: bold;'>Fecha de cirujia</label>
					</td>
					<td>	
						<input type="date" name="fecha" style="color: black;" required/>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<center><input type="submit" class="botonsend" value="registrar" >
					</td>
					<td>
					</td>
				</tr>

			</table>
			
			
		<div>
			
		</form>
				<div>
							</article>

						<!--pacientes a cirujia -->
							<article id="work">
								<h2 class="major">Pacientes Proximos a cirujia</h2>
								<span class="image main"><img src="images/dc3.jpg" alt=""  style="width: 559px;height: 150px;"/></span>
								<div class="list-group">
 									<?php mostrar(); ?>
									<center>
											<input type="submit" class="botonloco" value="mas detalles">
									</center>
								
							</article>

						<!-- About -->
							<article id="about">
								<h2 class="major">Instrumentos-tococirujia</h2>
								<span class="image main"><img src="images/dc2.jpg" alt=""  style="width: 559px;height: 150px;"/></span>
								<?php mostrar2(); ?>
							</article>

						<!-- Contact -->
							<article id="contact">
								<h2 class="major">Contactanos</h2>
								<form method="post" action="#">
									<div class="field half first">
										<label for="name">Nombre</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" />
									</div>
									<div class="field">
										<label for="message">Mensaje</label>
										<textarea name="message" id="message" rows="4"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Enviar Mensaje" class="special" /></li>
										<li><input type="reset" value="Borrar" /></li>
									</ul>
								</form>
								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</article>


					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; Gear four. Diseño: <a href="https://www.facebook.com">James moose</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
