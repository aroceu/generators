<html>

<head>

<title>aroceu's prompt generators ☆</title>

<meta name="viewport" content="initial-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="/generators/favico.png" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,700,700i|Megrim|Major+Mono+Display" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
<script type="text/javascript">
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1500);
        return false;
      }
    }
  });
});

</script>

<link rel="stylesheet" href="/generators/style.css" type="text/css" media="screen">

<style type="text/css">

	ul li.lovers{
		width:  50%;
		margin-left: -2%;
	}

	.white ul li.lovers a{
		width:  auto;
	}

	li.lovers a:link, li.lovers a:visited{
				color: #86001E;
				text-decoration: none;
				border: 1px solid #86001E;
				padding: 1em;
				letter-spacing: -2px;
				text-transform: lowercase;
				background:  none;
						outline-offset: -2px;

	}

	li.lovers a:hover, li.lovers a:active{
		text-transform: uppercase;
		color:  #fff;
	}

	.white ul li.lovers a:hover{
	color: #fff;
	background: url('img/rdiag.png') #86001E;
	border: 1px #86001E solid;
}

</style>

</head>

<body>
	
	<div id="nav"><div class="blackbg"><ul><li><a href="#generic">Generic</a></li>
		<li><a href="#fandom">Fandom</a></li>
		<li><a href="#lyrics">Lyrics</a></li>
		<li><a href="#top" class="uarr">To Top &uArr;</a></li></ul>
	</div>
	</div>

	<section class="top black" id="top">
		<div class="content">
		<div id="header">
			<div class="whitebg">aroceu's <br />prompt<br /> generators
			</div>
			</div>

		<div class="foot">
			&copy; <?php echo date('Y')?> &bull; <a href="ex">explanations</a> &bull; ta@aroceu.com
	</div>
	</section>

	<section class="white" id="generic">

		<h1>Generic</h1>

		<h2>Conventional</h2>
				<ul><li><a href="prompts">Basic</a></li>
					<li><a href="nsfw">NSFW + Basic</a></li>
					<li><a href="risky">Risky + Basic</a></li></ul>
				<h2>Amalgamations</h2>
					<ul><li><a href="multi">Combined Prompts</a></li>
					<li><a href="set">'Verse+Premise+Job</a></li>
					<li><a href="2careers">Career x Career</a></li></ul>
				<h2>Miscellaneous</h2>
				<ul>
					<li><a href="careers">Careers</a></li>
					<li><a href="kink">Kinks</a></li>
					<li><a href="all">All</a></li></ul>
				<ul>
					<li class="lovers"><a href="lovers">&hearts; The "... to Lovers" Generator &hearts;</a></h2></li>
					</ul>

	</section>

	<section class="black" id="fandom">

		<h1>Fandom</h1>
		
		<h2>Comprehensive</h2>

		<ul><li><a href="bbs">Bad Buddy</a></li>
		    <li><a href="hq">Haikyuu!!</a></li>
							<li><a href="hp">Harry Potter</a></li>
							<li><a href="mdzs">Mo Dao Zu Shi</a></li>
							</ul>
		<h2>One Page</h2>
		<ul>
					<li><a href="misc/tsn">The Social Network</a></li>
					<li><a href="misc/yoi">Yuri!! on Ice</a></li>
					<li><a href="misc/pkmn">Pok&eacute;mon</a></li>
					<li><a href="misc/fea">Fire Emblem: Awakening</a></li>
					<li><a href="sexytimes">Sexy Times</a></li>
				</ul>

	</section>
	
	<section class="white" id="lyrics">
	    
	    <h1>Lyrics</h1>
	    
	    <ul>
				    <li><a href="crj">Carly Rae Jepsen</a></li>
				    <li><a href="ts">Taylor Swift</a></li>
				    <li><a href="mitski">Mitski</a></li>
				    </ul>
		<!--<ul>
				    <li><a href="">Fall Out Boy</a></li>
				    <li><a href="">The National</a></li>
				    <li><a href="">Hozier</a></li>
				    </ul>
	    <ul>
				    <li><a href="">Florence + tM</a></li>
				    <li><a href="">Ariana Grande</a></li>
				    <li><a href="">Halsey</a></li>
				</ul> -->
	</section>

</body>

</html>