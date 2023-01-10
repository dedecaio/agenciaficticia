<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.min.css">
	<title>Projeto 11</title>
</head>
<body>
	<header>
		<div class="container">
			<div class="logo">
				<a href=""><img src="imagens/logo.png"></a>
			</div><!--logo-->

			<nav class="desktop">
				<ul>
					<li><a href="">Sobre</a></li>
					<li><a href="">Depoimentos</a></li>
					<li class="cta"><a href="">Baixar agora!</a></li>
				</ul>
			</nav><!--desktop-->

			<nav class="mobile">
				<h3><i class="fa fa-bars"></i></h3>
				<ul>
					<li><a href="">Sobre</a></li>
					<li><a href="">Depoimentos</a></li>
					<li class="cta"><a href="">Baixar agora!</a></li>
				</ul>
			</nav><!--mobile-->


			<div class="clear"></div>
		</div><!--container-->
	</header>

	<section class="topo">
		<div class="container">
			<div class="texto-topo">
				<h2>Desafie seus amigos nesse multiplayer repleto de aventuras.</h2>
				<p>Lorem ipsum dolor sit amet, consectur elit supendisse. lorem in at enim lectus non accumsan urna. Nunc consectur ut urna vel mattis loren dolor amet sit ennim lectus</p>

				<a href=""><img src="imagens/appstore.png"></a>
				<a href=""><img src="imagens/googleplay.png"></a>
			</div><!--texto-topo-->	
			<div class="img-topo">
				<img src="imagens/hero.jpg">
			</div><!--img-topo-->
			<div class="clear"></div>
		</div><!--container-->
	</section><!--topo-->


	<section class="depoimentos">
		<div class="container">
			<div class="depoimento-single">
				<p>"O melhor jogo do ano! Incrível como consigo aprender e me divertir ao mesmo tempo!</p>
				<br>
				<span>Mano Dé</span>
			</div><!--depoimento-single-->

			<div class="depoimento-single">
				<p>"O melhor jogo do ano! Incrível como consigo aprender e me divertir ao mesmo tempo!</p>
				<br>
				<span>Mano Dé</span>
			</div><!--depoimento-single-->
		</div><!--container-->
	</section><!--depoimentos-->

	<section class="sobre">
		<div class="container">
			<div class="titulo-sobre">
				<h2>Sobre</h2>

			</div><!--titulo-sobre-->	

			<div class="sobre-single">
				<div class="titulo-single">
					<i class="fa fa-user"></i>
					<h3>Totalmente<br>Multiplayer</h3>
				</div><!--titulo-single-->

				<div class="sobre-conteudo">
					<p>Divirta-se com seus amigos e veja quem é melhor da rodada!</p>
				</div><!--sobre-conteudo-->	

				<div class="clear"></div>
			</div><!--sobre-single-->	

			<div class="sobre-single">
				<div class="titulo-single">
					<i class="fa fa-star"></i>
					<h3>Desafios toda<br>Semana</h3>
				</div><!--titulo-single-->

				<div class="sobre-conteudo">
					<p>Divirta-se com seus amigos e veja quem é melhor da rodada!</p>
				</div><!--sobre-conteudo-->	

				<div class="clear"></div>
			</div><!--sobre-single-->


			<div class="sobre-single">
				<div class="titulo-single">
					<i class="fa fa-gamepad"></i>
					<h3>Crossplay<br>Disponível</h3>
				</div><!--titulo-single-->

				<div class="sobre-conteudo">
					<p>Divirta-se com seus amigos e veja quem é melhor da rodada!</p>
				</div><!--sobre-conteudo-->	

				<div class="clear"></div>
			</div><!--sobre-single-->
		</div><!--container-->
		<div class="clear"></div>
	</section><!--sobre-->

	<footer>
		<div class="container">
			<i class="fa fa-instagram"></i>
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>

		</div><!--container-->	
	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<script>
		$('nav.mobile h3').click(function(){
			$(this).parent().find('ul').slideToggle();
		});
	</script>
</body>
</html>