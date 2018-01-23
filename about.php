<!doctype html>
<html>
<head>

	<title>Sebastian John von Freyend - User experience design student - About</title>
	
	<link rel="stylesheet" href="../css/reset.css?version=update-2">
	<link rel="stylesheet" href="../css/typography.css?version=update-2">
	<link rel="stylesheet" href="../css/presentation.css?version=update-2">
	<link rel="stylesheet" href="../css/project.css?version=update-2">
	<link rel="stylesheet" href="../css/instagram.css?version=update-2">
	<link rel="stylesheet" href="../css/responsive.css?version=update-2">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<script src="../js/events.js" type="text/javascript"></script>
	<script src="../js/smooth-scroll.js" type="text/javascript"></script>
	<script src="../js/parallax-waves.js" type="text/javascript"></script>
	<script src="../js/instafeed.js" type="text/javascript"></script>
	<script type="text/javascript">
		var feed = new Instafeed({
			get: 'user',
			userId: '670488427',
			clientId: '333fc448b819432da696bc00122dd13f',
			accessToken: '670488427.333fc44.1b41263a45034511a8cc0bd536000121',
			resolution: 'standard_resolution',
			limit: '3',
			template: '<div><a href="{{link}}"><img src="{{image}}"><span>{{location}}</span></div></a>'
		});
		feed.run();
	</script>
	
</head>
<body>
	
	<a href="/">
	<header>
	<div class="inner">
			Sebastian John von Freyend
	</div>
	</header>
	</a>

	<section id="project-top" class="content">
		<div class="inner">
			<h1>About me</h1>
			<div id="picture"></div>
			
			<p>
			I am a German user experience design graduate student. I attend a double Master's degree at Universit&eacute; Paris-Saclay and KTH Royal Institute of Technology in Stockholm, where I currently spend my second year.
			</p>
			
			<p>
				At the moment I read <a href="http://danbrown.com/deception-point/" target="_blank">Deception point</a> and <a href="http://thisisservicedesignthinking.com/" target="_blank">This is service design thinking</a>.
			</p>
		</div>
		
		<?php include('waves.php'); ?>
	</section>
	
	<section id="project-two" class="content">
		<div class="inner">
			<h1>Interests and curriculum</h1>
			<p>
				Originally, I come from Munich, Germany. After living in Lyon and then Paris, I am now based in Stockholm. I am interested in modern art and impressionalism (the collection of the Mus&eacute;e d'Orsay in Paris is still my favourite), travel and languages. I fluently speak and write German, English and French. I also enjoy playing Squash and snowboarding in the Alpes and Pyrenees.
			</p>
			
			<p>
				I started my journey to become a user experience designer during my Bachelor's in Media informatics, a practice-oriented variation of a traditional computer science degree with a focus on user-centred design. Thus, I started a double Master's degree in Human-Computer Interaction and Design at Universit&eacute; Paris-Saclay and KTH Royal Institute of Technology, Stockholm. I also became quite interested in cognitive and behavioural psychology.
			</p>
			
			<p>
				Now, driven by compassion and user needs, I impact people's lives by bridging the gap between them and the products they use. I enjoy both the technological and psychological aspects of user experience design and its relation to art.
			</p>
	</section>
	
	<section id="project-three" class="content">
		<div class="inner">
			<h1>About this website</h1>
			<p>
				This website was greatly inspired by Scandinavia, Sweden and Stockholm, where I currently live. The main colours, royal blue and yellow, allude to the colours of the Swedish national flag. The wave symbol, which can be found on most pages, represents the baltic sea. In fact, the capitol of Stockholm uses the same symbol for an interactive statue displaying information about the water quality of the sea in the bay of the city.
			</p>
			<p>
				The type used on this website is <a href="http://monokrom.no/fonts/aften" target="_blank">Aften Screen</a>. It is a font developed by Norwegian typefoundry <a href="http://monokrom.no/" target="_blank">Monokrom</a>, and is distinctly inspired by fonts used throughout Scandinavia. It was developed specifically for reading on screens. Motion on the website was designed according to Google's <a href="https://material.io/guidelines/motion/material-motion.html" target="_blank">Material Design motion guidelines</a>. Oh, and coding was done in vanilla HTML5, CSS3 and JavaScript (ES6). The Instagram feed below is generated using <a href="http://instafeedjs.com" target="_blank">Instafeed.js</a>.
			</p>
	</section>
	
	<section id="project-four" class="content">
		<div class="inner">
			<h1>From my Instagram</h1>
			<div id="instafeed">
			</div>
		</div>
	</section>

</body>
</html>