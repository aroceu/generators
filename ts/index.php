<html lang="en">

<head>
    
    <title>Taylor Swift Lyric Generator</title>
    
       <meta name="robots" content="noai, noimageai">
        <meta name="description" content="Prompt generators originally made for fannish use, but may have other applications. These generators include some fandom-specific generators, the Sexy Times with Wangxian tag generator, a handful of lyric generators, kink generators, and other types of prompt generators I come up with whenever I feel like making them."/>

		<meta charset="UTF-8">
        <meta name="description" content="Prompt generators originally made for fannish use, but may have other applications. These generators include some fandom-specific generators, the Sexy Times with Wangxian tag generator, a handful of lyric generators, kink generators, and other types of prompt generators I come up with whenever I feel like making them."/>
        <meta property="og:title" content="aroceu's prompt generators" />
        <meta property="og:description" content="Prompt generators originally made for fannish use, but may have other applications. These generators include some fandom-specific generators, the Sexy Times with Wangxian tag generator, a handful of lyric generators, kink generators, and other types of prompt generators I come up with whenever I feel like making them." />
        <meta property="og:image" content="https://aroceu.com/generators/preview.png" />
        <meta property="og:url" content="https://aroceu.com/generators" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" type="image/x-icon" href="red.ico" />

    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=IM+Fell+English:ital@0;1&display=swap" rel="stylesheet">

<style type="text/css">

    *{
        box-sizing: border-box;
        image-rendering: optimizeQuality;
    }

    body{
        background: #ffcc7c;
        background: url('taylor2.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-attachment: fixed;
  background-repeat: no repeat;
        text-transform: lowercase;
    }

    ::selection {
        background: #000;
        color: #ffcc7c;
    }
    ::-moz-selection {
        background: #000;
        color: #ffcc7c;
    }
    ::-webkit-selection {
        background: #000;
        color: #ffcc7c;
    }
    
    #container{
        width: 50em;
        margin: 18vh auto 0;
    }
    
    h1{
        font: normal 400% 'IM Fell English';
        text-align: center;
color: #000;
  text-transform: lowercase;
  text-shadow: 0.06em 0.06em 0em #FFCC7C;
  margin: 0;
    }
    
    #title{
        text-transform: lowercase;
        font: italic 200% 'IM Fell English';
        background: #000;
        color: #fff;
        padding: 1.5em 1.5em 0.5em 1.5em;
        text-align: center;
        margin: 1em 0 0;
        opacity: 0.8;
    }
    
    #blurb{
        font: normal 100%/160% 'IM Fell English';
        text-align: left;
        color: #fff;
        background: #000;
        padding: 0.5em 1em;
    }
    
    input[type="button"]{
    font: normal 80% 'IM Fell English', sans-serif;
    color: #000;
    text-transform: lowercase;
    text-align: center;
    border:none;
    display: block;
    padding: 0.5em;
    background: #ffcc7c;
    margin: 0;
}

input[type=button]:hover{
cursor: pointer;
background: #000;
color: #ffcc7c;
}

#footer{
    text-align: center;
    font: normal 120% 'IM Fell English';
    color: #000;
    padding: 1em;
    background: #ffc67c;
    opacity: 0.8;
}

a:link, a:visited{
   text-decoration: none;
   border-bottom: 1px dotted;
   color: #000;
}

i{
    color: #ffc67c;
}

a:hover, a:active{
    border-bottom: 1px solid;
}

@media only screen and (max-width: 430px) and (min-width: 0px) {

html {
-webkit-text-size-adjust: none;
font-size: 90%;
background: url('taylor2.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 100%;
    overflow: hidden;
}


#container {
    width: 100%;
    margin: 5vh auto;
    
}

}
</style>

</head>

<div id="container">
<h1>Taylor Swift Lyric Generator</h1>

<div id="title">
<?php

$f_contents = file("lyrics.txt");
$line = $f_contents[array_rand($f_contents)];
$data = $line;

print($data);

?>

<p align="center"><input type="button" onclick="location.reload();" value="Generate another?" /></p>


</div>

<div id="blurb">
    <p>This contains lines from Taylor's <i>Self-Titled</i>, <i>Fearless (Taylor's Version)</i>, <i>Speak Now (Taylor's Version)</i>, <i>Red (Taylor's Version)</i>, <i>1989 (Taylor's Version)</i>, <i>reputation</i>, <i>Lover</i>, <i>Folklore</i>, <i>Evermore</i>, <i>Midnights</i>, <i>Tortured Poets Department</i>, and <i>The Life of a Showgirl</i>.
    <br />Feel free to use your result as a fic title, premise, or anything else.
    <br />If you roll one that has a typo, punctuation issue, or is put awkwardly, feel free to contact me.
    <br />Credit for using this is not required, but always appreciated.</p>
</div>

<div id="footer">
    &copy; <?php echo date("Y"); ?> | <a href="../">Generators</a> | <a href="../crj">Carly Rae Jepsen</a> | <a href="../mitski">Mitski</a> | <a href="https://aroceu.com">Contact</a>
    </div>
</div>

</div>



</html>