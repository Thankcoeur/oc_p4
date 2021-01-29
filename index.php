
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="description" content="La Chouette Agence, Entreprise de Web Design basée à Lyon">
    <link rel="shortcut icon" type="image/webp" href="favicon.webp">
    
	 
	 <?php 

	 function getstyle($nom) {

$contenu_fichier = file_get_contents("./css/$nom.css");


echo "<style>$contenu_fichier</style>";



	 }

	 function getjs($nom) {

		$contenu_fichier = file_get_contents("./js/$nom.js");
		
		
		echo "<script>$contenu_fichier</script>";
		
		
		
			 }

	function getimg($name,$widht,$height,$alt,$class) {
		// A few settings


// Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents("img/$name.webp"));

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data:webp '.';base64,'.$imageData;

// Echo out a sample image
echo '<img class="',$class,'" width="',$widht,'"  height="',$height,'" alt="',$alt,'" src="', $src, '">';




	}

	


	 getstyle("et-line");
	 getstyle("bootstrap");
	 getstyle("font-awesome");
	 getstyle("style");

	 getjs("min");

	 




?>
	
	
    

    <title>La Chouette Agence - Entreprise de Web Design - Lyon
	</title>

    
<!-- Analytics -->
 
<!-- Analytics END -->
    
</head>
<body>


<!-- Principal conteneur -->
<div class="page-container">
    
<!-- bloc-0 -->
<div class="bloc bgc-white l-bloc  " id="bloc-0">
	<div class="container bloc-sm">

		<nav class="navbar row">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html"><?php getimg("la-chouette-agence","386","74","logo de la chouette angence","") ?>
</a>
				<button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
					<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-1 special-dropdown-nav">
				<ul class="site-navigation nav navbar-nav">
					<li>
						<a href="#service">Nos Services</a>
					</li>
					<li>
						<a href="#portfolio">Portfolio</a>
					</li>
					<li>
						<a href="#contact">Contact</a>
					</li>
					
				</ul>
			</div>
		</nav>
	</div>
</div>
<!-- bloc-0 END -->

<!-- bloc-1-presentation -->
<header class="bloc bg-degrad-yellow b-parallax border-inset" id="bloc-1-hero">
	<div class="container bloc-lg">
		<div class="row tight-width-whitespace">
			<div class="col-sm-12">
				<?php getimg("logo","150","150","logo du site","center-block image-resize-mode") ?>
				<h1 class="text-center hero-bloc-text c-white ">
					La Chouette Agence - Entreprise de Web Design - Lyon
				</h1>
				<div class="text-center">
					<a href="page2.html" class="btn btn-lg btn-clean btn-rd cta-hero " id="cta-hero">Nous Contacter</a>
				</div>
			</div>
		</div>
	</div>
</header>
<!-- bloc-1-presentation END -->

