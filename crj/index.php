<html lang="en">

<head>
    
    <title>Carly Rae Jepsen Lyric Generator</title>
    
    <meta name="viewport" content="initial-scale=1.0">
    <meta name="robots" content="noai, noimageai">

    <link rel="shortcut icon" type="image/x-icon" href="/generators/crj/crj.ico" />

    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cuprum&family=Lobster+Two&family=Roboto:ital,wght@0,300;0,500;1,300;1,500&display=swap" rel="stylesheet">

<style type="text/css">

    body{
        background: #E882BA;
        background-image: linear-gradient(to bottom left, #E882BA 0%, #68C7F1 100%);
        background-repeat: no-repeat;
  background-attachment: fixed;
        text-transform: lowercase;
        height: 100%;
    }
    
    #container{
        width: 45em;
        margin: 18vh auto 0;
    }
    
    
    h1{
        font: italic 300% 'Lobster Two';
        color: #FDEA33;
        text-align: center;
    }
    
    #title{
        text-transform: lowercase;
        font: normal 200% 'Cuprum';
        background: #FDEA33;
        box-shadow: 0.3em 0.3em 0em #68C7F1;
        color: #68C7F1;
        padding: 1.5em 1.5em 0.5em 1.5em;
        text-align: center;
        margin: 1em 0;
    }
    
    #blurb{
        font: normal 100%/160% 'Roboto';
        font-weight: 300;
        text-align: right;
        color: #FDEA33;
    }
    
    i{
        color:#E882BA;
        background: #FDEA33;
        padding: 1px 3px;
                box-shadow: 0.2em 0.2em 0em #68C7F1;

    }
    
    input[type="button"]{
    font: normal 80% 'Cuprum', sans-serif;
    color: #FDEA33;
    text-transform: lowercase;
    text-align: center;
    border:none;
    display: block;
    padding: 0.5em;
    background: #68C7F1;
    margin: 0;
}

input[type=button]:hover, input[type=button]:focus{
cursor: pointer;
background: #E882BA;
}

#footer{
    text-align: center;
    font: normal 100% 'Roboto';
    color: #FDEA33;
    font-weight: bold;
    margin-top: 3em;
}

a:link, a:visited{
    color: #FDEA33;
    background: #E882BA;
    padding: 1px 3px;
        text-decoration: none;

}

a:hover, a:active, a:focus{
    text-decoration: none;
    background: #68C7F1;
     padding: 1px 3px;
     text-decoration: none;
}

@media only screen and (max-width: 430px) and (min-width: 0px) {

html {
-webkit-text-size-adjust: none;
font-size: 90%;
}


#container {
    width: 100%;
    margin: 5vh auto 0;
    
}
</style>

</head>

<div id="container">
<h1>Carly Rae Jepsen Lyric Generator</h1>

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
    <p>This contains lines from CRJ's <i>Kiss</i>, <i>Emotion</i>, <i>Emotion Side B</i>, <i>Dedicated</i>, <i>Dedicated Side B</i>, <i>The Loneliest Time</i>, and <i>The Loveliest Time</i>. 
    <br />feel free to use your result as a fic title, premise, or anything else.
    <br />If you roll one that has a typo, punctuation issue, or is put awkwardly, feel free to contact me..
    <br />Credit for using this is not required, but always appreciated.</p>
</div>

<div id="footer">
      &copy; <?php echo date("Y"); ?> &bull; <a href="/generators/">generators</a> &bull; <a href="/generators/ts">Taylor Swift</a> &bull; <a href="/generators/mitski">Mitski</a> &bull; <a href="/generators#lyrics">Others</a> &bull; <a href="https://aroceu.com">contact</a>
    </div>
</div>

</div>



</html>