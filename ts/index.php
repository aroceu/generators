<html lang="en">

<head>
    
    <title>Taylor Swift Lyric Generator</title>
    
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/generators/ts/red.ico" />

    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=IM+Fell+English:ital@0;1&display=swap" rel="stylesheet">

<style type="text/css">

    body{
        background: #1A1E44;
        background: url('taylor.jpg') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-attachment: fixed;
  background-repeat: no repeat;
        text-transform: lowercase;
    }
    
    #container{
        width: 50em;
        margin: 18vh auto 0;
    }
    
    h1{
        font: normal 400% 'IM Fell English';
        text-align: center;
        color: #CBC9B4;
        text-transform: lowercase;
        text-shadow: 0.06em 0.06em 0em #a92148;
        margin: 0;
    }
    
    #title{
        text-transform: lowercase;
        font: italic 200% 'IM Fell English';
        background: #a92148;
        color: #CBC9B4;
        padding: 1.5em 1.5em 0.5em 1.5em;
        text-align: center;
        margin: 1em 0 0;
        opacity: 0.8;
    }
    
    #blurb{
        font: normal 100%/160% 'IM Fell English';
        text-align: left;
        color: #a7ada1;
        background: #7f2c44;
        padding: 0.5em 1em;
    }
    
    input[type="button"]{
    font: normal 80% 'IM Fell English', sans-serif;
    color: #a92148;
    text-transform: lowercase;
    text-align: center;
    border:none;
    display: block;
    padding: 0.5em;
    background: #CBC9B4;
    margin: 0;
}

input[type=button]:hover{
cursor: pointer;
background: #7f2c44;
color: #CBC9B4;
}

#footer{
    text-align: center;
    font: normal 120% 'IM Fell English';
    color: #889983;
    padding: 1em;
    background: #4d1222;
    opacity: 0.8;
}

a:link, a:visited{
   text-decoration: none;
   border-bottom: 1px dotted;
   color: #a7ada1;

}

a:hover, a:active{
    border-bottom: 1px solid;
}

@media only screen and (max-width: 430px) and (min-width: 0px) {

html {
-webkit-text-size-adjust: none;
font-size: 90%;
background: url('taylor.jpg') no-repeat center center fixed;
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
    <p>This contains lines from Taylor's <i>Self-Titled</i>, <i>Fearless (Taylor's Version)</i>, <i>Speak Now (Taylor's Version)</i>, <i>Red (Taylor's Version)</i>, <i>1989 (Taylor's Version)</i>, <i>reputation</i>, <i>Lover</i>, <i>Folklore</i>, <i>Evermore</i>, <i>Midnights</i>, and <i>Tortured Poets Department</i>.
    <br />Feel free to use your result as a fic title, premise, or anything else.
    <br />If you roll one that has a typo, punctuation issue, or is put awkwardly, feel free to contact me.
    <br />Credit for using this is not required, but always appreciated.</p>
</div>

<div id="footer">
    &copy; <?php echo date("Y"); ?> | <a href="/generators/">Generators</a> | <a href="/generators/crj">Carly Rae Jepsen</a> | <a href="/generators/mitski">Mitski</a> | <a href="https://aroceu.com">Contact</a>
    </div>
</div>

</div>



</html>