<!-- bloc-2-services -->
<div class="bloc bgc-white l-bloc" id="bloc-2-services">
	<div class="container bloc-md">
		<div class="row">
			<h2 class="col-sm-12 text-center">La chouette agence est une agence web qui accompagne les entreprises pour renforcer leur stratégie digitale.</h2>
		</div>
		<div class="row voffset-lg med-width-whitespace">
			<section class="col-sm-4">
				<div class="text-center">
					<span class="et-icon-browser sm-shadow icon-dark-slate-blue icons icon-lg"></span>
				</div>
				<h3 class="mg-md text-center">
					Web design
				</h3>
				<p class="text-center ">
					Que vous ayez un site web qui a besoin d&rsquo;un rafraîchissement ou que vous partiez de zéro, laissez-nous vous réaliser un design dont vous serez fier.
				</p>
			</section>
			<section class="col-sm-4">
				<div class="text-center">
					<span class="et-icon-presentation sm-shadow icon-dark-slate-blue icons icon-lg"></span>
				</div>
				<h3 class="mg-md text-center">
					&nbsp;Stratégie
				</h3>
				<p class="text-center ">
					Plutôt que de suggérer des designs à la mode, nous travaillerons avec vous pour comprendre vos objectifs commerciaux afin de vous proposer le meilleur design possible.<br>
				</p>
			</section>
			<section class="col-sm-4">
				<div class="text-center">
					<span class="et-icon-edit sm-shadow icon-dark-slate-blue icons icon-lg"></span>
				</div>
				<h3 class="mg-md text-center">
					Illustrations
				</h3>
				<p class="text-center ">
					Un bon design n'est rien sans de bonnes illustrations. Laissez faire notre équipe de graphistes talentueux pour donner à vos pages une touche finale d'élégance.
				</p>
			</section>
		</div>
		<div class="row voffset-lg voffset">
			<div class="col-xs-12 col-md-8 col-md-offset-2 text-center">
				<blockquote>
					<q>La chouette agence est une excellente agence web! Les web designers ont réussi à capturer l'essence de notre
						entreprise et à l'intégrer à notre site. Cela nous a aidé à doubler nos ventes en lignes à Lyon.
					</q>
					<footer>Maxime Guibard, PDG de À vos fourchettes</footer>
				</blockquote>

			</div>
		</div>
	</div>
</div>
<!-- bloc-2-services END -->

<!-- bloc-3-what-i-do -->
<div class="bloc d-bloc bg-degrad-yellow border-inset " id="bloc-3-what-i-do">
	<div class="container bloc-lg">
		<div class="row tight-width-whitespace black-background">
			<div class="col-sm-12">
				<h2 class="mg-md text-center ">
					Nous souhaitons aider les entreprises de la région Lyonnaise à se développer et à connaître le succès. Nous travaillons pour aider les entreprises locales à attirer de nouveaux clients .<br>
				</h2>
				<p class="text-center white">
					Nous aimons collaborer avec des entrepreneurs créatifs et des entreprises locale, qu’elles aient besoin de créer un site de A à Z ou de donner un coup de jeune à leur site. Que vous ayez besoin d’une identité visuelle complète ou d’une refonte de votre site, n’hésitez pas à nous contacter. Nous travaillerons ensemble pour créer des sites beau et bien structurés, qui seront facilement trouvable sur les moteurs de recherche. <br><br><a class="ltc-white bold-link" href="page2.html">Contactez notre équipe</a><br>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- bloc-3-what-i-do END -->

<!-- bloc-4-portfolio -->
<div class="bloc  l-bloc" id="bloc-4-portfolio">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2>Nous travaillons avec beaucoup de clients, voici nos réalisations.</h2>
			</div>
		</div>
		<div class="row tight-width-whitespace portfolio-row">
			<article class="col-sm-6">
				<a href="#" data-lightbox="img/1.webp" data-gallery-id="gallery-1" data-caption="Refonte d'un site web pour un journal local" data-frame="snapshot-lb"><?php getimg("1","300","300","photos de plusieurs livre ","img-responsive portfolio-thumb") ?></a>
				<h3 class="mg-md text-center">
					Refonte d'un site web pour un journal local
				</h3>
				<p class="text-center">
					Nous avons créé une nouvelle identité visuelle pour un journal lyonnais.
				</p>
			</article>
			<article class="col-sm-6">
				<a href="#" data-lightbox="img/2.webp" data-gallery-id="gallery-1" data-caption="Création d'un site web pour photographes" data-frame="snapshot-lb"><?php getimg("2","300","300","image d' une personne prenant une photo","img-responsive portfolio-thumb") ?></a>
				<h3 class="mg-md text-center">
					Création d'un site web pour photographes
				</h3>
				<p class="text-center">
					Nous avons conçu la plateforme idéale pour laisser place aux clichés des photographes.
				</p>
			</article>
		</div>
		<div class="row tight-width-whitespace portfolio-row">
			<article class="col-sm-6">
				<a href="#" data-lightbox="img/3.webp" data-gallery-id="gallery-1" data-caption="Création d'un site internet pour un voyageur" data-frame="snapshot-lb"><?php getimg("3","300","300","img d' une table comprenant un ordianteur","img-responsive portfolio-thumb") ?></a>
				<h3 class="mg-md text-center">
					Création d'un site internet pour un voyageur
				</h3>
				<p class="text-center">
					Nous avons élaboré un site internet et des illustrations pour sublimer les vidéos et les articles de ce voyageur.
				</p>
			</article>
			<article class="col-sm-6">
				<a href="#" data-lightbox="img/4.webp" data-gallery-id="gallery-1" data-caption="Conception d'un site pour une agence de mariage" data-frame="snapshot-lb"><?php getimg("4","300","300","image d' un bureau avec deux ordinateur cote a cote","img-responsive portfolio-thumb") ?></a>
				<h3 class="mg-md text-center">
					Conception d'un site pour une agence de mariage
				</h3>
				<p class="text-center">
					Nous avons travaillé avec cette agence pour créer un site internet permettant la présentation détaillée de leurs prestations.
				</p>
			</article>
		</div>
	</div>
