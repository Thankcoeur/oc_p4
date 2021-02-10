
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
	<meta name="description" content="La Chouette Agence est une  Entreprise de Web Design basée à Lyon">
    <link rel="shortcut icon" type="image/webp" href="favicon.webp">
    
	 
	 <?php 
	 require 'minjs.php';

	

function minify_js($input) {
    if(trim($input) === "") return $input;
    return preg_replace(
        array(
            // Remove comment(s)
            '#\s*("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')\s*|\s*\/\*(?!\!|@cc_on)(?>[\s\S]*?\*\/)\s*|\s*(?<![\:\=])\/\/.*(?=[\n\r]|$)|^\s*|\s*$#',
            // Remove white-space(s) outside the string and regex
            '#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\'|\/\*(?>.*?\*\/)|\/(?!\/)[^\n\r]*?\/(?=[\s.,;]|[gimuy]|$))|\s*([!%&*\(\)\-=+\[\]\{\}|;:,.<>?\/])\s*#s',
            // Remove the last semicolon
            '#;+\}#',
            // Minify object attribute(s) except JSON attribute(s). From `{'foo':'bar'}` to `{foo:'bar'}`
            '#([\{,])([\'])(\d+|[a-z_][a-z0-9_]*)\2(?=\:)#i',
            // --ibid. From `foo['bar']` to `foo.bar`
            '#([a-z0-9_\)\]])\[([\'"])([a-z_][a-z0-9_]*)\2\]#i'
        ),
        array(
            '$1',
            '$1$2',
            '}',
            '$1$3',
            '$1.$3'
        ),
    $input);
}

function minify_css($input) {
    if(trim($input) === "") return $input;
    return preg_replace(
        array(
            // Remove comment(s)
            '#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')|\/\*(?!\!)(?>.*?\*\/)|^\s*|\s*$#s',
            // Remove unused white-space(s)
            '#("(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\'|\/\*(?>.*?\*\/))|\s*+;\s*+(})\s*+|\s*+([*$~^|]?+=|[{};,>~]|\s(?![0-9\.])|!important\b)\s*+|([[(:])\s++|\s++([])])|\s++(:)\s*+(?!(?>[^{}"\']++|"(?:[^"\\\]++|\\\.)*+"|\'(?:[^\'\\\\]++|\\\.)*+\')*+{)|^\s++|\s++\z|(\s)\s+#si',
            // Replace `0(cm|em|ex|in|mm|pc|pt|px|vh|vw|%)` with `0`
            '#(?<=[\s:])(0)(cm|em|ex|in|mm|pc|pt|px|vh|vw|%)#si',
            // Replace `:0 0 0 0` with `:0`
            '#:(0\s+0|0\s+0\s+0\s+0)(?=[;\}]|\!important)#i',
            // Replace `background-position:0` with `background-position:0 0`
            '#(background-position):0(?=[;\}])#si',
            // Replace `0.6` with `.6`, but only when preceded by `:`, `,`, `-` or a white-space
            '#(?<=[\s:,\-])0+\.(\d+)#s',
            // Minify string value
            '#(\/\*(?>.*?\*\/))|(?<!content\:)([\'"])([a-z_][a-z0-9\-_]*?)\2(?=[\s\{\}\];,])#si',
            '#(\/\*(?>.*?\*\/))|(\burl\()([\'"])([^\s]+?)\3(\))#si',
            // Minify HEX color code
            '#(?<=[\s:,\-]\#)([a-f0-6]+)\1([a-f0-6]+)\2([a-f0-6]+)\3#i',
            // Replace `(border|outline):none` with `(border|outline):0`
            '#(?<=[\{;])(border|outline):none(?=[;\}\!])#',
            // Remove empty selector(s)
            '#(\/\*(?>.*?\*\/))|(^|[\{\}])(?:[^\s\{\}]+)\{\}#s'
        ),
        array(
            '$1',
            '$1$2$3$4$5$6$7',
            '$1',
            ':0',
            '$1:0 0',
            '.$1',
            '$1$3',
            '$1$2$4$5',
            '$1$2$3',
            '$1:0',
            '$1$2'
        ),
    $input);
}

	 function getstyle($tab_css) {

		foreach ( $tab_css as $value) {

$contenu_fichier = minify_css( file_get_contents("./css/$value.css"));


echo '<style media="print"   onload="this.media=\'all\'">',$contenu_fichier,'</style>';


		}





	 }

	 function getjs($tab_js) {

		foreach ($tab_js as $nom) {

$contenu_fichier =  Minifier::minify( file_get_contents("./js/$nom.js"));
		
		
		echo "<script defer>$contenu_fichier</script>";


		}

		
		
		
		
			 }

	function getimg($name,$widht,$height,$alt,$class) {
		// A few settings


// Read image path, convert to base64 encoding
$imageData = base64_encode(file_get_contents("img/$name.webp"));

// Format the image SRC:  data:{mime};base64,{data};
$src = 'data:image/webp'.';base64,'.$imageData;

// Echo out a sample image
echo '<img class="',$class,'" width="',$widht,'"  height="',$height,'" alt="',$alt,'" src="',$src,'">';




	}

	


	 getstyle(["bootstrap","et-line","font-awesome","style"]);
	 getjs(["jquery-2.1.0","jquery.touchSwipe","jqBootstrapValidation","bootstrap","blocs","formHandler","gmaps"])
	

	 




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
<div class=" bgc-white l-bloc fixe  " id="bloc-0">
	<div class="container-fluide bg-degrad-grey ">

		<nav class="navbar row  ">
			<div class="navbar-header ml-1">
				<a class="navbar-brand" href="index.html"><?php getimg("la-chouette-agence","250","50","logo de notre site","") ?>
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
						<a href="#bloc-4-portfolio">Portfolio</a>
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
<div class="block-menu"></div>
<!-- bloc-1-presentation -->
<header class="bloc bg-degrad-yellow b-parallax border-inset" id="bloc-1-hero">
	<div class="container bloc-lg">
		<div class="row tight-width-whitespace">
		<div class="col-sm-12 mb-1">
			<div class="embed-responsive embed-responsive-16by9">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/NpEaa2P7qZI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
			
			</div>
			<div class="col-sm-12">
				<?php getimg("logo","150","150","logo du site","center-block image-resize-mode") ?>
				<h1 class="text-center hero-bloc-text c-white ">
					La Chouette Agence - Entreprise de Web Design - Lyon
				</h1>
				<div class="text-center">
					<a href="page2.html" class="btn btn-lg btn-clean btn-rd c-white " id="cta-hero">Nous Contacter</a>
				</div>
			</div>

			
		</div>
	</div>
</header>
<!-- bloc-1-presentation END -->

<!-- bloc-2-services -->
<div class="bloc bgc-white l-bloc" id="service">
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
					Nous aimons collaborer avec des entrepreneurs créatifs et des entreprises locale, qu’elles aient besoin de créer un site de A à Z ou de donner un coup de jeune à leur site. Que vous ayez besoin d’une identité visuelle complète ou d’une refonte de votre site, n’hésitez pas à nous contacter. Nous travaillerons ensemble pour créer des sites beau et bien structurés, qui seront facilement trouvable sur les moteurs de recherche. 
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
				<a href="#" data-lightbox="img/livre.webp" data-gallery-id="gallery-1" data-caption="Refonte d'un site web pour un journal local" data-frame="snapshot-lb"><?php getimg("livre","300","300","
				plusieur livre de toute les couleurs","img-responsive portfolio-thumb") ?></a>
				<h3 class="mg-md text-center">
					Refonte d'un site web pour un journal local
				</h3>
				<p class="text-center">
					Nous avons créé une nouvelle identité visuelle pour un journal lyonnais.
				</p>
			</article>
			<article class="col-sm-6">
				<a href="#" data-lightbox="img/photo.webp" data-gallery-id="gallery-1" data-caption="Création d'un site web pour photographes" data-frame="snapshot-lb"><?php getimg("photo","300","300","personne prenant une photo","img-responsive portfolio-thumb") ?></a>
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
				<a href="#" data-lightbox="img/pc_other.webp" data-gallery-id="gallery-1" data-caption="Création d'un site internet pour un voyageur" data-frame="snapshot-lb"><?php getimg("pc_other","300","300","table comprenant un ordinateur","img-responsive portfolio-thumb") ?></a>
				<h3 class="mg-md text-center">
					Création d'un site internet pour un voyageur
				</h3>
				<p class="text-center">
					Nous avons élaboré un site internet et des illustrations pour sublimer les vidéos et les articles de ce voyageur.
				</p>
			</article>
			<article class="col-sm-6">
				<a href="#" data-lightbox="img/pc.webp" data-gallery-id="gallery-1" data-caption="Conception d'un site pour une agence de mariage" data-frame="snapshot-lb"><?php getimg("pc","300","300","bureau avec deux ordinateur cote à cote","img-responsive portfolio-thumb") ?></a>
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



<div class="bloc  d-bloc " id="contact">
	<div class="container bloc-lg">
		<section class="bloc   d-bloc " id="bloc-6">
			<div class="container bloc-lg">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="text-center hero-bloc-text c-black">
							C'est partie pour votre super projet
						</h2>
						
					</div>
				</div>
			</div>
		</section>
		<div class="bloc c-white l-bloc bg-degrad-yellow border" id="bloc-7">
			<div class="container bloc-lg">
				<div class="row">
					<div class="col-sm-6">
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
							<input class="bloc-button h-48 btn btn-lg btn-block cta-hero  form-control " type="submit" value="Envoyer">
						</form>
					</div>
					<div class="col-sm-6">
						<div>
							<a href="mailto:contact@lachouetteagence.com"  id="contact_email">contact@lachouetteagence.com</a>
							<address>
							2 place Sathonay<br>
							69001 Lyon</address>
							<p>Ouvert de 9h à 18h, du lundi au vendredi</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer - bloc-8 -->
<footer class="bloc  d-bloc " id="bloc-8">
	<div class="container bloc-sm">
		<div class="row">
			<div class="col-sm-12">
				
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