</div>
<!-- bloc-4-portfolio END -->



<section class="bloc  d-bloc " id="contact">
	<div class="container bloc-lg">
		<section class="bloc   d-bloc " id="bloc-6">
			<div class="container bloc-lg">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="text-center hero-bloc-text tc-white degrade">
							C'est partie pour votre super projet
						</h2>
						
					</div>
				</div>
			</div>
		</section>
		<section class="bloc bgc-white l-bloc" id="bloc-7">
			<div class="container bloc-lg">
				<div class="row">
					<section class="col-sm-6">
						<form id="form_1" novalidate="">
							<div class="form-group">
								<label>
									Nom
									<input id="name" class="form-control" required="">
								</label>
								
							<div class="help-block"></div></div>
							<div class="form-group">
								<label>
									Adresse email
									<input id="email" class="form-control" type="email" required="">
								</label>
								
							<div class="help-block"></div></div>
							<div class="form-group">
								<label>
									Comment nous avez-vous connu ?
									<input class="form-control" type="text" required="" id="input_504">
								</label>
								
							<div class="help-block"></div></div>
							<div class="form-group">
								<label>
									Brief de votre projet (Ajoutez autant de détails que nécessaire)<br>
									<textarea id="message" class="form-control" rows="4" cols="50" required=""></textarea>
								</label>
							<div class="help-block"></div></div> 
							<input class="bloc-button h-48 btn btn-lg btn-block cta-hero btn-atomic-tangerine form-control bg-degrad-yellow" type="submit" value="Envoyer">
						</form>
					</section>
					<section class="col-sm-6">
						<div>
							<a href="mailto:contact@lachouetteagence.com"  id="contact_email">contact@lachouetteagence.com</a>
							<address>
							2 place Sathonay<br>
							69001 Lyon</address>
							<p>Ouvert de 9h à 18h, du lundi au vendredi</p>
						</div>
					</section>
				</div>
			</div>
		</section>
	</div>
</section>
<!-- Footer - bloc-8 -->
<footer class="bloc  d-bloc bg-degrad-yellow" id="bloc-8">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-sm-12">
				<p class="text-center white">
					La chouette agence - Agence web basée à Lyon.<br>
				</p>
				<div class="row row-no-gutters social">
					<div class="col-sm-3">
						<div class="text-center">
							<a class="social" title="twitter" href="/twitter"><span class="fa fa-twitter icon-md"></span></a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="text-center">
							<a class="social" title="facebook" href="/facebook"><span class="fa fa-facebook icon-md"></span></a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="text-center">
							<a class="social" title="driblle" href="/drible"><span class="fa fa-dribbble icon-md"></span></a>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="text-center">
							<a class="social" title="instagram" href="/instagram"><span class="fa fa-instagram icon-md"></span></a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</footer>
<!-- Footer - bloc-8 END -->



</div>
<!-- Principal conteneur END -->
    

</body>
</html>
